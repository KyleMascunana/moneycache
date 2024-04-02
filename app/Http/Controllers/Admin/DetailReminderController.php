<?php

namespace App\Http\Controllers\Admin;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Models\DetailReminder;
use App\Http\Controllers\Controller;

class DetailReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.detailreminder.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $details = Detail::all();
        return view('admin.detailreminder.create', compact('details'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detail_id = $request->detail_id;
        $due_date = $request->due_date;
        $month = $request->month;

        $data = new DetailReminder;

        $data->detail_id = $detail_id;
        $data->due_date = $due_date;
        $data->month = $month;

        $data->save();
        return to_route('admin.details.index')->with('message', 'Customer Billing Reminder has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailReminder $detailReminder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailReminder $detailReminder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailReminder $detailReminder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailReminder $detailReminder)
    {
        //
    }
}
