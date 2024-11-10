@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Data User</h5>
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->username }}</td>
                            <td>{{ $data->level }}</td>
                            <td class="text-center text-nowrap">
                                <form onsubmit="return confirm('Hapus data user?')" action="{{ route('user.destroy', $data->id) }}" method="POST">
                                    <a class="btn btn-primary btn-sm" href="{{ route('user.show', $data->id) }}">Detail</a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('user.edit', $data->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Belum ada data user</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{ route('user.create') }}">Tambah Data</a>
            </div>
        </div>
    </div>
</main>
@endsection