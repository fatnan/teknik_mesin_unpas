<?php

namespace App\Http\Controllers\frontend\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SarjanaController extends Controller
{
    public function index()
    {
        return view('frontend.program.sarjana');
    }
}
