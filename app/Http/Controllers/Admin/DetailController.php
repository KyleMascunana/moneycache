<?php

namespace App\Http\Controllers\Admin;

use App\Models\Detail;
use App\Models\Package;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Detail::all();
        $packages = Package::all();
        return view('admin.details.index', compact('details', 'packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packages = Package::all();
        $customers = Customer::all();
        return view('admin.details.create', compact('customers', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer_id = $request->customer_id;
        $package_id = $request->package_id;
        $billing_payment = $request->billing_payment;
        $month = $request->month;
        $year = $request->year;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $payment_status = $request->payment_status;

        $data = new Detail;

        $data->customer_id = $customer_id;
        $data->package_id = $package_id;
        $data->billing_payment = $billing_payment;
        $data->month = $month;
        $data->year = $year;
        $data->start_date = $start_date;
        $data->end_date = $end_date;
        $data->payment_status = $payment_status;

        $data->save();
        return to_route('admin.customer.index')->with('message', 'Customer Payment has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detail = Detail::findOrFail($id);
        $packages = Package::all();
        $customers = Customer::all(); // Assuming you have a model named Detail
        return view('admin.details.edit', compact('detail', 'packages', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        $request->validate([

        ]);

        $detail->update($request->all());
        return to_route('admin.customer.index')->with('message', 'Customer has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();

        return back()->with('message', 'Customer has been deleted successfully.');
    }
}
