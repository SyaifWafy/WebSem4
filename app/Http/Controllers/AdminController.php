<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;
use App\Models\Masukan;

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
        $events = Event::all();
        return view('admin.eventadmin', ['events' => $events]);
    }
        public function showFormEventAdmin()
    {
        $wisatas = Wisata::all();
        return view('admin.formeventadmin', ['wisatas' => $wisatas]);
    }
    public function insertWisata(Request $request)
{
    $request->validate([
        'nama_wisata' => 'required|string|min:2|max:100',
        'kategori' => 'required|string|min:2|max:100',
        'keterangan' => 'required|string|min:10|max:250',
        'lokasi' => 'required|string|min:2|max:100',
        'gambarwisata' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
        'nama_wisata.required' => 'Nama wisata belum ditambahkan.',
        'nama_wisata.max' => 'Nama wisata tidak boleh lebih dari 100 karakter.',
        'nama_wisata.min' => 'Nama wisata harus lebih dari 2 karakter.',
        'kategori.required' => 'Kategori belum ditambahkan.',
        'kategori.max' => 'Kategori tidak boleh lebih dari 100 karakter.',
        'kategori.min' => 'Kategori harus lebih dari 2 karakter.',
        'keterangan.required' => 'Keterangan belum ditambahkan.',
        'keterangan.min' => 'Keterangan harus lebih dari 10 karakter.',
        'keterangan.max' => 'Keterangan tidak boleh lebih dari 250 karakter.',
        'lokasi.required' => 'Lokasi belum ditambahkan.',
        'lokasi.max' => 'Lokasi tidak boleh lebih dari 100 karakter.',
        'lokasi.min' => 'Lokasi harus lebih dari 2 karakter.',
        'gambarwisata.required' => 'Foto wisata harus ditambahkan',
        'gambarwisata.max' => 'Ukuran file foto tidak boleh melebihi 2MB.',
    ]);
    $username_admin = 'Admin';
    $wisata = new Wisata();
    $wisata->keterangan = $request->keterangan;
    $wisata->lokasi = $request->lokasi;
    $wisata->kategori = $request->kategori;
    $wisata->nama_wisata = $request->nama_wisata;
    $wisata->username_admin = $username_admin;
    if ($request->hasFile('gambarwisata')) {
        $image = $request->file('gambarwisata');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $path = $request->file('gambarwisata')->storeAs('public/img', $imageName);
        $wisata->gambarwisata = $path;
    }
    $wisata->save();
    session()->flash('success', 'Data berhasil disimpan');
    return redirect()->route('wisataadmin')->withErrors(['success', 'Data berhasil disimpan']);
}
        public function showDetailWisataAdmin($kd_wisata)
    {
        $wisata = Wisata::with('event')->where('kd_wisata', $kd_wisata)->first();
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
            'nama_wisata' => 'required|string|min:2|max:100',
            'keterangan' => 'required|string|min:10|max:250',
            'kategori' => 'required|string|min:2|max:100',
            'lokasi' => 'required|string|min:2|max:100',
            'gambarwisata' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_wisata.required' => 'Nama wisata belum ditambahkan.',
            'nama_wisata.max' => 'Nama wisata tidak boleh lebih dari 100 karakter.',
            'nama_wisata.min' => 'Nama wisata harus lebih dari 2 karakter.',
            'kategori.required' => 'Kategori belum ditambahkan.',
            'kategori.max' => 'Kategori tidak boleh lebih dari 100 karakter.',
            'kategori.min' => 'Kategori harus lebih dari 2 karakter.',
            'keterangan.required' => 'Keterangan belum ditambahkan.',
            'keterangan.min' => 'Keterangan harus lebih dari 10 karakter.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari 250 karakter.',
            'lokasi.required' => 'Lokasi belum ditambahkan.',
            'lokasi.max' => 'Lokasi tidak boleh lebih dari 100 karakter.',
            'lokasi.min' => 'Lokasi harus lebih dari 2 karakter.',
            'gambarwisata.max' => 'Ukuran file foto tidak boleh melebihi 2MB.',
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
        if ($request->hasFile('gambarwisata')) {
            if ($wisata->gambarwisata) {
                Storage::delete($wisata->gambarwisata);
            }
            $image = $request->file('gambarwisata');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('gambarwisata')->storeAs('public/img', $imageName);
            $wisata->gambarwisata = $path;
        }
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
        public function insertEvent(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'pukul' => 'required|date_format:H:i',
            'isi' => 'required|string|max:250',
            'tempat' => 'required|string|max:100',
            'kd_wisata' => 'required|exists:wisata,kd_wisata',
        ]);
        $wisata = Wisata::where('kd_wisata', $request->kd_wisata)->firstOrFail();
        $nama_wisata = $wisata->nama_wisata;
        $event = new Event();
        $event->judul = $request->judul;
        $event->tanggal = $request->tanggal;
        $event->pukul = $request->pukul;
        $event->isi = $request->isi;
        $event->tempat = $request->tempat;
        $event->kd_wisata = $request->kd_wisata;
        $event->username_admin = 'Admin';
        $event->save();
        return redirect()->route('eventadmin')->with('success', 'Data event berhasil ditambahkan');
    }
        public function showDetailEventAdmin($kd_event)
    {
        $event = Event::where('kd_event', $kd_event)->first();
        if (!$event) {
            return redirect()->route('admin.eventadmin')->with('error', 'Data tidak ditemukan');
        }
        return view('admin.detaileventadmin', ['event' => $event]);
    }
        public function showEditEvent($kd_event)
    {
        $event = Event::where('kd_event', $kd_event)->firstOrFail();
        $wisatas = Wisata::all();
        return view('admin.editeventadmin', compact('event', 'wisatas'));
    }
        public function updateEvent(Request $request, $kd_event)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'pukul' => 'required|date_format:H:i',
            'isi' => 'required|string|max:250',
            'tempat' => 'required|string|max:100',
            'kd_wisata' => 'required|exists:wisata,kd_wisata',
        ]);
        $event = Event::find($kd_event);
        if (!$event) {
            return redirect()->route('eventadmin')->with('error', 'Data tidak ditemukan');
        }
        $event->judul = $request->judul;
        $event->tanggal = $request->tanggal;
        $event->pukul = $request->pukul;
        $event->isi = $request->isi;
        $event->tempat = $request->tempat;
        $event->kd_wisata = $request->kd_wisata;
        $event->username_admin = 'Admin';
        $event->save();
        return redirect()->route('detailEventAdmin', $event->kd_event)->with('success', 'Data event berhasil diupdate');
    }
        public function deleteEvent($kd_event)
    {
        $event = Event::find($kd_event);
        if (!$event) {
            return redirect()->route('eventadmin')->with('error', 'Event not found.');
        }
        $event->delete();
        return redirect()->route('eventadmin')->with('success', 'Event deleted successfully.');
    }
    public function showMasukanAdmin()
    {
        $masukans = Masukan::all();
        return view('admin.masukanadmin', compact('masukans'));
    }
    public function showDetailMasukanAdmin($kd_masukan)
    {
        $masukan = Masukan::find($kd_masukan);
        return view('admin.detailmasukanadmin', compact('masukan'));
    }
        public function deleteMasukan($kd_masukan)
    {
        $masukan = Masukan::find($kd_masukan);
        if (!$masukan) {
            return redirect()->route('masukanadmin')->with('error', 'Masukan tidak ditemukan.');
        }
        $masukan->delete();
        return redirect()->route('masukanadmin')->with('success', 'Masukan berhasil dihapus.');
    }
}
