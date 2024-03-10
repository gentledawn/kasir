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
@foreach ($data_diskon as $diskon)
<form method="post" action="/diskon/update/{{ $diskon->id }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="totalBelanja" class="form-label">Total Belanja</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="total-belanja">Rp</span>
                <input name="total_belanja" value="{{ $diskon->total_belanja }}" type="number" class="form-control" aria-label="total-belanja" aria-describedby="total-belanja" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="diskon" class="form-label">Diskon</label>
            <div class="input-group mb-3">
                <input name="diskon" value="{{ $diskon->diskon }}" type="number" step="0.01" min="0" max="100" class="form-control" aria-label="diskon" aria-describedby="diskon" required>
                <span class="input-group-text" id="diskon">%</span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary d-block mx-auto text-white"><i class="ti-arrow-circle-right"></i> Submit</button>
</form>
@endforeach
@endsection