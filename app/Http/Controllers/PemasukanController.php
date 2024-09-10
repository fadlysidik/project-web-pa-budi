<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran; // Pastikan model diimpor

class PemasukanController extends Controller
{
    public function prosesPemasukan(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'nama_mahasiswa' => 'required|string|max:100',
            'jumlah_uang' => 'required|numeric',
            'peruntukan' => 'required|string|max:100',
            'semester' => 'required|integer',
            'angkatan' => 'required|integer',
            'cara_bayar' => 'required|string|max:50',
        ]);

        // Simpan data ke database
        Pembayaran::create($validatedData);

        // Redirect ke halaman form dengan pesan sukses
        return redirect()->route('form-pemasukan')->with('success', 'Data berhasil disimpan!');
    }

    public function showForm()
    {
        $pembayaran = Pembayaran::all();
        return view('pemasukan.index', ['pembayaran' => $pembayaran]);
    }

    
}
