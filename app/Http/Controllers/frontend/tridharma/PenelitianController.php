<?php

namespace App\Http\Controllers\frontend\tridharma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index(){
        return view('tridharma.penelitian');
    }
}
