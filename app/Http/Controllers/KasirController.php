<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class KasirController extends Controller
{
    public function index()
    {
        return view('kasir.index');
    }

    public function create()
    {
        $menus = Menu::pluck('nama_menu');
        
        return view('kasir.create', ['menus' => $menus]);

    }
    
    public function transaksi(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'nama_menu' => 'required',
            'jumlah' => 'required'
        ]);

        $getMenu = DB::table('menus')->where('nama_menu', $request->nama_menu)->first();
        $getTotal = $getMenu->harga * $request->jumlah;
        $updateKetersediaan = $getMenu->keteserdiaan - $request->jumlah;

        if ($getMenu->ketersediaan < $request->jumlah) {
            return back('/kasir');
        }
        else{
            Transaksi::create([
                'nama_pelanggan' => $request->nama_pelanggan,
                'nama_menu' => $request->nama_menu,
                'qty' => $request->jumlah,
                'total' =>$getTotal,
                'nama_pegawai' => Auth::user()->name,
            ]);

            $updateMenu = Menu::where('nama_menu', $request->nama_menu)->update(['ketersediaan' => $updateKetersediaan]);

            return redirect('/kasir');
        }

        Transaksi::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nama_menu' => $request->nama_menu,
            'qty' => $request->jumlah,
            'total' =>$getTotal,
            'nama_pegawai' => Auth::user()->name,
        ]);

    }
}