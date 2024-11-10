@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Data Produk</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <b>{{$produk->nama_produk}}</b>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label">Harga Satuan</label>
                    <div class="col-sm-10">
                        <b>{{$produk->harga}}</b>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <b>{{$produk->stok}}</b>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-warning" href="{{ route('produk.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</main>
@endsection