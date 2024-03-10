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
        return view('dashboard', array( 'title' => 'Dashboard' ));
    }

    public function user()
    {
        return view('admin.master.user.users', array( 
            'title' => 'Data User',
            'users' => User::all()
        ));
    }

    public function transaksi()
    {
        return view('kasir.transaksi', array( 'title' => 'Data Transaksi' ));
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

    public function profil()
    {
        $user = Auth::user();
        return view('profil', array( 
            'title' => 'Pengaturan Profil',
            'data_profil' => User::where('id', $user->id)->get()
        ));
    }

    public function updateProfil(Request $request, $id)
    {
        User::where('id', $id)
            ->update([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password),
                'role'      => $request->role,
            ]);

        return redirect('/profil')->with('status', 'Profil Berhasil Diperbarui');
    }

}
