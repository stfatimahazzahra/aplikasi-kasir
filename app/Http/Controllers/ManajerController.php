<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class ManajerController extends Controller
{
    public function index()
    {
        return view('manajer.index');
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
            'ketersediaan' => 'required'
        ]);

        Menu::create([
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'keteserdiaan' => $request->keteserdiaan
        ]);

        return redirect('manajer/menu');
    }
}