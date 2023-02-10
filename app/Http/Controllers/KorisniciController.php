<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListItem;
use App\Models\User;


class KorisniciController extends Controller
{
    /*  public function show($id)
{
    //
    $users = User::find($id);
    return view('edit');
}
public function edit(Request $request, $id) {
     $newuser = User::find($id);
     $newuser->name = request('name');
     $newuser->email = request('email');
     $newuser->is_admin = request('role');
     $newuser->save();
 
}*/

    public function index()
    {
        $korisnik = User::all();
        return view('users.index', compact('korisnik'));
    }


    public function edit($id)
    {
        $korisnik = User::find($id);
        return view('users.edit', compact('korisnik'));
    }

    // public function edit(User $user) {
    //     return view('users.edit', compact('user'));
    // }

    public function update(Request $request, $id)
    {
        $korisnik = User::find($id);
        $korisnik->update([
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $request->uloga,
        ]);
        $korisnik = User::all();

        return to_route('users.index');
    }







    public function delete($id)
    {
        $brisi = User::find($id);
        $brisi->delete();
        return redirect('/korisnici');
    }
}
