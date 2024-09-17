<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function index()
    {
        if (Auth::check()) {
            return view('home.index');
        } else {
            return redirect()->route('login')->withErrors('Anda belum login.');
        }
        
}
    
}
