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
<h2 class="mb-0">Data User</h2>
<button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class="ti-plus"></i> Tambah User</button>
</div>
<div class="table-responsive">

        <!-- User Table -->
        <table class="table mt-3">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role }}</td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editUserModal{{ $user->id }}"><i class="ti-pencil-alt"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $user->id }}"><i class="ti-trash"></i> Delete</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>

        <!-- Add User Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Add User Form -->
                        <form method="post" action="/user/store">
                          @csrf
                            <div class="mb-3">
                                <label for="addUserName" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control" id="addUserName" required>
                            </div>
                            <div class="mb-3">
                                <label for="addUserPassword" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="addUserPassword" required>
                            </div>
                            <div class="mb-3">
                                <label for="addUserEmail" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="addUserEmail" required>
                            </div>
                            <div class="mb-3">
                                <label for="addUserRole" class="form-label">Role</label>
                                <select name="role" class="form-select" id="addUserRole" required>
                                    <option value="admin">Admin</option>
                                    <option value="kasir">Kasir</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary text-white"><i class="ti-arrow-circle-right"></i> Submit</button>
                        </form>
                        <!-- End Add User Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add User Modal -->

        <!-- Edit User Modal -->
        @foreach ($users as $user)
        <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Edit User Form -->
                        <form method="post" action="/user/update/{{ $user->id }}">
                          @csrf
                            <div class="mb-3">
                                <label for="editUserName" class="form-label">Name</label>
                                <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="editUserName" required>
                            </div>
                            <div class="mb-3">
                                <label for="editUserPassword" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="editUserPassword" required>
                            </div>
                            <div class="mb-3">
                                <label for="editUserEmail" class="form-label">Email</label>
                                <input name="email" value="{{ $user->email }}" type="email" class="form-control" id="editUserEmail" required>
                            </div>
                            <div class="mb-3">
                                <label for="editUserRole" class="form-label">Role</label>
                                <select name="role" class="form-select" id="editUserRole" required>
                                    <option value="admin" @if($user->role=='admin') selected @endif>Admin</option>
                                    <option value="kasir" @if($user->role=='kasir') selected @endif>Kasir</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary text-white"><i class="ti-arrow-circle-right"></i> Submit</button>
                        </form>
                        <!-- End Edit User Form -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End Edit User Modal -->

        <!-- Confirm Delete Modal -->
        @foreach ($users as $user)
        <div class="modal fade" id="confirmDeleteModal{{ $user->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin ingin menghapus user ini?</p>
                    </div>
                    <div class="modal-footer">
                      <form method="post" action="/user/destroy/{{ $user->id }}">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ti-close"></i> Batal</button>
                        <button type="submit" class="btn btn-danger text-white"><i class="ti-trash"></i> Hapus</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End Confirm Delete Modal -->
</div>
@endsection