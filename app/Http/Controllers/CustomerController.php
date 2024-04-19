<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;

class CustomerController extends Controller
{
    public function showWisataCustomer()
    {
        $wisatas = Wisata::all();
        return view('customer.wisatacus', ['wisatas' => $wisatas]);
    }
    public function showDetailWisataCustomer($kd_wisata)
    {
        $wisata = Wisata::with('event')->where('kd_wisata', $kd_wisata)->first();
        if (!$wisata) {
            return redirect()->route('customer.wisatacus')->with('error', 'Data tidak ditemukan');
        }
        return view('customer.detailwisatacus', ['wisata' => $wisata]);
    }
    public function showEventCustomer()
    {
        $events = Event::all();
        return view('customer.eventcus', ['events' => $events]);
    }
        public function showDetailEventCustomer($kd_event)
    {
        $event = Event::with('wisata')->where('kd_event', $kd_event)->first();
        if (!$event) {
            return redirect()->route('customer.eventcus')->with('error', 'Data tidak ditemukan');
        }
        return view('customer.detaileventcus', ['event' => $event]);
    }
    public function showPengaduanCustomer()
    {
        return view('customer.pengaduancus');
    }
}

?>