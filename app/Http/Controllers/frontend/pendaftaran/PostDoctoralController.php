<?php

namespace App\Http\Controllers\frontend\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostDoctoralController extends Controller
{
    public function index()
    {
        return view('frontend.pendaftaran.postdoctoral');
    }
}
