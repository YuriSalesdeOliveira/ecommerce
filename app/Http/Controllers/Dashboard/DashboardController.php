<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }

    public function login()
    {
        return view('dashboard.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('dashboard.home');
    }
}
