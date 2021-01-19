<?php

namespace App\Http\Controllers\frontend\program;

use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class SarjanaController extends Controller
{
    public function index()
    {
        $profil = Program::where('jenis', 'sarjana')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.program.sarjana', $profil);
    }
}
