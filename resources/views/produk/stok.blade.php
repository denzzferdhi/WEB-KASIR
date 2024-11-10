@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Stok Produk</h5>
            </div>

            <div class="card-body">
                @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th width="200">Harga Satuan</th>
                            <th width="120">Stok Awal</th>
                            <th width="120">Terjual</th>
                            <th width="120">Stok Akhir</th>
                            {{-- <th width="180">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stok as $dt)
                        <tr>
                            <td>{{ $dt->nama_produk }}</td>
                            <td class="text-end">{{number_format($dt->harga)}}</td>
                            <td class="text-end">{{number_format($dt->stok)}}</td>
                            <td class="text-end">{{number_format($dt->terjual)}}</td>
                            <td class="text-end">{{number_format($dt->stok - $dt->terjual)}}</td>
                            <td class="text-center text-nowrap">
                                {{-- <form onsubmit="return confirm('Hapus data produk ini?')" action="{{route('produk.destroy', $dt->id)}}" method="POST">
                                    <a href="{{route('produk.show', $dt->id)}}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{route('produk.edit', $dt->id)}}" class="btn btn-warning btn-sm">Edit</a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
                                </form>
                            </td> --}}
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data Produk Masih Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{ route('produk.create') }}">Tambah Data</a>
            </div>
        </div>
    </div>
</main>
@endsection