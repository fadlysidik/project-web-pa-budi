<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran; // Pastikan ini sesuai dengan namespace model

class PengeluaranController extends Controller
{
    public function showForm()
    {
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|string',
            'tanggal' => 'required|date',
            'uraian' => 'required|string',
            'rincian' => 'required|string',
            'kode_akun' => 'required|string',
            'pengeluaran' => 'required|numeric',
        ]);

        Pengeluaran::create($request->all());

        return redirect()->route('form-pengeluaran')->with('success', 'Data berhasil disimpan');
    }
}
