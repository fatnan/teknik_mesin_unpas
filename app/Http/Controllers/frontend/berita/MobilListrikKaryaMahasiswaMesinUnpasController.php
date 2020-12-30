<?php

namespace App\Http\Controllers\frontend\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobilListrikKaryaMahasiswaMesinUnpasController extends Controller
{
    public function index()
    {
        return view('frontend.berita.Mobil-Listrik-Karya-Mahasiswa-Mesin-Unpas');
    }
}
