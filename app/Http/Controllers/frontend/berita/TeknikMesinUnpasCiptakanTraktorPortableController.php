<?php

namespace App\Http\Controllers\frontend\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeknikMesinUnpasCiptakanTraktorPortableController extends Controller
{
    public function index()
    {
        return view('frontend.berita.teknik-mesin-unpas-ciptakan-traktor-portable');
    }
}
