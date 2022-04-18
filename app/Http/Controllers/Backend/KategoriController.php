<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
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
        $kategori_all = Kategori::all();
        return view('backend.kategori.index', compact('kategori_all',$kategori_all));
    }

    public function store(Request $request)
    {
        $store = Kategori::create($request->all());
        return redirect()->route('kategori.index');
    }

    public function edit(Kategori $kategori)
    {
        return view('backend.kategori.edit', compact('kategori',$kategori) );
    }

    public function update(Kategori $kategori, Request $request)
    {
        if($request->has('nama_kategori')){
            $kategori->nama_kategori=$request->nama_kategori;
        }
        if($request->has('jenis_kategori')){
            $kategori->jenis_kategori=$request->jenis_kategori;
        }
        $kategori->save();
        return redirect()->route('kategori.index');
    }
    
    public function delete(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}