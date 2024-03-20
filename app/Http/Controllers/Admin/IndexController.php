<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
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

        return view('admin.index', compact('activeCount', 'inactiveCount', 'suspendedCount','paidCount', 'unpaidCount', 'cancelledCount'));
    }
}
