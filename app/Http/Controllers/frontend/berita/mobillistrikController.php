<?php

namespace App\Http\Controllers\frontend\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mobillistrikController extends Controller
{
    public function index()
    {
        return view('frontend.berita.mobil-listrik');
    }
}
