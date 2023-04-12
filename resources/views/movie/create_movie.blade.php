@extends('layouts.main')
@section('content')
      <div class="card mx-2">
        <div class="card-header">
          <h3 class="card-title">Data Movie</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form method="post" action="{{ $url_form }}">
            @csrf
            {!! (isset($movie))? method_field('PUT') : '' !!}
            <div class="form-group">
              <label>Kode Film</label>
              <input class="form-control" @error('kode') is-invalid @enderror type="text" value="{{ isset($movie)? $movie->kode : old('kode') }}" name="kode">
              @error('kode')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label>Judul Film</label>
              <input class="form-control" @error('judul') is-invalid @enderror type="text" value="{{ isset($movie)? $movie->judul : old('judul') }}" name="judul">
              @error('judul')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            @if(isset($movie))
            <div class="form-group">
              <label>Genre</label>
              <select class="form-control" @error('genre') is-invalid @enderror value="" name="genre">
                <option value="">-- Pilih Genre Film --</option>
                <option value="Action" {{ $movie->genre == 'Action'? 'selected' : '' }}>Action</option>
                <option value="Science Fiction" {{ $movie->genre == 'Science Fiction'? 'selected' : '' }}>Science Fiction</option>
                <option value="Comedy" {{ $movie->genre == 'Comedy'? 'selected' : '' }}>Comedy</option>
                <option value="Horror" {{ $movie->genre == 'Horror'? 'selected' : '' }}>Horror</option>
              </select>
              @error('genre')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            @else
            <div class="form-group">
              <label>Genre</label>
              <select class="form-control" @error('genre') is-invalid @enderror value="" name="genre">
                <option value="">-- Pilih Genre Film --</option>
                <option value="Action" >Action</option>
                <option value="Science Fiction" >Science Fiction</option>
                <option value="Comedy" >Comedy</option>
                <option value="Horror" >Horror</option>
              </select>
              @error('genre')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            @endif
            
            <div class="form-group">
                <label>Sutradara</label>
                <input class="form-control" @error('sutradara') is-invalid @enderror type="text" value="{{ isset($movie)? $movie->sutradara : old('sutradara') }}" name="sutradara">
                @error('sutradara')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Durasi Film</label>
                <input class="form-control" @error('durasi') is-invalid @enderror type="text" value="{{ isset($movie)? $movie->durasi : old('durasi') }}" name="durasi">
                @error('durasi')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label>Tanggal Rilis</label>
              <input type="date" class="form-control" name="tanggal_rilis" value="{{ isset($movie)? $movie->tanggal_rilis : old('tanggal_rilis') }}">
              @error('tanggal_rilis')
                  <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
                <label>Rating</label>
                <input class="form-control" @error('rating') is-invalid @enderror type="text" value="{{ isset($movie)? $movie->rating : old('rating') }}" name="rating">
                @error('rating')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Jam Tayang</label>
                <input class="form-control" @error('jam_tayang') is-invalid @enderror type="text" value="{{ isset($movie)? $movie->jam_tayang : old('jam_tayang') }}" name="jam_tayang">
                @error('jam_tayang')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">submit</button>
          </form>
        </div>
@endsection