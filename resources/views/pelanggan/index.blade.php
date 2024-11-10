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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th width="250">Alamat</th>
                            <th width="150">Nomor Telepon</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelanggan as $dt)
                        <tr>
                            <td>{{ $dt->nama_pelanggan }}</td>
                            <td>{{ $dt->alamat }}</td>
                            <td class="text-center">{{$dt->nomor_telepon}}</td>
                            <td class="text-center text-nowrap">
                                <form onsubmit="return confirm('Hapus data pelanggan ini?')" action="{{route('pelanggan.destroy', $dt->id)}}" method="POST">
                                    <a href="{{route('pelanggan.show', $dt->id)}}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{route('pelanggan.edit', $dt->id)}}" class="btn btn-warning btn-sm">Edit</a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data Pelanggan Masih Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{ route('pelanggan.create') }}">Tambah Data</a>
            </div>
        </div>
    </div>
</main>
@endsection