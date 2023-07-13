<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('{{any}}', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('get-number', [App\Http\Controllers\SMSActivateController::class, 'getNumber']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
