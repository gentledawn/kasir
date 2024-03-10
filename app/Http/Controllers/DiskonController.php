<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;

class DiskonController extends Controller
{
    public function diskon()
    {
        return view('admin.master.diskon.data', array( 'title' => 'Pengaturan Diskon', 'data_diskon' => Diskon::all() ));
    }

    public function update(Request $request, $id)
    {
        Diskon::where('id', $id)
            ->update([
                'total_belanja' => $request->total_belanja,
                'diskon' => $request->diskon
            ]);

        return redirect('/diskon')->with('status', 'Data Berhasil Diubah');
    }

}
