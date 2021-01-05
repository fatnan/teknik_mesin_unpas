<?php

namespace App\Http\Controllers\frontend\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SelamatAtasKeberhasilanProdiDiFakultasTeknikUnpasController extends Controller
{
    public function index()
    {
        return view('frontend.berita.selamat-atas-keberhasilan-prodi-di-fakultas-teknik-unpas');
    }
}
