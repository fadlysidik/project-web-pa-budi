<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{
    public function showForm()
    {
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'no' => 'required|string',
            'tanggal' => 'required|date',
            'uraian' => 'required|string',
            'rincian' => 'required|string',
            'kode_akun' => 'required|string',
            'pengeluaran' => 'required|numeric|min:0',
        ]);

        // Simpan data pengeluaran
        Pengeluaran::create($request->all());

        // Set session flash untuk pesan berhasil
        return redirect()->route('form-pengeluaran')->with('success', 'Pengeluaran berhasil disimpan');
    }
}