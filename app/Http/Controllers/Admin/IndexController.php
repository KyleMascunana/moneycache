<?php

namespace App\Http\Controllers\Admin;

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

        $paidCount = Customer::where('payment_status', 'paid')->count();
        $unpaidCount = Customer::where('payment_status', 'unpaid')->count();
        $cancelledCount = Customer::where('payment_status', 'cancelled')->count();

        $package1Count = Customer::where('package', 'p1')->count();
        $package1ACount = Customer::where('package', 'p1A')->count();
        $package1BCount = Customer::where('package', 'p1B')->count();
        $package2Count = Customer::where('package', 'p2')->count();
        $package2ACount = Customer::where('package', 'p2A')->count();
        $package2BCount = Customer::where('package', 'p2B')->count();

        return view('admin.index', compact('activeCount', 'inactiveCount', 'suspendedCount','paidCount',
        'unpaidCount', 'cancelledCount', 'package1Count', 'package1ACount', 'package1BCount',
         'package2Count', 'package2ACount', 'package2BCount'));
    }

}
