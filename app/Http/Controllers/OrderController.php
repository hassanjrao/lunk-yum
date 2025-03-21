<?php

namespace App\Http\Controllers;

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
        return view('order');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'school_id' => ['required', 'integer', 'exists:schools,id'],
            'plan_id' => ['required', 'integer', 'exists:plans,id'],
            'student_name' => ['required', 'string', 'max:255'],
            'student_grade' => ['required', 'string', 'max:255'],
            'student_id_image' => ['required', 'file', 'image', 'max:2048'],
            'starts_from' => ['required', 'date'],
            'ends_at' => ['nullable', 'date', 'after:starts_from'],
            'payment_method' => ['required', 'string', 'max:255'],
            'payment_receipt' => ['required', 'file', 'image', 'max:2048'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->name . '1234'),
            'school_id' => $request->school_id,
            'plan_id' => $request->plan_id,
            'student_name' => $request->student_name,
            'student_grade' => $request->student_grade,
            'student_id_image' => $request->student_id_image->store('student_id_images'),
            'starts_from' => $request->starts_from,
            // 'ends_at' => $request->ends_at,
            'payment_method' => $request->payment_method,
            'payment_receipt' => $request->payment_receipt->store('payment_receipts'),
        ]);

        $user->assignRole('user');

        try {
            $user->notify(new OrderNotification($user));


            $admin = User::whereHas('roles', function ($q) {
                $q->where('name', 'admin');
            })->first();

            $admin->notify(new AdminOrderNotification($user));
        } catch (Exception $e) {
            Log::info('EmailOrderError', [
                'message' => $e->getMessage(),
                'stack' => $e->getTraceAsString()
            ]);
        }


        return redirect()->route('order.index')->withToastSuccess('Order created successfully, please check your email');
    }
}
