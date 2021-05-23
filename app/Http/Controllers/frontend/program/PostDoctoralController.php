<?php

namespace App\Http\Controllers\frontend\program;

use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class PostDoctoralController extends Controller
{
    public function index()
    {
        $profil = Program::where('jenis', 'postdoctoral')->first();
        if ($profil == null) {
            $profil = [
                'content' => ""
            ];
        }
        return view('frontend.program.postdoctoral', $profil);
    }
}
