<?php

namespace App\Http\Controllers\frontend\berita\kategori\akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function index()
    {
        return view('frontend.berita.kategori.akademik.index');
    }
}
