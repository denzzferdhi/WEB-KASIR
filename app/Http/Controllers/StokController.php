<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StokController extends Controller
{
    public function __construct()
    {
        if (!Auth::check()) {
            abort(403);
        }
        session(['menu' => 'stok']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok = Produk::getStokProduk();
        return view('produk.stok', compact('stok'));
    }
}