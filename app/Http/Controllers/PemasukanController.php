<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PemasukanController extends Controller
{
    public function showForm()
    {
        $pemasukan = Pembayaran::all(); // Ambil semua data pemasukan
        return view('pemasukan.index', compact('pemasukan'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'tanggal' => 'required|date',
            'nama_mahasiswa' => 'required|string|max:100',
            'jumlah_uang' => 'required|numeric',
            'peruntukan' => 'required|string|max:100',
            'semester' => 'required|integer',
            'angkatan' => 'required|integer',
            'cara_bayar' => 'required|string|max:50',
        ]);

        // Simpan data ke database
        Pembayaran::create($request->all());

        // Redirect ke form dengan pesan sukses
        return redirect()->route('form-pemasukan')->with('success', 'Data berhasil disimpan');
    }
}