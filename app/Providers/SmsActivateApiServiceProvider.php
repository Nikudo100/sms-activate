<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SMSActivate;

class SmsActivateApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\SMSActivate',function($app){
            //NE знаю, но явно не здесь нужно передавать апи кей 
            // $apikey = env('SMS_ACTIVATE_API_KEY');
            return new SMSActivate();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
