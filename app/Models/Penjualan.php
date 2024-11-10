<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $fillable = ['tanggal_penjualan','total_harga','pelanggan_id'];
    public $timestamps = false;

    public static function getPenjualanWithPelanggan() {
        return DB::table('penjualan')
        ->leftJoin('pelanggan','pelanggan.id','=','penjualan.pelanggan_id')
        ->select('penjualan.*','pelanggan.nama_pelanggan')
        ->get();
        return $penjualan;
    }
}
