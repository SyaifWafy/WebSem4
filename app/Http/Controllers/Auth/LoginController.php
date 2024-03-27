<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('index');
    }

    public function loginCus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username_cus' => 'required',
            'pw_cus' => 'required',
        ], [
            'username_cus.required' => 'Username harus diisi.',
            'pw_cus.required' => 'Password harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('index')->withErrors($validator)->withInput();
        }

        $username = $request->input('username_cus');
        $password = $request->input('pw_cus');

        $customer = customer::where('username_cus', $username)->first();

        if (!$customer) {
            return redirect()->route('index')->withErrors(['error' => 'Username tidak ditemukan']);
        }
        if ($customer->pw_cus === $password) {
            return redirect()->intended('/customer/dashboard');
        } else {
            return redirect()->route('index')->withErrors(['error' => 'Username atau password salah']);
        }
    }
}
