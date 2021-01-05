<?php

namespace App\Http\Controllers\frontend\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewNormalStarterKitController extends Controller
{
    public function index()
    {
        return view('frontend.berita.new-normal-starter-kit');
    }
}
