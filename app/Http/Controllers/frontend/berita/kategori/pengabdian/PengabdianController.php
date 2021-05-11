<?php

namespace App\Http\Controllers\frontend\berita\kategori\pengabdian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index()
    {
        return view('frontend.berita.kategori.pengabdian.index');
    }
}
