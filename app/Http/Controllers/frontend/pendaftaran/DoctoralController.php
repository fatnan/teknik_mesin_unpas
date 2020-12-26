<?php

namespace App\Http\Controllers\frontend\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctoralController extends Controller
{
    public function index(){
        return view('pendaftaran.doctoral');
    }
}
