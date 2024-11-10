@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Data Penjualan</h5>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="150">Tanggal</th>
                            <th>Nama Pelanggan</th>
                            <th width="250">Total Harga</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($penjualan as $dt)
                        <tr>
                            <td>{{ $dt->tanggal_penjualan }}</td>
                            <td>{{ $dt->nama_pelanggan }}</td>
                            <td class="text-end">{{ number_format($dt->total_harga) }}</td>
                            <td class="text-nowrap">
                                <form onsubmit="return confirm('Hapus data penjualan ini?')" method="POST"
                                    action="{{ route('penjualan.destroy', $dt->id) }}">
                                    <a href="{{ route('penjualan.show', $dt->id) }}"
                                        class="btn btn-primary btn-sm">Detail Produk</a>
                                    <a href="{{ route('penjualan.edit', $dt->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">Data penjualan masih kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <a href="{{ route('detail.index') }}" class="btn btn-primary">Penjualan Baru</a>
            </div>
        </div>
    </div>
</main>
@endsection