<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * Tentukan tabel yang berhubungan dengan model ini.
     *
     * @var string
     */
    protected $table = 'mahasiswa';

    /**
     * Tentukan atribut yang bisa diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'nama_mahasiswa',
        'npm',
        'semester',
        'angkatan',
        'bayar',
        'kewajiban_total',
        'kewajiban_semester',
        'sisa',
        'keterangan'
    ];

         // Optionally, specify which attributes should be cast to native types
    protected $casts = [
        'bayar' => 'decimal:2',
        'kewajiban_total' => 'decimal:2',
        'kewajiban_semester' => 'decimal:2',
        'sisa' => 'decimal:2',
    ];
    
    /**
     * Tentukan atribut yang harus disembunyikan dari array atau JSON.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
