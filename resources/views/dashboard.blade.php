@extends('layout.layout')
@section('content')
<h2>Welcome, @if(Auth::check()){{ Auth::user()->name }}@endif</h2>
@endsection