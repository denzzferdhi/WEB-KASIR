@extends('layouts.app')

@section('content')
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Registrasi Pengguna Baru</h5>
            </div>

            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->all())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('auth.simpan') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="Nama" value="{{ old('Nama') }}" class="form-control" id="Nama">
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="Username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="Username" value="{{ old('Username') }}" class="form-control" id="Username">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="Password" value="{{ old('Password') }}" class="form-control" id="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                        <div class="card-footer">
                            <a href="{{ route('auth.login') }}" class="btn btn-danger">Login</a>
                        </div>
                    </div>
                </main>
                @endsection