<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Number;
use Illuminate\Http\Request;
use App\Http\Resources\NumberResource;


class NumberController extends Controller
{
    public function index()
    {
        $numbers = Number::all();
        return NumberResource::collection($numbers);
    }

}
