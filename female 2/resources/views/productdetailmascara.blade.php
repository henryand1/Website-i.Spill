@extends('layoutbase')

@section('content1')
<!-- PRODUCTS -->
<section class="sub-page product">
  <div class="container1"> 
      <div class="row2" style="justify-content: left;">
          <div class="prod2">
          <div class="content1">
            <img src="{{ url('foto_produk/'.$mascara->image) }}" style="border-radius: 15px 15px;
            width: 333px;
            margin-top: 40px;">
          </div>
          </div>
          <div class="prod" style=" margin-left: 385px;
          margin-top: -276px;">
              <div>
                  <ul style="text-align: left;">
                      <div id="brand" style="font-family: 'Lexend';
                      font-size: 30px;
                      margin-bottom: 15px;">{{$mascara->brand}}</div>
                      <div id="nama_produk" style="    font-size: 45px;
                      color: dimgrey;
                  }">{{$mascara->nama_produk}}</div>
                      <div style="font-size: 25px;
                      margin-top: 10px;">Rp. {{$mascara->harga}}</div>
                  </ul>
              </div>
              </div>
      </div>
  </div>
</section>

<section class="sub-page" style="margin-top: 203px;font-size:50px">
  <h2 style="text-decoration:underline; text-underline-offset: 7px; text-align: left;text-decoration-color: #FF85A2;margin-bottom: 20px;">DESCRIPTION</h2>
  <p style="margin-bottom: 200px;font-size:18px;margin-top:20px">{{$mascara->keterangan}}</p>
</section>

  
<section class="sub-page" style="height: auto;">
  <h2 style="text-decoration:underline; text-underline-offset: 7px; text-align: left;text-decoration-color: #FF85A2;font-size:32px;margin-bottom: 20px;">REVIEW</h2>
  <p style="font-size: 20px">HAVE YOU TRIED THIS PRODUCT?</p>
  <p>Share your review!</p>
  @Auth  
  <form action="insertmascara/{{$mascara->no_produk}}/{{$mascara->nama_produk}}/{{Auth::user()->name}}" method="POST" enctype="multipart/form-data" 
    style="width: 700px">
    @csrf
    @else
    <a href={{route('login')}}> 
  @endauth 
    <input name="review" class="form-control" style="   padding: 0 0 164px 0;width:700px;border: 1.5px solid #ced4da;">
    <button class="btn btn-primary btn-sm" style="margin-top: 20px;
    width: 105px;
    padding: 10px;
    margin-left: 0px;
    background: #2d2d2d;
    border-color: #2d2d2d;;">Save</button>
  </form>
</section>

<section style="margin-top: 100px;">
 @foreach ($reviewmascara as $contoh)
<div class="list-group" style="margin: 20px 0px 20px 0px; width: 700px;">
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1" style="    margin-left: 12px;
      font-size: 17px;
      color:#fd8e9b">@ {{$contoh->username}}</h5>
    </div>
    <p class="mb-1" 
    style="font-size: 20px;
    margin-left: 14px;
    font-family:'PT Sans', sans-serif;
    color:#2d2d2d">{{$contoh->review}}</p>
  </a>
</div>
@endforeach
</section>
@endsection

