<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Detail;

class GenerateBilling extends Command
{
    protected $signature = 'billing:generate';

    protected $description = 'Generate billing for customers';

    public function handle()
    {
        $details = Detail::whereMonth('end_date', now()->addDays(5))->wherePaymentStatus('unpaid')->get();

        foreach ($details as $detail) {
            // Generate billing for the customer
            $customer_id = $detail->customer_id;
            $package_id = $detail->package_id;
            $billing_payment = $detail->billing_payment;
            $month = $detail->month;
            $year = $detail->year;
            $start_date = $detail->start_date;
            $end_date = $detail->end_date;
            $payment_status = $detail->payment_status;

            // Create a billing record for the customer
            $billing = new Detail();

            $billing->customer_id = $customer_id;
            $billing->package_id = $package_id;
            $billing->billing_payment = $billing_payment;
            $billing->month = $month;
            $billing->year = $year;
            $billing->start_date = $start_date;
            $billing->end_date = $end_date;
            $billing->payment_status = $payment_status;

            $billing->save();

            $this->info('Billing generated for customer: ' . $detail->customer->name);
        }

        $this->info('Billing generated successfully.');
    }
}
