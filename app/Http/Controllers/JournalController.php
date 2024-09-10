<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('journal.index', compact('transactions'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'type' => 'required|string|in:income,expense',
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        // Simpan transaksi baru ke database
        Transaction::create([
            'type' => $request->input('type'),
            'description' => $request->input('description'),
            'amount' => $request->input('amount'),
            'created_at' => $request->input('date'),
            'updated_at' => now(),
        ]);

        // Redirect ke halaman jurnal dengan pesan sukses
        return redirect()->route('journal')->with('success', 'Transaction added successfully!');
    }
}
