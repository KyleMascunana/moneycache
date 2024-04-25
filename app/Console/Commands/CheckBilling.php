<?php

namespace App\Console\Commands;

use App\Models\Detail;
use Illuminate\Console\Command;

class CheckBilling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:billing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate billing for customers';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $details = Detail::whereMonth('end_date', now()->addDay(5))->wherePaymentStatus('unpaid')->get();

        foreach ($details as $detail) {

        $customer_id = $detail->customer_id;
        $package_id = $detail->package_id;
        $billing_payment = $detail->billing_payment;
        $month = $detail->month;
        $year = $detail->year;
        $start_date = $detail->start_date;
        $end_date = $detail->end_date;
        $payment_status = $detail->payment_status;
        $user_id = $detail->user_id;

        $check = new Detail();

        $check->customer_id = $customer_id;
        $check->package_id = $package_id;
        $check->billing_payment = $billing_payment;
        $check->month = $month;
        $check->year = $year;
        $check->start_date = $start_date;
        $check->end_date = $end_date;
        $check->payment_status = $payment_status;
        $check->user_id = $user_id;

        $check->save();

        $this->info('Billing generated for customer: ' . $detail->customer->name);
        }
        $this->info('Billing generated successfully.');
    }
}
