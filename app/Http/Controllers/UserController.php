<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function dashboard()
    {
        return view('dashboard', array( 'title' => 'Dashboard - Sistem Kasir' ));
    }

    public function user()
    {
        return view('admin.master.user.users', array( 'title' => 'Data User - Sistem Kasir', 'users' => User::all() ));
    }

    public function transaksi()
    {
        return view('kasir.transaksi', array( 'title' => 'Data Transaksi - Sistem Kasir' ));
    }

    public function store(Request $request)
    {
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => $request->role,
        ]);

        return redirect('/user')->with('status', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)
            -> where('id', $id)
                ->update([
                    'name'      => $request->name,
                    'email'     => $request->email,
                    'password'  => Hash::make($request->password),
                    'role'      => $request->role,
                ]);

        return redirect('/user')->with('status', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('/user')->with('status', 'Data Berhasil Dihapus');
    }

}
