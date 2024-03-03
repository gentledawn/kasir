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
<div class="d-flex justify-content-between mb-3">
<h2 class="mb-0">Data Barang</h2>
<button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#tambahBarangModal"><i class="ti-plus"></i> Tambah Barang</button>
</div>
<div class="table-responsive">

        <table class="table mt-3">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Stok (pcs)</th>
                <th>Harga (Rp)</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_barang as $barang)
                <tr>
                  <td>{{ $barang->id }}</td>
                  <td>{{ $barang->nama_barang }}</td>
                  <td>{{ $barang->nama_jenis }}</td>
                  <td>{{ $barang->stok }}</td>
                  <td>{{ number_format($barang->harga) }}</td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editBarangModal{{ $barang->id }}"><i class="ti-pencil-alt"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal" data-bs-target="#hapusBarangModal{{ $barang->id }}"><i class="ti-trash"></i> Hapus</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="tambahBarangModal" tabindex="-1" aria-labelledby="tambahBarangModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahBarangModalLabel">Tambah Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Add User Form -->
                        <form method="post" action="/barang/store">
                          @csrf
                            <div class="mb-3">
                                <label for="tambahNamaBarang" class="form-label">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" id="tambahNamaBarang" required>
                            </div>
                            <div class="mb-3">
                                <label for="tambahJenisBarang" class="form-label">Jenis Barang</label>
                                <select name="id_jenis" class="form-select" id="tambahJenisBarang" required>
                                    <option value="">-- Pilih Jenis Barang --</option>
                                    @foreach($jenis_barang as $jenis)
                                    <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tambahStokBarang" class="form-label">Stok (pcs)</label>
                                <input name="stok" type="number" class="form-control" id="tambahStokBarang" required>
                            </div>
                            <div class="mb-3">
                                <label for="tambahHargaBarang" class="form-label">Harga (Rp)</label>
                                <input name="harga" type="number" class="form-control" id="tambahHargaBarang" required>
                            </div>
                            <button type="submit" class="btn btn-primary text-white"><i class="ti-arrow-circle-right"></i> Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($data_barang as $barang)
        <div class="modal fade" id="editBarangModal{{ $barang->id }}" tabindex="-1" aria-labelledby="editBarangModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editBarangModalLabel">Edit Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/barang/update/{{ $barang->id }}">
                          @csrf
                            <div class="mb-3">
                                <label for="editNamaBarang" class="form-label">Nama Barang</label>
                                <input name="nama_barang" value="{{ $barang->nama_barang }}" type="text" class="form-control" id="editNamaBarang" required>
                            </div>
                            <div class="mb-3">
                                <label for="editJenisBarang" class="form-label">Jenis Barang</label>
                                <select name="id_jenis" class="form-select" id="editJenisBarang" required>
                                    <option value="{{ $barang->id_jenis }}">{{ $barang->nama_jenis }}</option>
                                    @foreach($jenis_barang as $jenis)
                                    <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="editStokBarang" class="form-label">Stok (pcs)</label>
                                <input name="stok" value="{{ $barang->stok }}" type="number" class="form-control" id="editStokBarang" required>
                            </div>
                            <div class="mb-3">
                                <label for="editHargaBarang" class="form-label">Harga (Rp)</label>
                                <input name="harga" value="{{ $barang->harga }}" type="number" class="form-control" id="editHargaBarang" required>
                            </div>
                            <button type="submit" class="btn btn-primary text-white"><i class="ti-arrow-circle-right"></i> Perbarui</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach ($data_barang as $barang)
        <div class="modal fade" id="hapusBarangModal{{ $barang->id }}" tabindex="-1" aria-labelledby="hapusBarangModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusBarangModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin ingin menghapus barang ini?</p>
                    </div>
                    <div class="modal-footer">
                      <form method="post" action="/barang/destroy/{{ $barang->id }}">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ti-close"></i> Batal</button>
                        <button type="submit" class="btn btn-danger text-white"><i class="ti-trash"></i> Hapus</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
</div>
@endsection