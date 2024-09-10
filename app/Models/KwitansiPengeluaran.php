<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KwitansiPengeluaran extends Model
{
    use HasFactory;
    
    protected $table = 'kwitansi_pengeluaran'; // Pastikan nama tabel benar

    protected $fillable = [
        'nomor',
        'dikeluarkan_kepada',
        'angkatan_semester',
        'jurusan',
        'jumlah_uang',
        'untuk_pembayaran',
        'perincian'
    ];
}
