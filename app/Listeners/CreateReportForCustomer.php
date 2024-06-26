<?php

namespace App\Listeners;

use App\Models\Report;
use App\Models\Customer;
use App\Models\Detail;
use App\Events\CustomerCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateReportForCustomer
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CustomerCreated $event): void
    {
        // Retrieve the newly created customer instance
        $detail = $event->detail;

        // Create a new report for the customer
        $report = new Report();
        $report->detail_id = $detail->id;
        // Populate other report attributes as needed
        $report->save();
    }
}
