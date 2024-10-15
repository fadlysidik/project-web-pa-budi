<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input dari form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial pengguna
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) { // Tambahkan remember me
            // Jika berhasil login, redirect ke halaman home
            return redirect()->route('home.index');
        } else {
            // Jika gagal login, kembali ke halaman login dengan pesan error
            return redirect()->route('login')->withErrors([
                'email' => 'Email atau password salah.',
            ])->withInput($request->only('email'));
        }
    }

    // Method untuk logout
    public function logout(Request $request)
    {
        Auth::logout(); // Melakukan logout

        // Invalidate the session dan redirect ke halaman login
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}