<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KwitansiPengeluaran;

class KwitansiPengeluaranController extends Controller
{
    public function index()
    {
        $kwitansiPengeluaran = KwitansiPengeluaran::all();
        return view('kwitansi_pengeluaran.index', compact('kwitansiPengeluaran'));

    }

    public function store()
    {
        $request->validate([
            'nomor' => 'required',
            'dikeluarkan_kepada' => 'required',
            'angkatan_semester' => 'required',
            'jurusan' => 'required',
            'jumlah_uang' => 'required|numeric',
            'untuk_pembayaran' => 'required',
            'perincian' => 'required',
        ]);


        KwitansiPengeluaran::create([
            'nomor' => $request->nomor,
            'dikeluarkan_kepada' => $request->dikeluarkan_kepada,
            'angkatan_semester' => $request->angkatan_semester,
            'jurusan' => $request->jurusan,
            'jumlah_uang' => $request->jumlah_uang,
            'untuk_pembayaran' => $request->untuk_pembayaran,
            'perincian' => $request->perincian,
        ]);

        return redirect()->route('print-kwitansi-pengeluaran')->with('success', 'Kwitansi berhasil dicetak.');

    }
}
