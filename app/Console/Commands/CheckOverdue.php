<?php

namespace App\Console\Commands;

use App\Models\Detail;
use Illuminate\Console\Command;

class CheckOverdue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:overdue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for unpaid customers with overdue payments';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $details = Detail::whereMonth('end_date', now()->subDay(1))->wherePaymentStatus('unpaid')->get();

        foreach ($details as $detail) {
            // Update payment status to "overdue"
            $detail->update(['payment_status' => 'overdue']);
            // You can add additional actions here, such as sending notifications
            $this->info('Customer ' . $detail->customer->name . ' payment status changed to overdue.');
            }

         $this->info('Overdue billing status check completed.');
    }
}
