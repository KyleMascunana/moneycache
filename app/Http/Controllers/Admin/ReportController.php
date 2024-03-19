<?php

namespace App\Http\Controllers\Admin;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::with('customer')->get();

        // Pass the reports data to the view
        return view('admin.report.index', ['reports' => $reports]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'customer_id' => 'required', // Ensure detail_id is required
            // Add validation rules for other fields if needed
        ]);

        // Create a new report
        $report = new Report();
        $report->customer_id = $request->input('customer_id'); // Assign detail_id from request
        // Assign other fields as needed
        $report->save();

        return redirect()->route('admin.report.index')->with('success', 'Report created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        $customers = Customer::all();
        return view('admin.details.edit', compact('detail', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        $request->validate([

        ]);

        $detail->update($request->all());
        return to_route('admin.customers.index')->with('message', 'Customer has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        $detail->delete();

        return back()->with('message', 'Customer has been deleted successfully.');
    }
}
