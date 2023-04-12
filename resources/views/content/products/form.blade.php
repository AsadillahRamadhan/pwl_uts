@extends('layouts.main')
@section('content')
<div class="card-body">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($family))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>Nama</label>
        <input class="form-control @error('nama') is-invalid @enderror" type="text" value="{{ isset($family)? $family->nama : old('nama') }}" name="nama">
        @error('nama')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Status</label>
        <input class="form-control @error('status') is-invalid @enderror"  type="text" value="{{ isset($family)? $family->status : old('status') }}" name="status">
        @error('status')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control @error('tanggal_lahir') is-invalid @enderror"  type="date" value="{{ isset($family)? $family->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir">
        @error('tanggal_lahir')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection
