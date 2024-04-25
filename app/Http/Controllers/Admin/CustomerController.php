<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Detail;
use App\Models\Package;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        $details = Detail::all();
        return view('admin.customers.index', compact('customers', 'details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.customers.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client_id = $request->client_id;
		$name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $business_name = $request->business_name;
        $business_location = $request->business_location;
        $user_status = $request->user_status;
        $user_id = $request->user_id;

        $data = new Customer;

        $data->client_id = $client_id;
        $data->name = $name;
        $data->email = $email;
        $data->contact = $contact;
        $data->business_name = $business_name;
        $data->business_location = $business_location;
        $data->user_status = $user_status;
        $data->user_id = $user_id;

        $data->save();
        return to_route('admin.customers.index')->with('message', 'Customer has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $details = Detail::where('customer_id', $customer->id)->get();
        return view('admin.customers.show', compact('customer', 'details'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $users = User::all();
        return view('admin.customers.edit', compact('customer', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([

        ]);

        $customer->update($request->all());
        return to_route('admin.customers.index')->with('message', 'Customer has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return back()->with('message', 'Customer has been deleted successfully.');
    }


}
