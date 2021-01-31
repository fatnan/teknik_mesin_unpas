<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('backend.admin.login');
    }
    public function checkLogin(Request $request){
        // dd("a");
        dd($request->all());
    }
}
