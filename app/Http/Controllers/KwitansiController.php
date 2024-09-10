<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use Illuminate\Http\Request;

class KwitansiController extends Controller
{
    public function index()
    {
        $kwitansi = Kwitansi::all();
        return view('kwitansi_pemasukan.index', compact('kwitansi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'diterima_dari' => 'required',
            'angkatan_semester' => 'required',
            'jurusan' => 'required',
            'jumlah_uang' => 'required|numeric',
            'untuk_pembayaran' => 'required',
            'perincian' => 'required',
        ]);

        Kwitansi::create([
            'nomor' => $request->nomor,
            'diterima_dari' => $request->diterima_dari,
            'angkatan_semester' => $request->angkatan_semester,
            'jurusan' => $request->jurusan,
            'jumlah_uang' => $request->jumlah_uang,
            'untuk_pembayaran' => $request->untuk_pembayaran,
            'perincian' => $request->perincian,
        ]);

        return redirect()->route('print-kwitansi-pemasukan')->with('success', 'Kwitansi berhasil dicetak.');
    }
}
