<?php

namespace App\Http\Controllers;

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

class OrderController extends Controller
{
    public function index()
    {
        $plans=Plan::all();
        return view('order',compact('plans'));
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
            'students'=>'required|array',
            'relation'=>'required'

        ]);

        $students=$request->students;

        $totalPrice=0;

        $plan=Plan::findorfail($request->plan_id);

        $totalPrice=floatval($plan->price);
        $discount=0;
        $discountPercentage=0;

        if(count($students)>1){
            $discountPercentage=5;
            $discount = $totalPrice * ($discountPercentage/100) * count($students);
        }

        $totalPriceAfterDiscount=$totalPrice-$discount;



        $user = User::updateOrCreate([
            'email'=>$request->email
        ],[
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->name . '1234'),
            'relation'=>$request->relation
        ]);

        $user->assignRole('user');

        $order=Order::create([
            'user_id'=>$user->id,
            'plan_id'=>$request->plan_id,
            'school_id'=>$request->school_id,
            'payment_method'=>$request->payment_method,
            'payment_receipt'=>$request->payment_receipt->store('payment_receipts'),
            'starts_from'=>$request->starts_from,
            'ends_at'=>$request->starts_from,
            'discount_percentage'=>$discountPercentage,
            'total_price'=>$totalPrice,
            'total_price_after_discount'=>$totalPriceAfterDiscount
        ]);

        foreach($students as $student){
            OrderDetail::create([
                'order_id'=>$order->id,
                'student_name'=>$student['name'],
                'student_class'=>$student['class'],
                'student_id_image'=>$student['image']->store('student_id_images')
            ]);
        }

        try {
            // $user->notify(new OrderNotification($user));


            // $admin = User::whereHas('roles', function ($q) {
            //     $q->where('name', 'admin');
            // })->first();

            // $admin->notify(new AdminOrderNotification($user));
        } catch (Exception $e) {
            Log::info('EmailOrderError', [
                'message' => $e->getMessage(),
                'stack' => $e->getTraceAsString()
            ]);
        }


        return redirect()->route('order.thankyou')->withToastSuccess('Order created successfully, please check your email');
    }

    public function thankyou(){
        return view('thankyou');
    }
}
