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
<h2 class="mb-0">{{ $title }}</h2>
<button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#tambahJenisBarangModal"><i class="ti-plus"></i> Tambah Jenis Barang</button>
</div>
<div class="table-responsive">

        <table class="table mt-3">
            <thead>
              <tr>
                <th>ID</th>
                <th>Jenis Barang</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($jenis_barang as $jenis)
                <tr>
                  <td>{{ $jenis->id }}</td>
                  <td>{{ $jenis->nama_jenis }}</td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editJenisBarangModal{{ $jenis->id }}"><i class="ti-pencil-alt"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal" data-bs-target="#hapusJenisBarangModal{{ $jenis->id }}"><i class="ti-trash"></i> Delete</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="tambahJenisBarangModal" tabindex="-1" aria-labelledby="tambahJenisBarangModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahJenisBarangModalLabel">Tambah Jenis Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Add User Form -->
                        <form method="post" action="/jenis-barang/store">
                          @csrf
                            <div class="mb-3">
                                <label for="tambahNamaJenisBarang" class="form-label">Nama Jenis Barang</label>
                                <input name="nama_jenis" type="text" class="form-control" id="tambahNamaJenisBarang" required>
                            </div>
                            <button type="submit" class="btn btn-primary text-white"><i class="ti-arrow-circle-right"></i> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($jenis_barang as $jenis)
        <div class="modal fade" id="editJenisBarangModal{{ $jenis->id }}" tabindex="-1" aria-labelledby="editJenisBarangModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editJenisBarangModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/jenis-barang/update/{{ $jenis->id }}">
                          @csrf
                            <div class="mb-3">
                                <label for="editNamaJenisBarang" class="form-label">Nama Jenis Barang</label>
                                <input name="nama_jenis" value="{{ $jenis->nama_jenis }}" type="text" class="form-control" id="editNamaJenisBarang" required>
                            </div>
                            <button type="submit" class="btn btn-primary text-white"><i class="ti-arrow-circle-right"></i> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach ($jenis_barang as $jenis)
        <div class="modal fade" id="hapusJenisBarangModal{{ $jenis->id }}" tabindex="-1" aria-labelledby="hapusJenisBarangModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusJenisBarangModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin ingin menghapus jenis barang ini?</p>
                    </div>
                    <div class="modal-footer">
                      <form method="post" action="/jenis-barang/destroy/{{ $jenis->id }}">
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