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

                    <form action="{{ route('detail.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="produk_id" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <select name="produk_id" class="form-control" id="produk_id">
                                    <option value="">-- Pilih Produk --</option>
                                    @foreach($produk as $dp)
                                        <option value="{{ $dp->id }}">{{ $dp->nama_produk }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jumlah_produk" class="col-sm-2 col-form-label">Jumlah Beli</label>
                            <div class="col-sm-10">
                                <input type="number" name="jumlah_produk" value="{{ old('jumlah_produk') }}"
                                       class="form-control" id="jumlah_produk">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                            <a href="{{ route('detail.index') }}" class="btn btn-warning">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection