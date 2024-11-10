@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Data Pelanggan</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-10">
                        <b>{{$pelanggan->nama_pelanggan}}</b>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <b>{{$pelanggan->alamat}}</b>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label">Nomor Telepon
                        <b>{{$pelanggan->nomor_telepon}}</b>
                    </div>
                </div>

            <div class="card-footer">
                <a class="btn btn-warning" href="{{ route('pelanggan.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</main>
@endsection