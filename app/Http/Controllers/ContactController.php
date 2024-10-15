<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact form view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengembalikan tampilan contact.blade.php
        return view('contact');
    }
}