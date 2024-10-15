<?php

namespace App\Http\Controllers;

use App\Models\KwitansiPemasukan;
use Illuminate\Http\Request;

class KwitansiPemasukanController extends Controller
{
    public function index()
    {
        $kwitansiPemasukan = KwitansiPemasukan::all();
        return view('kwitansi-pemasukan.index', compact('kwitansiPemasukan'));
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

        KwitansiPemasukan::create([
            'nomor' => $request->nomor,
            'diterima_dari' => $request->diterima_dari,
            'angkatan_semester' => $request->angkatan_semester,
            'jurusan' => $request->jurusan,
            'jumlah_uang' => $request->jumlah_uang,
            'untuk_pembayaran' => $request->untuk_pembayaran,
            'perincian' => $request->perincian,
        ]);

        return redirect()->route('kwitansi-pemasukan.index')->with('success', 'Kwitansi berhasil dicetak.');
    }
}