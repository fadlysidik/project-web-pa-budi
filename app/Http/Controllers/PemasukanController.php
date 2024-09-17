<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran; // Pastikan model diimpor

class PemasukanController extends Controller
{
    public function showForm()
    {
        $pemasukan = Pembayaran::all();
        return view('pemasukan.index', compact('pemasukan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_mahasiswa' => 'required|string|max:100',
            'jumlah_uang' => 'required|numeric',
            'peruntukan' => 'required|string|max:100',
            'semester' => 'required|integer',
            'angkatan' => 'required|integer',
            'cara_bayar' => 'required|string|max:50',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('form-pemasukan')->with('success', 'Data berhasil disimpan');
    }
}