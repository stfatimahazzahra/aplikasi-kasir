<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authanticate(Request $request) 
    {
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Auth::attempt($login);

        if (!$user) {

        return back()->with('danger', 'Login failed');

        }

        if (Auth::user()->role == 'Admin') {
            return redirect()->route('admin')->with('success', 'You are logged in');
        }

        elseif (Auth::user()->role == 'Kasir') {
            return redirect()->route('kasir')->with('success', 'You are logged in');
        }

        elseif (Auth::user()->role == 'Manajer') {
            return redirect()->route('manajer')->with('success', 'You are logged in');
        }
    }
}