@extends('layout.layout')
@section('content')
@if (session('status'))
<div class="position-absolute" style="left:calc(50% - 10rem);top:5rem;width:20rem">
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <span class="fw-bold">{{ session('status') }}</span>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
<h2 class="mb-4">{{ $title }}</h2>
<div class="mb-3">
<button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#tambahItemModal"><i class="ti-plus"></i> Tambah Item</button>
</div>
<form method="post" action="/transaksi/tambah">
@csrf
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th class="bg-primary text-white">No</th>
                <th class="bg-primary text-white">Nama Barang</th>
                <th class="bg-primary text-white">Qty</th>
                <th class="bg-primary text-white">Harga (Rp)</th>
                <th class="bg-primary text-white">Subtotal (Rp)</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>No</td>
                  <td>Nama Barang</td>
                  <td>00</td>
                  <td>000000</td>
                  <td>0000000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                  <td colspan="4">Diskon</td>
                  <td>0000000</td>
                </tr>
                <tr class="fw-bold">
                  <td colspan="4">Total Belanja</td>
                  <td class="fs-5">00000000</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row my-3">
        <div class="col-12 col-sm-6 col-lg-3 mb-3">
            <div class="form-group">
                <label>No. Transaksi</label>
                <input type="text" readonly class="form-control-plaintext" name="no_transaksi" value="TRX001" required>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-3">
            <div class="form-group">
                <label>Tgl. Transaksi</label>
                <input type="text" readonly class="form-control-plaintext" name="tgl_transaksi" value="{{ date('d/M/Y') }}" required>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-3">
            <div class="form-group">
                <label>Uang Pembeli</label>
                <input type="text" name="uang_pembeli" class="form-control" required>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-3">
            <div class="form-group">
                <label>Kembalian</label>
                <input type="text" readonly class="form-control-plaintext fs-5 lh-sm" name="kembalian" value="00000" required>
            </div>
        </div>
    </div>
    <a href="/transaksi" role="button" class="btn btn-danger text-white"><i class="ti-close"></i> Batal</a>
    <button type="submit" class="btn btn-primary text-white float-end"><i class="ti-save"></i> Simpan</button>
</form>

        <div class="modal fade" id="tambahItemModal" tabindex="-1" aria-labelledby="tambahItemModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahItemModalLabel">Tambah Item Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/transaksi/troli">
                        @csrf
                            <div class="mb-3">
                                <label for="tambahJenisBarang" class="form-label">Item Barang</label>
                                <select name="id_jenis" class="form-select" id="tambahItemBarang" required>
                                    <option value="">-- Pilih Item Barang --</option>
                                </select>
                            </div>
                            <div id="tampilan-barang"></div>
                            <button type="submit" class="btn btn-primary text-white"><i class="ti-arrow-circle-right"></i> Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection