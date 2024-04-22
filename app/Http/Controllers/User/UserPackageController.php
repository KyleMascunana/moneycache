<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class UserPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('user.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.package.create');
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
        return to_route('user.package.index')->with('message', 'Package has been Created Successfully!');
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
        return view('user.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
{
    $package->update($request->all());

    return redirect()->route('user.package.index')->with('success', 'Package updated successfully.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function softDelete($id)
    {
        Package::find($id)->delete();

        return back()->with('message', 'Package has been deleted successfully.');
    }

    public function trashed()
    {
        $packages = Package::onlyTrashed()->get();
        return view('user.package.trashed', compact('packages'));
    }

    public function restore($id)
    {
        Package::whereId($id)->restore();

        return back()->with('message', 'Package has been restored successfully.');
    }

    public function forceDelete($id){

        Package::find($id)->forceDelete();

        return back()->with('message', 'Package has been permanently deleted.');
    }
}
