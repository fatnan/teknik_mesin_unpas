<?php

namespace App\Http\Controllers\frontend\berita\kategori\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaBeritaController extends Controller
{
    public function index()
    {
        return view('frontend.berita.kategori.home.beranda-berita');

    }
}
