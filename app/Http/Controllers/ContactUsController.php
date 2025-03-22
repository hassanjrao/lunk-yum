<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\User;
use App\Notifications\ContactUsNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactUsController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

       $contactUs= ContactUs::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ]);


        try {

            $admin = User::whereHas('roles', function ($q) {
                $q->where('name', 'admin');
            })->first();

            $admin->notify(new ContactUsNotification($contactUs));

        } catch (Exception $e) {

            Log::info('ContactUsError', [
                'message' => $e->getMessage(),
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('landing')->withToastSucces("We've received your request, we will contact you shortly");
    }
}
