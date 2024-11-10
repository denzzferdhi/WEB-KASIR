@extends('layouts.app')

@section('content')

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Edit Data User</h5>
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

                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" id="name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" id="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" value="{{ old('username', $user->username) }}" class="form-control" id="username">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" value="" class="form-control" id="password">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <select name="level" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="admin" {{ ($user->level === 'admin') ? ' selected' : '' }}>Administrator</option>
                                <option value="kasir" {{ ($user->level === 'kasir') ? ' selected' : '' }}>Kasir</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <a class="btn btn-warning" href="{{ route('user.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</main>

@endsection