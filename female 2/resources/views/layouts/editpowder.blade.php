@extends('layouts.v_add')

@section('content')
<form action="updatepowder/{{ $powder->no_produk}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content" style="margin-left: 60px">
        <div class="row">
            <div class="col-sm-6">
                
                <div class="form-group">
                    <label>id_produk</label>
                    <input name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" value="{{ $powder->id_produk}}" readonly>
                    <div class="invalid-feedback">
                        @error('id_produk')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>brand</label>
                    <input name="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ $powder->brand }}">
                    <div class="invalid-feedback">
                        @error('brand')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" value="{{ $powder->nama_produk }}">
                    <div class="invalid-feedback">
                        @error('nama_produk')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-sm 12">
                    <div class="col sm 4">
                        <img src="{{ url('foto_produk/'.$powder->image) }}" width="100px">
                    </div>
                    <div class="col sm 8">
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('logo')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-sm 12">
                    <div class="col sm 4">
                        <img src="{{ url('foto_produk/'.$powder->logo) }}" width="100px">
                    </div>
                    <div class="col sm 8">
                    </div>
                </div><br>


                <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ $powder->keterangan }}">
                    <div class="invalid-feedback">
                        @error('keterangan')
                            {{ $message }}
                        @enderror
                    </div>       
                </div>

                <div class="form-group">
                    <label>harga</label>
                    <input name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $powder->harga }}">
                    <div class="invalid-feedback">
                        @error('harga')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Save</button>
                 </div>
            </div>

        </div>
    </div>
    


</form>
@endsection