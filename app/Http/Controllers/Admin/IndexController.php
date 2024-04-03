<?php

namespace App\Http\Controllers\Admin;

use App\Models\Detail;
use App\Models\Report;
use App\Models\Package;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\DetailReminder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $activeCount = Customer::where('user_status', 'Active')->count();
        $inactiveCount = Customer::where('user_status', 'Idle')->count();
        $suspendedCount = Customer::where('user_status', 'Suspended')->count();

        $reports = Report::all();
        $overduereports = $reports->filter(function($report){
            return $report->detail->payment_status == 'Overdue';
        });

        $paidCount = Detail::where('payment_status', 'Paid')->count();
        $unpaidCount = Detail::where('payment_status', 'Overdue')->count();
        $cancelledCount = Detail::where('payment_status', 'Cancelled')->count();

        $packages = Package::all();
        $package1Count = Detail::where('package_id', '1')->count();
        $package1ACount = Detail::where('package_id', '2')->count();
        $package1BCount = Detail::where('package_id', '3')->count();
        $package2Count = Detail::where('package_id', '4')->count();
        $package2ACount = Detail::where('package_id', '5')->count();
        $package2BCount = Detail::where('package_id', '6')->count();

        return view('admin.index', ['reports' => $overduereports], compact('activeCount', 'inactiveCount', 'suspendedCount','paidCount',
        'unpaidCount', 'cancelledCount', 'package1Count', 'package1ACount', 'package1BCount',
         'package2Count', 'package2ACount', 'package2BCount', 'packages', 'reports'));
    }

}
