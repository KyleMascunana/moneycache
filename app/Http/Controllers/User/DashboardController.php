<?php

namespace App\Http\Controllers\User;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function index()
   {

    $packages = Package::all();
    $packagesCount = Package::count();

    return view('user.index', compact('packages', 'packagesCount'));
   }
}
