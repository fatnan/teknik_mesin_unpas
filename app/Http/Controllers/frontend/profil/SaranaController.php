<?php

namespace App\Http\Controllers\frontend\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;

class SaranaController extends Controller
{
    public function index()
    {
        $profil = Profil::where('jenis', 'sarana')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.profil.sarana', $profil);
    }
}
