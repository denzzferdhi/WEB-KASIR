@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Tambah Produk</h5>
            </div>

            <div class="card-body">
                @if ($errors->all())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('produk.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" class="form-control" id="nama_produk">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Satuan</label>
                        <div class="col-sm-10">
                            <input type="text" name="harga" value="{{ old('harga') }}" class="form-control" id="harga">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" name="stok" value="{{ old('stok') }}" class="form-control" id="stok">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
                <a class="btn btn-warning" href="{{ route('produk.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</main>
@endsection