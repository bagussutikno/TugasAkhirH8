<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
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
        $produk_all = Produk::all();

        foreach ($produk_all as $produk){
            $nama_kategori = Kategori::select('nama_kategori')->where('id',$produk->kategori_id)->first();
            $produk->nama_kategori = $nama_kategori->nama_kategori;
        }
        return view('backend.produk.index', compact('produk_all', $produk_all));
    }

    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->status = $request->status;
        $produk->kategori_id = (int)$request->kategori_id;
        $produk->harga = $request->harga;
        $produk->berat = $request->berat;
        
        if ($request->has('file')) {
            $file = $request->file('file');
            $file_name = time() . $file->getClientOriginalName();
            $file->move(public_path('/storage/produk') , $file_name );
            $produk->foto_produk = '/storage/produk/' . $file_name;
        }
        
        $produk->save();
        return redirect()->route('produk.index');
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('backend.produk.create', compact('kategori', $kategori));
    }
}
