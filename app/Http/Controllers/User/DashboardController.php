<?php

namespace App\Http\Controllers\User;

use App\Models\Report;
use App\Models\Package;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function index()
   {

    $packagesCount = Package::count();

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

    return view('user.index', ['reports' => $overduereports], compact(
    'packages', 'reports', 'overduereports', 'paidCount', 'unpaidCount',
    'overdueCount', 'cancelledCount', 'packagesCount', 'package1Count',
    'package1ACount', 'package1BCount', 'package2Count', 'package2ACount',
    'package2BCount', 'packages'));
   }
}
