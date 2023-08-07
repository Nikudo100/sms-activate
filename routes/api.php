<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\SmsActivate;
use App\Models\User;
use App\Http\Controllers\SMSActivateController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/numbers', [SMSActivateController::class, 'index']);
Route::get('/get-number', [SMSActivateController::class, 'getNumber']);
Route::get('/services/{id}', [SMSActivateController::class, 'getServices']);

// Route::middleware(['auth:sanctum'])->group(function (){
//     Route::prefix('shophlNtMWCGneo6Jbfduz')->group(function (){
//         // Route::post('exchangers',App\Http\Controllers\Api\ExchangerController::class);
//         // Route::post('create-payment',App\Http\Controllers\Api\PaymentController::class);
//         // Route::post('me',App\Http\Controllers\Api\MeController::class);
//         // Route::post('verif-payment',[App\Http\Controllers\Api\PaymentController::class,'verif']);
//         // Route::post('new-wallet',[App\Http\Controllers\Api\BitcoinController::class,'newWallet']);
//         // Route::post('get-wallet',[App\Http\Controllers\Api\PaymentController::class,'verif']);
//     });
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

//     return $request->user();
// });
// Route::apiResource('/games', 'GameController');

// Route::get('/users', function () {
//     return SmsActivate::collection(User::all());
// });
