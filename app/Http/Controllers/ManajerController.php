<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajerController extends Controller
{
    public function index()
    {
        return view('manajer.index');
    }
}
