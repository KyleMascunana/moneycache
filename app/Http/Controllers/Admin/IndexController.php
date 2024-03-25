<?php

namespace App\Http\Controllers\Admin;

use App\Models\Detail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $activeCount = Customer::where('user_status', 'active')->count();
        $inactiveCount = Customer::where('user_status', 'inactive')->count();
        $suspendedCount = Customer::where('user_status', 'suspended')->count();

        $details = Detail::all();
        $paidCount = Detail::where('payment_status', 'paid')->count();
        $unpaidCount = Detail::where('payment_status', 'unpaid')->count();
        $cancelledCount = Detail::where('payment_status', 'cancelled')->count();

        $package1Count = Detail::where('package_id', '1')->count();
        $package1ACount = Detail::where('package_id', '2')->count();
        $package1BCount = Detail::where('package_id', '3')->count();
        $package2Count = Detail::where('package_id', '4')->count();
        $package2ACount = Detail::where('package_id', '5')->count();
        $package2BCount = Detail::where('package_id', '6')->count();

        return view('admin.index', compact('activeCount', 'inactiveCount', 'suspendedCount','paidCount',
        'unpaidCount', 'cancelledCount', 'package1Count', 'package1ACount', 'package1BCount',
         'package2Count', 'package2ACount', 'package2BCount'));
    }

}
