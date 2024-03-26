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
        $reports = Report::with('detail')->get();

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
            'detail_id' => 'required', // Ensure detail_id is required
            // Add validation rules for other fields if needed
        ]);

        // Create a new report
        $report = new Report();
        $report->detail_id = $request->input('detail_id'); // Assign detail_id from request
        // Assign other fields as needed
        $report->save();

        return redirect()->route('admin.report.index')->with('success', 'Report created successfully.');
    }

}
