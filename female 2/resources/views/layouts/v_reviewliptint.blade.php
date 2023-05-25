@extends('layouts.v_add')

@section('content')

    <table class="table table-bordered">
      <thead>
          <tr>
              <th>No_produk</th>
              <th>Username</th>
              <th>nama_produk</th>
              <th>Review</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($liptint as $data)
        <tr>
            <td>{{$data->no_produk}}</td>
            <td>{{$data->username}}</td>
            <td>{{$data->nama_produk}}</td>
            <td>{{$data->review}}</td>
            <td>
                <a href="/v_reviewliptint/delete/{{$data->review}}">Delete</a>
            </td>
          </tr>
    </tbody>
        @endforeach
    </table>
          
@endsection