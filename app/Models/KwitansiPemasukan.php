<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KwitansiPemasukan extends Model
{
    use HasFactory;

    protected $table = 'kwitansi_pemasukan';


    protected $fillable = [
        'nomor',
        'diterima_dari',
        'angkatan_semester',
        'jurusan',
        'jumlah_uang',
        'untuk_pembayaran',
        'perincian'
    ];
}