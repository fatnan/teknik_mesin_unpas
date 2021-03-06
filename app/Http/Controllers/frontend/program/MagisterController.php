<?php

namespace App\Http\Controllers\frontend\program;

use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class MagisterController extends Controller
{
    public function index()
    {
        $profil = Program::where('jenis', 'magister')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.program.magister', $profil);
    }
}
