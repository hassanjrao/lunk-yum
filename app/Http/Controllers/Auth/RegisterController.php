<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'school_id' => ['required', 'integer', 'exists:schools,id'],
            'student_name' => ['required', 'string', 'max:255'],
            'student_grade' => ['required', 'string', 'max:255'],
            'student_id_image' => ['required', 'file', 'image', 'max:2048'],
            'starts_from' => ['required', 'date'],
            'ends_at' => ['required', 'date', 'after:starts_from'],
            'payment_method' => ['required', 'string', 'max:255'],
            'payment_receipt' => ['required', 'file', 'image', 'max:2048'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'school_id' => $data['school_id'],
            'student_name' => $data['student_name'],
            'student_grade' => $data['student_grade'],
            'student_id_image' => $data['student_id_image']->store('student_id_images'),
            'starts_from' => $data['starts_from'],
            'ends_at' => $data['ends_at'],
            'payment_method' => $data['payment_method'],
            'payment_receipt' => $data['payment_receipt']->store('payment_receipts'),
        ]);

        $user->assignRole('user');

        return $user;
    }
}
