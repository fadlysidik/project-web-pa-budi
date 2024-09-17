<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pengeluaran;

class JournalController extends Controller
{
    public function index()
    {
        // Ambil data pemasukan dan pengeluaran dari database
        $pembayaran = Pembayaran::all();
        $pengeluaran = Pengeluaran::all();

        // Kirim data ke view 'journal'
        return view('journal.index', [
            'pembayaran' => $pembayaran,
            'pengeluaran' => $pengeluaran
        ]);

    }

}