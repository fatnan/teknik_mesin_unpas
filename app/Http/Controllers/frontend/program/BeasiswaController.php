<?php

namespace App\Http\Controllers\frontend\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index(){
        return view('program.beasiswa');
    }
}
