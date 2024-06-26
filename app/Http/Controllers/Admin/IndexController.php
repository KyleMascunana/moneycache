<?php

namespace App\Http\Controllers\Admin;

use App\Models\Detail;
use App\Models\Report;
use App\Models\Package;
use App\Models\Customer;
use App\Models\TemplateOne;
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
            return $report->detail->payment_status == 'overdue';
        });

        $paidCount = Detail::where('payment_status', 'paid')->count();
        $unpaidCount = Detail::where('payment_status', 'unpaid')->count();
        $overdueCount = Detail::where('payment_status', 'overdue')->count();
        $cancelledCount = Detail::where('payment_status', 'cancelled')->count();

        $packages = Package::all();
        $packagesCount = Package::count();
        $package1Count = Detail::where('package_id', '1')->count();
        $package1ACount = Detail::where('package_id', '2')->count();
        $package1BCount = Detail::where('package_id', '3')->count();
        $package2Count = Detail::where('package_id', '4')->count();
        $package2ACount = Detail::where('package_id', '5')->count();
        $package2BCount = Detail::where('package_id', '6')->count();

        $templates = TemplateOne::all();
        $templateCount = TemplateOne::count();

        return view('admin.index', ['reports' => $overduereports], compact('activeCount', 'inactiveCount', 'suspendedCount','paidCount',
        'unpaidCount', 'cancelledCount','templates', 'templateCount', 'overdueCount',  'packagesCount', 'package1Count', 'package1ACount', 'package1BCount',
         'package2Count', 'package2ACount', 'package2BCount', 'packages', 'reports'));
    }

}
