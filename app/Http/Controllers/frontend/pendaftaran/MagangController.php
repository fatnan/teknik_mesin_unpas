<?php

namespace App\Http\Controllers\frontend\pendaftaran;

use App\Http\Controllers\Controller;
use App\Pendaftaran;
use Illuminate\Http\Request;

class MagangController extends Controller
{
    public function index()
    {
        $profil = Pendaftaran::where('jenis', 'magang')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.pendaftaran.magang', $profil);
    }
}
