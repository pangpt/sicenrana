<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profil()
    {
        return view('profil');
    }

    public function artikel()
    {
        return view('artikel');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function survey()
    {
        return view('survey');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function struktur()
    {
        return view('struktur');
    }
}
