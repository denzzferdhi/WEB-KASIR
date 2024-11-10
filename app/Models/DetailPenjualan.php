<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $table = 'detail_penjualan';
    protected $fillable = ['penjualan_id','produk_id','jumlah_produk','subtotal'];
    public $timestamps = false;

    public static function getDetailPenjualanWithProduk() {
        return DB::table('detail_penjualan')
        ->leftJoin('produk','produk.id','=','detail_penjualan.produk_id')
        ->select('detail_penjualan.*','produk.nama_produk','produk.harga')
        ->get();
        return $detail;
    }

    public static function deleteDetailPenjualanById(string $id) {
        DB::table('detail_penjualan')->where('penjualan_id','=', $id)->delete();
    }

}
