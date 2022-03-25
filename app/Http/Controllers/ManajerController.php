<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class ManajerController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('manajer.index', ['menus' => $menus]);
    }

    public function create()
    {
        return view('manajer.create');
    }

    public function menu(Request $request) 
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'keteserdiaan' => 'required'
        ]);

        Menu::create([
            'nama_menu' => $request['nama_menu'],
            'harga' => $request['harga'],
            'deskripsi' => $request['deskripsi'],
            'keteserdiaan' => $request['keteserdiaan'],
        ]);

        return redirect('/manajer');
    }

    public function edit($id) 
    {
        $menu = Menu::find($id);
        return view('manajer.edit', ['menu' => $menu]);
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'keteserdiaan' => 'required'
        ]);

        Menu::find($id)->update([
            'nama_menu' => $request['nama_menu'],
            'harga' => $request['harga'],
            'deskripsi' => $request['deskripsi'],
            'keteserdiaan' => $request['keteserdiaan'],
        ]);

        return redirect('/manajer');
    }

    public function delete($id)
    {
        Menu::find($id)->delete();
        return redirect('/manajer');
    }

    public function laporan()
    {
        $laporan = Transaksi::all();
        return view('manajer.laporan.index', ['laporan' => $laporan]);
    }

    public function exportPDF()
    {
        $data = [
            'transaksis' => Transaksi::all(),
        ];

        $pdf = PDF::loadView('manajer.laporan.laporan-pdf', $data);
        return $pdf->download(Str::random(20) . '.pdf');
    }
}