<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;

    protected $table = 'produksis';
    
    protected $fillable = [
        'id_bahan_baku',
        'nama_sepatu',
        'jumlah_produksi',
        'tanggal_produksi',
        'durasi_produksi',
        'pembuatan_ke',
    ];
    
    public function Bahan_Baku()
    {
        return $this->belongsTo(BahanBaku::class, 'id_bahan_baku');
    }
}
