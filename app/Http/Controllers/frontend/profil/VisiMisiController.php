<?php

namespace App\Http\Controllers\frontend\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;

class VisiMisiController extends Controller
{
    public function index()
    {
        $profil = Profil::where('jenis', 'visimisi')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.profil.visimisi', $profil);
    }
}
