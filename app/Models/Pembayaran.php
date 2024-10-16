<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    protected $fillable = [
        'tanggal',
        'nama_mahasiswa',
        'jumlah_uang',
        'peruntukan',
        'semester',
        'angkatan',
        'cara_bayar'
    ];
}