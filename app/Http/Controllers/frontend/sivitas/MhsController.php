<?php

namespace App\Http\Controllers\frontend\sivitas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\student;
class MhsController extends Controller
{
    
    public function index()
    {
        $mahasiswa = student::all();
        return view('frontend.sivitas.Mahasiswa',['mahasiswa' => $mahasiswa]);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
