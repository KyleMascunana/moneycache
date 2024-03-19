<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->hasRole('user')) {
                return view('user.index');
            } elseif ($user->hasRole('admin')) {
                return view('admin.index');
            }
        }
    }
}
