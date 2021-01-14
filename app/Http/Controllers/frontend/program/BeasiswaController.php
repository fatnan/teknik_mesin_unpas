<?php

namespace App\Http\Controllers\frontend\program;

use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        $profil = Program::where('jenis', 'beasiswa')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.program.beasiswa', $profil);
    }
}
