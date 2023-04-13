@extends('layouts.main')
@section('content')
<div class="card mx-2">
    <div class="card-body">
      <div class="row justify-content-center d-flex">
        <div class="col-md-6">
          <img src="{{ url('/img/aqil.png') }}" alt="" class="img">
          <h5>Nama: Muhammad Aqilul Muttaqin</h5>
          <h5>NIM: 2141720182</h5>
        </div>
        <div class="col-md-6 justify-content-center">
          <img src="{{ url('/img/rama.png') }}" alt="" class="img text-center"> 
          <h5>Nama: Muhammad Asadillah Ramadhan</h5>
          <h5>NIM: 2141720093</h5>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('custom_css')
<style>
  .img {
  width: 100px;
  height: 150px;
  overflow: scroll;
  justify-items: center;
}
</style>
@endpush