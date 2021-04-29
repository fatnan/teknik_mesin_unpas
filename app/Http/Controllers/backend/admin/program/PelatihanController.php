<?php

namespace App\Http\Controllers\backend\admin\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;


class PelatihanController extends Controller
{
    public function index()
    {
        $program=Program::where('jenis','pelatihan')->first();
        if($program==null){
            $program=[
                'content' => ""
            ];
        }
        $program['title']="pelatihan";
        $program['store']="backend.program.pelatihan.store";
        return view('backend.admin.program.edit',$program);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "pelatihan";
        unset($input['_token']);
        $pelatihan = Program::where('jenis','pelatihan')->first();
        if($pelatihan){
            Program::where('id',$pelatihan['id'])->update($input);
        } else {
            Program::create($input);
        }

        return redirect()->route('backend.program.pelatihan.index');
    }
}
