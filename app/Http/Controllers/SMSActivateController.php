<?php

namespace App\Http\Controllers;

use App\Http\Resources\NumberResource;
use App\Models\Number;
use App\Services\SMSActivate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Mockery\Undefined;

class SMSActivateController extends Controller
{
    private $sms;
    public function __construct()
    {
        // $this->middleware('auth');
        $this->sms = new SMSActivate;
    }

    //    e.sinicza74@mail.ru
    //    497KkktT*8n1

    public function index(Request $request)
    {
        // dump($request->request->get('country'));
        // $apiKey = env('SMS_ACTIVATE_API_KEY');
        $countries = $this->sms->getCountries();
        $balance = $this->sms->getBalance();
        $numberStatus = $this->sms->getNumbersStatus(0, 'any');
        // $services = $sms->getAdditionalService(0, $id);

        $getNumber =  Number::all('number');

        return NumberResource::collection([
            'countries' => $countries,
            'services' =>  $numberStatus,
            'balances' => $balance,
            'getNumber' => $getNumber
        ]);
        // return view('index', [
        // 'countries' => $countries,
        //     'services' =>  $numberStatus,
        //     'balances' => $balance,
        //     'getNumber' => $getNumber
        // ]);
    }
    public function getNumber(Request $request, Response $response)
    {
        // 
        // ds
        // tg
        $getNumber = $this->sms->getNumber('ds', 0);
        // dump($getNumber);    
        // if ($getNumber[0] == 'NO_NUMBERS!') {
        if (isset($getNumber[0])) {
            return redirect()->back()->with('message', 'NO_NUMBERS!');
        } else {
            // dump($getNumber);
            // foreach ($getNumber as $value) {
            $user = Number::create([
                'id_order' => $getNumber['id'],
                'number' => $getNumber['number'],
            ]);
            // }
            return redirect()->back()->with('message', $getNumber['number']);
        }
    }

    public function connectToQiwi()
    {
    }
}
