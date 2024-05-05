<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    public function cariwisatacus(Request $request)
    {
        $keyword = $request->input('keyword');
        $wisatas = Wisata::where('nama_wisata', 'like', "%$keyword%")->get();
        if ($wisatas->isEmpty()) {
            return redirect()->back()->with('error', 'Wisata tidak ditemukan.');
        }
        return view('customer.hasilcariwisatacus', ['wisatas' => $wisatas]);
    }
}
