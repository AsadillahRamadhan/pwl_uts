@extends('layouts.main')
@section('content')
<div class="card mx-2">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Hello, {{ Auth::user()->name }}</h5>
      <p class="card-text">Mulai tur dengan menuju data produk.</p>
      <a href="/products" class="btn btn-primary">Mulai Tur</a>
    </div>
  </div>
@endsection