@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Dashboard {{ Auth::user()->level === 'admin' ? 'Administrator' : 'Kasir' }}</h5>
            </div>
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                Selamat datang, {{ Auth::user()->name }}<br>
                Anda login sebagai {{ Auth::user()->level }}
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <form action="{{ route('auth.logout') }}" method="POST" class="d-flex" role="search">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
    <!-- Produk Section --> 
    <div class="container">
    <div class="card" style="margin-top: 20px;"> 
        <div class="card-header"> 
            <h5>Produk</h5> 
        </div> 
        <div class="card-body"> 
            {{$produk}} Produk <br>
        </div> 
    </div>
    </div>
    <div class="container">
        <div class="card" style="margin-top: 20px;"> 
            <div class="card-header"> 
                <h5>User</h5> 
            </div> 
            <div class="card-body"> 
                {{$user}} User <br>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="card" style="margin-top: 20px;"> 
            <div class="card-header"> 
                <h5>Pelanggan</h5> 
            </div> 
            <div class="card-body"> 
                {{$pelanggan}} Pelanggan <br>
            </div> 
        </div>
    </div>
</main>
@endsection