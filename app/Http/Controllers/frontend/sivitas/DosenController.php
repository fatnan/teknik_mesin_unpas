<?php

namespace App\Http\Controllers\frontend\sivitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
       
        return view('frontend.sivitas.dosen.index');
    }
}
