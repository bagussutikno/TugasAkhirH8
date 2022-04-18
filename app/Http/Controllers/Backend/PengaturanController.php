<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan;

class PengaturanController extends Controller
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
        $pelanggan_all = Pengaturan::all();
      
        return view('backend.pengaturan.index', compact('pelanggan_all',$pelanggan_all));
    }

    public function store(Request $request)
    {
        $store = Pengaturan::create($request->all());
        return redirect()->route('pengaturan.index');
    }

    public function edit(Pengaturan $pelanggan)
    {
        return view('backend.pengaturan.edit', compact('pelanggan',$pelanggan) );
    }

    public function update(Pengaturan $pelanggan, Request $request)
    {
        if($request->has('name')){
            $pelanggan->name=$request->name;
        }
        if($request->has('alamat')){
            $pelanggan->alamat=$request->alamat;
        }
        $pelanggan->save();
        return redirect()->route('pengaturan.index');
    }
    
    public function delete(Pengaturan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pengaturan.index');
    }
}
