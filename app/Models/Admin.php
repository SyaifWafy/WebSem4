<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Admin extends Model
{
    public function login(Request $request)
    {
        $credentials = $request->only('username_admin', 'pw_admin');

        if (Auth::guard('customers')->attempt($credentials)) {
            return redirect()->intended('/customer/dashboard');
        } elseif (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->route('login')->withInput($request->except('pw_admin'))->withErrors(['username_admin' => 'Username atau password salah']);
        }
    }
}
