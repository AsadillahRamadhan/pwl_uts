@extends('layouts.main')
@section('content')
<div class="card-body">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($product))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>Nama</label>
        <input class="form-control @error('nama') is-invalid @enderror" type="text" value="{{ isset($product)? $product->nama : old('nama') }}" name="nama">
        @error('nama')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Company</label>
        <input class="form-control @error('company') is-invalid @enderror"  type="text" value="{{ isset($product)? $product->company : old('company') }}" name="company">
        @error('company')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input class="form-control @error('stok') is-invalid @enderror"  type="number" value="{{ isset($product)? $product->stok : old('stok') }}" name="stok">
        @error('stok')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input class="form-control @error('harga') is-invalid @enderror" type="number" value="{{ isset($product)? $product->harga : old('harga') }}" name="harga">
        @error('harga')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <input class="form-control @error('deskripsi') is-invalid @enderror" type="textarea" value="{{ isset($product)? $product->deskripsi : old('deskripsi') }}" name="deskripsi">
        @error('deskripsi')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Link Gambar</label>
        <input class="form-control @error('link_gambar') is-invalid @enderror" type="text" value="{{ isset($product)? $product->link_gambar : old('link_gambar') }}" name="link_gambar">
        @error('link_gambar')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection
