<?php

namespace App\Http\Controllers\frontend\videos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranWisudaController extends Controller
{
    public function index()
    {
        return view('frontend.videos.pendaftaran-wisuda-online-UNPAS');
    }
}
