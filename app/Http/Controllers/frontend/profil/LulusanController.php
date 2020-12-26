<?php

namespace App\Http\Controllers\frontend\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LulusanController extends Controller
{
    public function index()
    {
        return view('frontend.profil.lulusan');
    }
}
