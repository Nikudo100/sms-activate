<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Number;
use App\Services\SMSActivate;

class StatusNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:status-number';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(SMSActivate $manager)
    {   $numbers = Number::where('status', 'wait')->get();
        foreach ($numbers as $number) {
            $status = $manager->getStatus($number->id_order);
            if($status == 'STATUS_OK') 
            $number->update('status','OK');
            elseif($status == 'STATUS_OK')
            dd($status);
        }
    }
}
