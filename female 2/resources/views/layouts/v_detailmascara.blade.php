@extends('layouts.v_add')

@section('content')
<section class="content">

  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="d-inline-block d-sm-none">{{ $mascara->nama_produk }}</h3>
          <div class="col-12">
            <img src="{{ url('foto_produk/'.$mascara->image) }}" class="product-image" alt="Product Image">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">{{ $mascara->brand }}</h3>

          <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
              {{ $mascara->nama_produk }}
            </h2>
          </div>
          <div class="bg-white py-2 px-3 mt-4">
            <h2 class="mb-0">
              <img src="{{ url('foto_produk/'.$mascara->logo) }}">
            </h2>
          </div>

        </div>
      </div>
      <div class="row mt-4">
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $mascara->keterangan }}  </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection