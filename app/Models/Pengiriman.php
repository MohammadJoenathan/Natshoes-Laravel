<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengirimans';
    
    protected $fillable = [
        'id_produksi',
        'penerima',
        'jumlah_barang',
        'alamat_tujuan',
        'status_pengiriman',
    ];
    
    public function Produksi()
    {
        return $this->belongsTo(Produksi::class, 'id_produksi');
    }
}
