<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\OrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'student_name' => ['required', 'string', 'max:255'],
            'student_grade' => ['required', 'string', 'max:255'],
            'student_id_image' => ['required', 'file', 'image', 'max:2048'],
            'starts_from' => ['required', 'date'],
            'ends_at' => ['required', 'date', 'after:starts_from'],
            'payment_method' => ['required', 'string', 'max:255'],
            'payment_receipt' => ['required', 'file', 'image', 'max:2048'],
        ]);

        $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->name.'1234'),
            'school_id' => $request->school_id,
            'student_name' => $request->student_name,
            'student_grade' => $request->student_grade,
            'student_id_image' => $request->student_id_image->store('student_id_images'),
            'starts_from' => $request->starts_from,
            'ends_at' => $request->ends_at,
            'payment_method' => $request->payment_method,
            'payment_receipt' => $request->payment_receipt->store('payment_receipts'),
        ]);

        $user->assignRole('user');

        $user->notify(new OrderNotification($user));


        return redirect()->route('order.index')->withToastSuccess('Order created successfully, please check your email');
    }
}
