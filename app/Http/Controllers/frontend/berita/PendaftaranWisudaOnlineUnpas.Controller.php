<?php

namespace App\Http\Controllers\frontend\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranWisudaOnlineUnpasController extends Controller
{
    public function index()
    {
        return view('frontend.berita.pendaftaran-wisuda-online-UNPAS');
    }
}
