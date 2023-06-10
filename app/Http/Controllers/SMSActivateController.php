<?php

namespace App\Http\Controllers;

use App\Services\SMSActivate;
use Illuminate\Http\Request;

class SMSActivateController extends Controller
{
    //
    public function index(Request $request, SMSActivate $service){
        $apiKey = env('SMS_ACTIVATE_API_KEY');
        // dd($service->getNumbersStatus(0,'tele2'));
        return view('sms-activate',['apiKey' => $apiKey]);
    }
}
