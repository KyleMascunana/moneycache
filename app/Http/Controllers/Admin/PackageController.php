<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $package_number = $request->package_number;
        $package_name = $request->package_name;
        $package_detail = $request->package_detail;
        $package_price = $request->package_price;
        $package_status = $request->package_status;
        $package_trial = $request->package_trial;
        $file = $request->file;

        $filename=time().'.'.$file->getClientOriginalExtension();

		$request->file->move('storages', $filename);

        $data = new Package;

        $data->package_number = $package_number;
        $data->package_name = $package_name;
        $data->package_detail = $package_detail;
        $data->package_price = $package_price;
        $data->package_status = $package_status;
        $data->package_trial = $package_trial;
        $data->file = $filename;

        $data->save();
        return to_route('admin.package.index')->with('message', 'Package has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id); // Assuming you are retrieving the package by its ID
        return view('admin.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
{
    $package->update($request->all());

    return redirect()->route('admin.package.index')->with('success', 'Package updated successfully.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();

        return back()->with('message', 'Package has been deleted successfully.');
    }
}
