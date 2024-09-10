<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    use HasFactory;

    protected $table = 'kwitansi';

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