<?php

namespace App\Http\Controllers;

use App\Models\CorporateEnquiry;
use App\Models\User;
use App\Notifications\AdminCorporateEnquiryNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FrontController extends Controller
{
    public function dietaryNeeds(){
        return view('dietary-needs');
    }

    public function faqs(){
        return view('faqs');
    }

    public function corporateClients(){
        return view('corporate-clients');
    }

    public function corporateClientsStore(Request $request){
        $request->validate([
            'company_name'=>'required',
            'contact_person'=>'required',
            'email_address'=>'required|email',
            'phone'=>'required',
            'total_employees'=>'required',
            'meal_subscription'=>'required',
            'special_request'=>'required'
        ]);

        $corporateEnquiry=CorporateEnquiry::create([
            'company_name'=>$request->company_name,
            'contact_person'=>$request->contact_person,
            'email_address'=>$request->email_address,
            'phone'=>$request->phone,
            'total_employees'=>$request->total_employees,
            'meal_subscription'=>$request->meal_subscription,
            'special_request'=>$request->special_request
        ]);

        try {
            $admin = User::whereHas('roles', function ($q) {
                $q->where('name', 'admin');
            })->first();

            $admin->notify(new AdminCorporateEnquiryNotification($corporateEnquiry));
        } catch (Exception $e) {
            Log::info('corporateClientsStore', [
                'message' => $e->getMessage(),
                'stack' => $e->getTraceAsString()
            ]);
        }


        return redirect()->route('corporate-clients')->withToastSuccess('Submitted successfully, we will contact you shortly');
    }
}
