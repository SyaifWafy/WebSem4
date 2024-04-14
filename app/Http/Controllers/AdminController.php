<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Wisata;

class AdminController extends Controller
{
    public function showWisataAdmin()
    {
        $wisatas = Wisata::all();
        return view('admin.wisataadmin', ['wisatas' => $wisatas]);
    }
    public function showFormWisataAdmin()
    {
        return view('admin.formwisataadmin');
    }
    public function showEventAdmin()
    {
        return view('admin.eventadmin');
    }
    public function showPengaduanAdmin()
    {
        return view('admin.pengaduanadmin');
    }
    public function insertWisata(Request $request)
    {
        $request->validate([
            'keterangan' => 'required|string|max:250',
            'lokasi' => 'required|string|max:100',
            'kategori' => 'required|string|max:100',
            'nama_wisata' => 'required|string|max:100',
        ]);
        $username_admin = 'Admin';
        $wisata = new Wisata();
        $wisata->keterangan = $request->keterangan;
        $wisata->lokasi = $request->lokasi;
        $wisata->kategori = $request->kategori;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->username_admin = $username_admin;
        $wisata->save();
        session()->flash('success', 'Data berhasil disimpan');
        return redirect()->route('wisataadmin');
    }
    public function showDetailWisataAdmin($kd_wisata)
    {
        $wisata = Wisata::where('kd_wisata', $kd_wisata)->first();
        if (!$wisata) {
            return redirect()->route('admin.wisataadmin')->with('error', 'Data tidak ditemukan');
        }
        return view('admin.detailwisataadmin', ['wisata' => $wisata]);
    }
        public function showEditWisata($kd_wisata)
    {
        $wisata = Wisata::where('kd_wisata', $kd_wisata)->first();
        if (!$wisata) {
            return redirect()->route('wisataadmin')->with('error', 'Data tidak ditemukan');
        }
        return view('admin.editwisataadmin', ['wisata' => $wisata]);
    }
        public function updateWisata(Request $request, $kd_wisata)
    {
        $request->validate([
            'nama_wisata' => 'required|string|max:100',
            'keterangan' => 'required|string|max:250',
            'kategori' => 'required|string|max:100',
            'lokasi' => 'required|string|max:100',
        ]);
        try {
            $wisata = Wisata::where('kd_wisata', $kd_wisata)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.wisataadmin')->with('error', 'Data tidak ditemukan');
        }
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->keterangan = $request->keterangan;
        $wisata->kategori = $request->kategori;
        $wisata->lokasi = $request->lokasi;
        $wisata->save();
        return redirect()->route('wisataadmin')->with('success', 'Data berhasil diupdate');
    }
        public function deleteWisata(Request $request, $kd_wisata)
    {
        try {
            $wisata = Wisata::where('kd_wisata', $kd_wisata)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.wisataadmin')->with('error', 'Data tidak ditemukan');
        }
        $wisata->delete();
        return redirect()->route('wisataadmin')->with('success', 'Data berhasil dihapus');
    }
}
