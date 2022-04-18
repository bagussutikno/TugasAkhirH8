<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Pengaturan;

class PesananController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pesanan_all = Pesanan::all();
        return view('backend.pesanan.index', compact('pesanan_all',$pesanan_all));
    }

    public function store(Request $request)
    {
        $pesanan = new Pesanan();
        $pesanan->invoice_id = $request->invoice_id;
        $pesanan->pelanggan_id = $request->pelanggan_id;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->qty = $request->qty;
        $pesanan->total_harga = $request->total_harga;
        $pesanan->status = $request->status;
        $pesanan->date = $request->date;

        $pesanan->save();
        return redirect()->route('pesanan.index');
    }

    public function create()
    {
        $pesanan = Pesanan::all();
        return view('backend.pesanan.create', compact('pesanan', $pesanan));
    }
}
