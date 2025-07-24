<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Schema;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


// Schedule::command('membership:check')
//         ->daily()
//         ->at('00:00')
//         ->timezone('Asia/Jakarta')
//         ->withoutOverlapping()
//         ->onOneServer()->evenInMaintenanceMode();

Schedule::command('membership:check')->everyMinute();