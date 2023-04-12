@extends('layouts.main')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <form action="/products" method="get">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Cari..." name="q" value="{{ request('q') }}">
                        <button class="btn btn-outline-secondary ml-1" type="sumbit"><i class="fa-solid fa-magnifying-glass"></i></button>
                      </div>
                </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{url('products/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr class="text-center">
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Company</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                <tr class="text-center">
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->nama }}</td>
                  <td>{{ $product->company }}</td>
                  <td>{{ $product->stok }}</td>
                  <td>{{ "Rp " . number_format($product->harga,2,',','.'); }}</td>
                  <td class="d-flex justify-content-center">
                    <form method="POST" action="{{ url('/products/'.$product->id) }}" >
                  @csrf
                  <a href="{{ url('/products/'. $product->id.'/edit') }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                  <a href="{{ url('/products/'. $product->id.'/edit') }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
              <div class="mt-1 d-flex justify-content-end">
                {{ $products->onEachSide(1)->links() }}
              </div>
            </div>
            <!-- /.card-body -->
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