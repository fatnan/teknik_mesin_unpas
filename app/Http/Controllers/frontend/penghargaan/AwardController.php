<?php

namespace App\Http\Controllers\frontend\penghargaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AwardController extends Controller
{
    public function index()
    {
        return view('frontend.penghargaan.award');
    }
}
