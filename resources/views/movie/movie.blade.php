@extends('layouts.main')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <form action="/movie" method="get">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Cari..." name="q" value="{{ request('q') }}">
                        <button class="btn btn-outline-secondary ml-1" type="sumbit"><i class="fa-solid fa-magnifying-glass"></i></button>
                      </div>
                </form>

        <div class="card-body">

            <a href="{{url('movie/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
  
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Judul Film</th>
                  <th>Genre</th>
                  <th>Sutradara</th>
                  <th>Durasi</th>
                  <th>Tanggal Rilis</th>
                  <th>Rating</th>
                  <th>Jam Tayang</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if($movie->count() > 0)
                  @foreach($movie as $i => $m)
                    <tr>
                      <td>{{$m->kode}}</td>
                      <td>{{$m->judul}}</td>
                      <td>{{$m->genre}}</td>
                      <td>{{$m->sutradara}}</td>
                      <td>{{$m->durasi}}</td>
                      <td>{{$m->tanggal_rilis}}</td>
                      <td>{{$m->rating}}</td>
                      <td>{{$m->jam_tayang}}</td>
                      <td>
                        <a href="{{ url('/movie/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
                        <form method="POST" action="{{ url('/movie/'.$m->id) }}" id="form">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger delete" onclick="konfirmasiForm()">hapus</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr><td colspan="10" class="text-center">Data tidak ada</td></tr>
                @endif
              </tbody>
            </table>
            <div class="mt-1 d-flex justify-content-end">
                {{ $movie->onEachSide(1)->links() }}
              </div>
          </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection
@push('custom_js')
<script>
function konfirmasiForm() {
  event.preventDefault();
  Swal.fire({
    title: 'Apakah Anda yakin?',
    text: 'Data akan dihapus. Apakah Anda ingin melanjutkan?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Ya, kirimkan!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById('form').submit(); 
    }
  });
}
</script>
@endpush