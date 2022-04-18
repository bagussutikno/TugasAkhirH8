<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table ='pesanan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pelanggan_id', 'invoice_id', 'total_harga', 'status', 'produk_id', 'date', 'qty'
    ];

    public function pengaturan()
    {
        return $this->belongsTo(Pengaturan::class, 'id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id');
    }
}
