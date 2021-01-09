<?php

namespace App\Http\Controllers\backend\admin\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;


class MagangController extends Controller
{
    public function index()
    {
        $program=Program::where('jenis','magang')->first();
        if($program==null){
            $program=[
                'content' => ""
            ];
        }
        $program['title']="magang";
        $program['store']="backend.program.magang.store";
        return view('backend.admin.program.edit',$program);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "magang";
        unset($input['_token']);
        $magang = Program::where('jenis','magang')->first();
        if($magang){
            Program::where('id',$magang['id'])->update($input);
        } else {
            Program::create($input);
        }

        return redirect()->route('backend.program.magang.index');
    }
}
