<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('admin.index', compact('user'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        User::create([
          'name' => $request->name,
          'username' => $request->username,
          'password' => bcrypt($request->password),
          'role' => $request->role
      ]);

      return redirect('/admin');
    }

    public function edit($id)
    {
        $users = User::find($id);

        return view('admin.edit', ['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        User::find($id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect('/admin');
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return redirect('/admin');
    }
}