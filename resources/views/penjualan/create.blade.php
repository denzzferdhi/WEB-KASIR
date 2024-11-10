@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Detail Produk</h5>
            </div>

            <div class="card-body">
                @php
                    $total_harga = 0;
                @endphp
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th width="150">Jumlah</th>
                            <th width="150">Harga Satuan</th>
                            <th width="150">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($detail as $dt)
                            <tr>
                                <td>{{ $dt->nama_produk }}</td>
                                <td>{{ $dt->jumlah_produk }}</td>
                                <td class="text-end">{{ number_format($dt->harga) }}</td>
                                <td class="text-end">{{ number_format($dt->subtotal) }}</td>
                            </tr>
                            @php
                                $total_harga += $dt->subtotal;
                            @endphp
                        @empty
                            <tr>
                                <td colspan="4">Data Produk Masih Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>Simpan Penjualan</h5>
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

                    <form action="{{ route('penjualan.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="pelanggan_id" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                            <div class="col-sm-10">
                                <select name="pelanggan_id" class="form-control" id="pelanggan_id">
                                    <option value="">-- Pilih Pelanggan--</option>
                                    @foreach ($pelanggan as $dp)
                                        <option value="{{ $dp->id }}"
                                            {{ old('pelanggan_id') == $dp->id ? 'selected' : '' }}>
                                            {{ $dp->nama_pelanggan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="total_harga" class="col-sm-2 col-form-label">Total Harga</label>
                            <div class="col-sm-10">
                                <input type="number" name="total_harga" 
                                       value="{{ old('total_harga', round($total_harga)) }}" 
                                       class="form-control" id="total_harga" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_penjualan" class="col-sm-2 col-form-label">Tanggal Penjualan</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_penjualan" 
                                       value="{{ old('tanggal_penjualan') }}" 
                                       class="form-control" id="tanggal_penjualan">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-warning" href="{{ route('detail.index') }}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection