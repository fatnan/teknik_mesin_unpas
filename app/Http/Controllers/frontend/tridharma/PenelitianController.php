<?php

namespace App\Http\Controllers\frontend\tridharma;

use App\Http\Controllers\Controller;
use App\Tridharma;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index()
    {
        $profil = Tridharma::where('jenis', 'penelitian')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.tridharma.penelitian', $profil);
    }
}
