<?php

namespace App\Http\Controllers\frontend\pendaftaran;

use App\Http\Controllers\Controller;
use App\Pendaftaran;
use Illuminate\Http\Request;


class DoctoralController extends Controller
{
    public function index()
    {
        $profil = pendaftaran::where('jenis', 'doctoral')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.pendaftaran.doctoral', $profil);
    }
}
