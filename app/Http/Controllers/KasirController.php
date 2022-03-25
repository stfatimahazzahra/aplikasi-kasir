<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('kasir.index', ['transaksis' => $transaksis]);
    }

    public function create()
    {
        $menus = Menu::orderBy('nama_menu', 'ASC')->get();
        
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

        if ($getMenu->keteserdiaan < $request->jumlah) {
            return back();
        }
        else{
            Transaksi::create([
                'nama_pelanggan' => $request->nama_pelanggan,
                'nama_menu' => $request->nama_menu,
                'jumlah' => $request->jumlah,
                'total_harga' => $getTotal,
                'nama_pegawai' => Auth::user()->name,
            ]);

            Menu::where('nama_menu', $request->nama_menu)->update(['keteserdiaan' => $updateKetersediaan]);

            return redirect('/kasir');
        }

    }

    public function edit($id) 
    {
        $transaksi = Transaksi::find($id);

        $menus = Menu::orderBy('nama_menu', 'ASC')->pluck('nama_menu');

        return view('kasir.edit', [
            'transaksi' => $transaksi,
            'menus' => $menus,
        ]);
    }

    public function update(Request $request, $id) 
    {
        $validate = $request->validate([
            'nama_pelanggan' => 'required',
            'nama_menu' => 'required',
            'jumlah' => 'required'
        ]);

        $getMenu = DB::table('menus')->where('nama_menu', $request->nama_menu)->first();
        $getTotal = $getMenu->harga * $request->jumlah;

        if ($request->jumlah < $request->jumlah_lama) {
            $kalJumlah1 = $request->jumlah_lama - $request->jumlah;
            $updateJumlah1 = $getMenu->keteserdiaan + $kalJumlah1;

            if ($getMenu->keteserdiaan < $request->jumlah) {
                return back()->with('danger', 'Order cannot be more than the menu stock');
            } else {
                $data = Transaksi::find($id);
                $data->nama_pelanggan = $request->nama_pelanggan;
                $data->nama_menu = $request->nama_menu;
                $data->jumlah = $request->jumlah;
                $data->total_harga = $getTotal;
                $data->nama_pegawai = Auth::user()->name;
                $data->update();

                $updateMenu = Menu::where('nama_menu', $request->nama_menu)
                    ->update(['keteserdiaan' => $updateJumlah1]);

                return redirect('/kasir')->with('succes', 'Transaksi berhasil diUpdate');
            }
        } else {
            $kalJumlah2 = $request->jumlah - $request->jumlah_lama;
            $updateJumlah2 = $getMenu->keteserdiaan - $kalJumlah2;

            if ($getMenu->keteserdiaan < $request->jumlah) {
                return back()->with('danger', 'Order cannot be more than the menu stock');
            } else {
                $data = Transaksi::find($id);
                $data->nama_pelanggan = $request->nama_pelanggan;
                $data->nama_menu = $request->nama_menu;
                $data->jumlah = $request->jumlah;
                $data->total_harga = $getTotal;
                $data->nama_pegawai = Auth::user()->name;
                $data->update();

                $updateMenu = Menu::where('nama_menu', $request->nama_menu)
                    ->update(['keteserdiaan' => $updateJumlah2]);

                return redirect('/kasir')->with('success', 'Transaksi berhasil diUpdate');
            }
        }
    }

    public function delete($id)
    {
        Transaksi::find($id)->delete();
        return redirect('/kasir')->with('success', 'Transaksi berhasil dihapus');

    }

    public function cariMenu(Request $request)
    {
        $menu = Menu::where('nama_menu', 'LIKE', '%'.$request->nama_menu.'%')->firstOrFail();
        return $menu;
    }
}