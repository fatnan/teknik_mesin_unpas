<?php

namespace App\Http\Controllers\frontend\sivitas\dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
       
        return view('frontend.sivitas.dosen.page');
    }
}
