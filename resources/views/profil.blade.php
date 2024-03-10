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
@foreach ($data_profil as $profil)
<form method="post" action="/profil/update/{{ $profil->id }}">
    @csrf
    <input name="name" value="{{ $profil->name }}" type="hidden">
    <input name="role" value="{{ $profil->role }}" type="hidden">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" value="{{ $profil->email }}" type="email" class="form-control" aria-label="email" aria-describedby="email" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" placeholder="" aria-label="password" aria-describedby="password" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary d-block mx-auto text-white"><i class="ti-arrow-circle-right"></i> Submit</button>
</form>
@endforeach
@endsection