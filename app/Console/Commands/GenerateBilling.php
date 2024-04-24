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
        $billing = new Detail();

        $billing->customer_id = $detail->customer_id;
        $billing->package_id = $detail->package_id;
        $billing->billing_payment = $detail->billing_payment;
        $billing->month = $detail->month;
        $billing->year = $detail->year;
        $billing->start_date = $detail->start_date;
        $billing->end_date = $detail->end_date;
        $billing->payment_status = $detail->payment_status;

        $billing->save();

        $this->info('Billing generated for customer: ' . $detail->customer->name);
    }

    $this->info('Billing generated successfully.');

    }
}
