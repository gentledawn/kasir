<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function transaksi()
    {
        return view('kasir.transaksi.data', array( 
            'title' => 'Data Transaksi',
            'data_transaksi' => Transaksi::all()
        ));
    }

    public function tambahTransaksi()
    {
        return view('kasir.transaksi.tambah', array( 'title' => 'Tambah Transaksi' ));
    }
}
