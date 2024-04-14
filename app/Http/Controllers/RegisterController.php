<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationFormCus()
    {
        return view('customer.registercus');
    }

    public function tambahCustomer(Request $request)
{
    $validator = Validator::make($request->all(), [
        'username_cus' => 'required|unique:customer,username_cus',
        'pw_cus' => 'required|min:6',
        'password_confirm' => 'required|same:pw_cus',
        'fullname_cus' => 'required',
        'pertanyaan' => 'required',
        'jawaban' => 'required',
    ], [
        'username_cus.required' => 'Username harus diisi.',
        'username_cus.unique' => 'Username sudah digunakan.',
        'pw_cus.required' => 'Password harus diisi.',
        'pw_cus.min' => 'Password minimal harus :min karakter.',
        'password_confirm.required' => 'Konfirmasi password harus diisi.',
        'password_confirm.same' => 'Konfirmasi password tidak cocok dengan password.',
        'fullname_cus.required' => 'Nama lengkap harus diisi.',
        'pertanyaan.required' => 'Pertanyaan keamanan harus dipilih.',
        'jawaban.required' => 'Jawaban keamanan harus diisi.',
    ]);

    if ($validator->fails()) {
        return redirect('/register')
                    ->withErrors($validator)
                    ->withInput();
    }
    $username_cus = $request->input('username_cus');
    $pw_cus = $request->input('pw_cus');
    $fullname_cus = $request->input('fullname_cus');
    $pertanyaan = $request->input('pertanyaan');
    $jawaban = $request->input('jawaban');

    DB::table('customer')->insert([
        'username_cus' => $username_cus,
        'pw_cus' => $pw_cus,
        'fullname_cus' => $fullname_cus,
        'pertanyaan' => $pertanyaan,
        'jawaban' => $jawaban,
    ]);

    $customerBaru = (object) [
        'username_cus' => $username_cus,
        'pw_cus' => $pw_cus,
        'fullname_cus' => $fullname_cus,
        'pertanyaan' => $pertanyaan,
        'jawaban' => $jawaban,
    ];

    return redirect('/logincustomer')->withErrors(['success' => 'Registrasi berhasil!']);
}
}
