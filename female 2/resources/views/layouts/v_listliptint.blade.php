@extends('layouts.v_add')

@section('content')

    @if (session('pesan'))
    <div class="col-md-3">
        <div class="card bg-success">
          <div class="card-header">
            <h3 class="card-title">Success</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            The body of the card
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
        {{ session('pesan') }}.
    </div>
        
    @endif
    <div class="card-body table-responsive p-0" style="height: 500px;max-width:100%">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>No_produk</th>
              <th>id_produk</th>
              <th>Brand</th>
              <th>Nama_produk</th>
              <th>Image</th>
              <th>Logo</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
        <?php $no=1; ?>
        @foreach ($liptint as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id_produk }}</td>
            <td>{{$data->brand}}</td>
            <td>{{$data->nama_produk}}</td>
            <td><img src="{{url('foto_produk/'.$data->image) }}" width="100px"</td>
            <td><img src="{{url('foto_produk/'.$data->logo) }}" width="100px"</td>
            <td>{{$data->keterangan}}</td>
            <td>{{$data->harga}}</td>
            <td>
                <a href="/v_listliptint/detailliptint/{{$data->no_produk}}" class="btn btn-sm btn-success">Detail</a>
                <a href="/v_listliptint/detailliptint/edit/{{$data->no_produk}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/v_listliptint/delete/{{$data->no_produk}}">Delete</button>
            </td>
          </tr>
    </tbody>
        @endforeach
    </table>
    <a href="/v_add/v_listliptint/addliptint" class="btn btn-primary btn-sm" style="padding: 7px;width:80px">Add</a></th>
    <a href="/v_add" class="btn btn-success tbn-sm" style="width:90px; font-size:15px">Kembali</a></th>
  </tr>
</table>
@endsection
         


 