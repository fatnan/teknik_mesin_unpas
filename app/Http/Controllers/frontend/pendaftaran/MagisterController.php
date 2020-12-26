<?php

namespace App\Http\Controllers\frontend\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MagisterController extends Controller
{
    public function index()
    {
        return view('frontend.pendaftaran.magister');
    }
}
