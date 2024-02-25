<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBarang;

class JenisBarangController extends Controller
{
    public function jenisBarang()
    {
        return view('admin.master.jenis-barang.data', array( 'title' => 'Data Jenis Barang - Sistem Kasir', 'jenis_barang' => JenisBarang::all() ));
    }

    public function store(Request $request)
    {
        JenisBarang::create([
            'nama_jenis' => $request->nama_jenis
        ]);

        return redirect('/jenis-barang')->with('status', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        JenisBarang::where('id', $id)
            -> where('id', $id)
                ->update([
                    'nama_jenis' => $request->nama_jenis
                ]);

        return redirect('/jenis-barang')->with('status', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        JenisBarang::where('id', $id)->delete();
        return redirect('/jenis-barang')->with('status', 'Data Berhasil Dihapus');
    }

}