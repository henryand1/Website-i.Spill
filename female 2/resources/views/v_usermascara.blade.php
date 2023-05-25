@extends('layoutbase')

@section('content1')
          
          <!-- ========================= SECTION  ========================= -->  
            <div class="row" style="justify-content: space-between">
                @foreach ($usermascara as $data)
                <div class="col-md-3">
                    <div href="/v_usermascara/{{$data->no_produk}}" class="card card-product-grid" background="#FF85A2">
                      <a href="#" class="#"> <img src="{{url('foto_produk/'.$data->logo)}}" style="width: 250px; margin-top:5px; margin-left:5px"> </a>
                        <a href="/v_usermascara/{{$data->no_produk}}" class="img-wrap"> <img src="{{url('foto_produk/'.$data->image) }}"> </a>
                        <figcaption class="info-wrap">
                          <a href="#" class="title">{{$data->brand}}</a>
                          <div class="price mt-1">{{$data->nama_produk}}</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                @endforeach
            </div> <!-- row.// -->

@endsection