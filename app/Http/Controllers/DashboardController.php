<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Produk;
use App\Models\Pelanggan;

class DashboardController extends Controller
{
    public function _construct()
    {
        session(['menu' => 'dashboard']);
    }
    public function index() {
        $user = User::all()->count();
        $produk = Produk::all()->count();
        $pelanggan = Pelanggan::all()->count();

        if (Auth::check()) {
            return view('layouts.dashboard',compact(['user','produk','pelanggan']));
        } else {
            return redirect()->route('auth.login')->with('error','Anda harus login terlebih dahulu');
        }
    }
}