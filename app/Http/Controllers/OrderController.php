<?php

namespace App\Http\Controllers;

use App\Mail\StudentLunchOrderMail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Plan;
use App\Models\User;
use App\Notifications\AdminOrderNotification;
use App\Notifications\OrderNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('order', compact('plans'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'school_id' => ['required', 'integer', 'exists:schools,id'],
            'plan_id' => ['required', 'integer', 'exists:plans,id'],
            'starts_from' => ['required', 'date'],
            'payment_method' => ['required', 'string', 'max:255'],
            'payment_receipt' => ['required', 'file', 'image', 'max:2048'],
            'students' => 'required|array',
            'relation' => 'required'

        ]);

        $students = $request->students;

        $finalPrice = 0;

        $plan = Plan::findorfail($request->plan_id);

        $basePrice = floatval($plan->price);

        $totalPrice = $basePrice;


        $discount = 0;
        $discountPercentage = 0;

        if (count($students) > 1) {
            $discountPercentage = 5;


            foreach ($students as $ind => $std) {

                if ($ind >= 1) {
                    $bPrice = $basePrice - ($basePrice * 0.05);
                    $totalPrice += $bPrice;
                }
            }
        }

        $totalPriceAfterDiscount = $totalPrice - $discount;

        $finalPrice = $basePrice * count($students);



        $user = User::updateOrCreate([
            'email' => $request->email
        ], [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->name . '1234'),
            'relation' => $request->relation
        ]);

        $user->assignRole('user');

        $order = Order::create([
            'user_id' => $user->id,
            'plan_id' => $request->plan_id,
            'school_id' => $request->school_id,
            'payment_method' => $request->payment_method,
            'payment_receipt' => $request->payment_receipt->store('payment_receipts'),
            'starts_from' => $request->starts_from,
            'ends_at' => $request->starts_from,
            'discount_percentage' => $discountPercentage,
            'total_price' => $finalPrice,
            'total_price_after_discount' => $totalPriceAfterDiscount
        ]);

        foreach ($students as $student) {
            OrderDetail::create([
                'order_id' => $order->id,
                'student_name' => $student['name'],
                'student_class' => $student['class'],
                'student_id_image' => $student['image']->store('student_id_images')
            ]);
        }

        try {

            $admin = User::whereHas('roles', function ($q) {
                $q->where('name', 'admin');
            })->first();

            $admin->notify(new AdminOrderNotification($user));
        } catch (Exception $e) {
            Log::info('EmailOrderErrorAdmin', [
                'message' => $e->getMessage(),
                'stack' => $e->getTraceAsString()
            ]);
        }

        try {

            Mail::to($user->email)->send(new StudentLunchOrderMail($order));

        } catch (Exception $e) {
            Log::info('EmailOrderErrorUser', [
                'message' => $e->getMessage(),
                'stack' => $e->getTraceAsString()
            ]);
        }


        return redirect()->route('order.thankyou')->withToastSuccess('Order created successfully, please check your email');
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
