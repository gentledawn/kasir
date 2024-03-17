@extends('layout.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
<h2 class="mb-0">{{ $title }}</h2>
<a href="/transaksi/tambah" role="button" class="btn btn-primary text-white lh-lg"><i class="ti-plus"></i> Tambah Transaksi</a>
</div>
<div class="table-responsive">

        <table class="table mt-3">
            <thead>
              <tr>
                <th>ID</th>
                <th>No. Transaksi</th>
                <th>Tanggal</th>
                <th>Total Bayar (Rp)</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_transaksi as $transaksi)
                <tr>
                  <td>{{ $transaksi->id }}</td>
                  <td>{{ $transaksi->no_transaksi }}</td>
                  <td>{{ date('d/M/Y', strtotime($transaksi->tgl_transaksi)) }}</td>
                  <td>{{ number_format($transaksi->total_bayar) }}</td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm"><i class="ti-printer"></i> Cetak</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>

</div>
@endsection