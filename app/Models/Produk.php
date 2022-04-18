<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table ='produk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'katergori_id', 'nama_produk', 'deskripsi', 'harga', 'status', 'berat', 'foto_produk'
    ];
    protected $appends = ['foto_url'];

    public function getFotoUrlAttribute()
    {
        return url($this->foto_produk);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'produk_id');
    }
}
