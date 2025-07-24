<?php

namespace App\Console\Commands;

use App\Jobs\CheckMembershipStatus;
use Illuminate\Bus\Batch;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;

class CheckMembership extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'membership:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check expired membership';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Bus::batch([
            new CheckMembershipStatus()
        ])->then(function (Batch $batch) {
            Log::info('Membership check job has been dispatched successfully.');
        })->catch(function (Batch $batch, $e){
            Log::error('An error occurred while dispatching the membership check job: ' . $e->getMessage());
        })->finally(function (Batch $batch) {
            Log::info('Membership check job has been dispatched successfully.');
        })->dispatch();
        $this->info('Membership check job has been dispatched successfully.');
    }
}
