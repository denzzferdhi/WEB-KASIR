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
                            <td class="text-end">{{number_format($dt->harga)}}</td>
                            <td class="text-end">{{number_format($dt->subtotal)}}</td>
                        </tr>
                        @php
                            $total_harga += $dt->subtotal;
                        @endphp
                        @empty
                        <tr>
                            <td colspan="5">Data Produk Masih Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-warning" href="{{ route('penjualan.index') }}">Kembali</a>
        </div>
    </div>
</main>
@endsection