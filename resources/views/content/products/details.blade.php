@extends('layouts.main')
@section('content')
<div class="row mx-2">
    <div class="col-md-3">
        <img src="{{ $product->link_gambar }}" alt="" width="250px" class="rounded">
        <a href="/products" class="btn btn-success mt-3">Kembali</a>
    </div>
    <div class="col-md-6">
        <h5 class="text-secondary">{{ $product->company }}</h5>
        <h2>{{ $product->nama }}</h2>
        <p class="mt-4">{{ $product->deskripsi }}</p>
        <span class="small">Stok: {{ $product->stok }}</span><br>
        <span class="small">Harga: {{ $product->harga }}</span>
    </div>
</div>
@endsection