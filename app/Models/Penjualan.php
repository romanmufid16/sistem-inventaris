<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'produk_id',
        'jumlah',
        'profit',
        'tanggal_penjualan'
    ];


    public function produk(){
        return $this->belongsTo(Produk::class);
    }
}
