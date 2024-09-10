<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nama_mahasiswa',
        'jumlah_uang',
        'peruntukan',
        'semester',
        'angkatan',
        'cara_bayar',
    ];

    protected $table = 'pembayarans';
}

