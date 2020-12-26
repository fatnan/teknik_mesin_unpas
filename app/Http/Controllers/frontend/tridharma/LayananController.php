<?php

namespace App\Http\Controllers\frontend\tridharma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('frontend.tridharma.layanan');
    }
}
