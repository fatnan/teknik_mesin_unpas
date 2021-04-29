<?php

namespace App\Http\Controllers\frontend\tridharma;

use App\Http\Controllers\Controller;
use App\Tridharma;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $profil = Tridharma::where('jenis', 'pendidikan')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.tridharma.pendidikan', $profil);
    }
}
