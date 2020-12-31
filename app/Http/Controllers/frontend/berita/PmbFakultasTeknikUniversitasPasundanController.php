<?php

namespace App\Http\Controllers\frontend\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PmbFakultasTeknikUniversitasPasundanController extends Controller
{
    public function index()
    {
        return view('frontend.berita.pmb-fakultas-teknik-universitas-pasundan');
    }
}
