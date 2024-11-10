<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\StokController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/proses', [AuthController::class, 'proses'])->name('auth.proses');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/user', UserController::class);
Route::resource('/produk', ProdukController::class);
Route::resource('/pelanggan', PelangganController::class);
Route::resource('/penjualan', PenjualanController::class);
Route::resource('/detail', DetailPenjualanController::class);
Route::resource('/stok', StokController::class);