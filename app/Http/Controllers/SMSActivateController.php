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

        $services = $this->sms->getAdditionalService(0, 'any');

        $getNumber =  Number::all('number');

        return  $countries;
        // return NumberResource::collection([
        //     'countries' => $countries,
        //     'services' =>  $services,
        //     'balances' => $balance,
        //     'getNumber' => $getNumber
        // ]);
    }
    public function getNumber(Request $request, Response $response)
    {
        // ds
        // tg
        $getNumber = $this->sms->getNumber('ds', 0);

        if (isset($getNumber[0])) {
            return $getNumber;
        } else {
            Number::create([
                'id_order' => $getNumber['id'],
                'number' => $getNumber['number'],
            ]);
            return $getNumber;
        }
    }
    public function getServices($id)
    {
        return $this->sms->getNumbersStatus($id);
    }

    public function connectToQiwi()
    {
    }
}
