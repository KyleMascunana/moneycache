<?php

namespace App\Http\Controllers\Admin;

use App\Models\TemplateOne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templateone = TemplateOne::all();
        return view('admin.templateone.index', compact('templateone'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.templateone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $template_name = $request->template_name;
        $customer_name = $request->customer_name;
        $customer_job = $request->customer_job;
        $customer_business_name = $request->customer_business_name;
		$customer_address = $request->customer_address;
        $email_date = $request->email_date;
        $customer_abbreviation = $request->customer_abbreviation;
        $email_description = $request->email_description;

        $data = new TemplateOne;

        $data->template_name = $template_name;
        $data->customer_name = $customer_name;
        $data->customer_job = $customer_job;
        $data->customer_business_name = $customer_business_name;
        $data->customer_address = $customer_address;
        $data->email_date = $email_date;
        $data->customer_abbreviation = $customer_abbreviation;
        $data->email_description = $email_description;

        $data->save();
        return to_route('admin.templateone.index')->with('message', 'Template has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TemplateOne $templateone)
    {
        return view('admin.templateone.show', compact('templateone'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TemplateOne $templateone)
    {
        return view('admin.templateone.edit', compact('templateone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TemplateOne $templateone)
    {
        $request->validate([

        ]);

        $templateone->update($request->all());
        return to_route('admin.templateone.index')->with('message', 'Template has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TemplateOne $templateone)
    {
        $templateone->delete();

        return back()->with('message', 'Template has been deleted successfully.');
    }
}
