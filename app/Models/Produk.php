<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Penjualan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['name','kategori_id','stok', 'tanggal_masuk','modal', 'harga'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function penjualan(){
        return $this->hasOne(Penjualan::class);
    }
}
