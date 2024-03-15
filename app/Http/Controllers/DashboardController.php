<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showDashboardAdmin()
    {
        return view('dashboard');
    }
    public function showDashboardCus()
    {
        return view('dashboard');
    }
    public function logout(Request $request)
    {
        return redirect()->route('confirmlogout');
    }
    public function confirmLogout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
