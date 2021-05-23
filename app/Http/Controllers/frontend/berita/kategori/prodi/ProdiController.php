<?php

namespace App\Http\Controllers\frontend\berita\kategori\prodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        return view('frontend.berita.kategori.prodi.index');
    }
}
