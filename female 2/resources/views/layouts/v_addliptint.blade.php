@extends('layouts.v_add')

@section('content')

    <form action="addliptint/insertliptint" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content" style="margin-left: 60px">
            <div class="row">
                <div class="col-sm-6">
                    
                    <div class="form-group">
                        <label>id_produk</label>
                        <input name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" value="{{ old('id_produk') }}">
                        <div class="invalid-feedback">
                            @error('id_produk')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>brand</label>
                        <input name="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}">
                        <div class="invalid-feedback">
                            @error('brand')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" value="{{ old('nama_produk') }}">
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

                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
                        <div class="invalid-feedback">
                            @error('logo')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Keterangan</label>
                        <input name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}">
                        <div class="invalid-feedback">
                            @error('keterangan')
                                {{ $message }}
                            @enderror
                        </div>       
                    </div>

                    <div class="form-group">
                        <label>harga</label>
                        <input name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}">
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