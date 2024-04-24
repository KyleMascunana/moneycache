<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Detail;

class OverdueBilling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'billing:overdue';

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
        $details = Detail::where('payment_status', 'unpaid')->whereDate('end_date', '<', now()->subDay(1))->get();

        foreach ($details as $detail) {
        // Update payment status to "overdue"
        $details->update(['payment_status' => 'overdue']);
        // You can add additional actions here, such as sending notifications
        $this->info('Customer ' . $detail->customer->name . ' payment status changed to overdue.');
        }

     $this->info('Overdue billing status check completed.');
    }
}
