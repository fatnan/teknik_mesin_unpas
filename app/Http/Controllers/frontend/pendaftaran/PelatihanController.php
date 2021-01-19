<?php

namespace App\Http\Controllers\frontend\pendaftaran;

use App\Http\Controllers\Controller;
use App\Pendaftaran;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $profil = Pendaftaran::where('jenis', 'pelatihan')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.pendaftaran.pelatihan', $profil);
    }
}
