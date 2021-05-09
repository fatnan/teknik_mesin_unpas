<?php

namespace App\Http\Controllers\frontend\berita\kategori\penelitian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index()
    {
        return view('frontend.berita.kategori.penelitian.index');
    }
}
