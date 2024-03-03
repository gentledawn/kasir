<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBarang;
use App\Models\Barang;

class BarangController extends Controller
{
    public function barang()
    {
        return view('admin.master.barang.data', array(
            'title' => 'Data Barang - Sistem Kasir',
            'jenis_barang' => JenisBarang::all(),
            'data_barang' => Barang::join('kasir_jenis_barang', 'kasir_jenis_barang.id', '=', 'kasir_barang.id_jenis')
                              ->select('kasir_barang.*', 'kasir_jenis_barang.nama_jenis')
                              ->get()
        ));
    }

    public function store(Request $request)
    {
        Barang::create([
            'id_jenis'      => $request->id_jenis,
            'nama_barang'   => $request->nama_barang,
            'harga'         => $request->harga,
            'stok'          => $request->stok,
        ]);

        return redirect('/barang')->with('status', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        Barang::where('id', $id)
            -> where('id', $id)
                ->update([
                    'id_jenis'      => $request->id_jenis,
                    'nama_barang'   => $request->nama_barang,
                    'harga'         => $request->harga,
                    'stok'          => $request->stok,
                ]);

        return redirect('/barang')->with('status', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        Barang::where('id', $id)->delete();
        return redirect('/barang')->with('status', 'Data Berhasil Dihapus');
    }
}
