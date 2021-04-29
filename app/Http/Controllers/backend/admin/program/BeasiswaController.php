<?php

namespace App\Http\Controllers\backend\admin\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;


class BeasiswaController extends Controller
{
    public function index()
    {
        $program=Program::where('jenis','beasiswa')->first();
        if($program==null){
            $program=[
                'content' => ""
            ];
        }
        $program['title']="beasiswa";
        $program['store']="backend.program.beasiswa.store";
        return view('backend.admin.program.edit',$program);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "beasiswa";
        unset($input['_token']);
        $beasiswa = Program::where('jenis','beasiswa')->first();
        if($beasiswa){
            Program::where('id',$beasiswa['id'])->update($input);
        } else {
            Program::create($input);
        }

        return redirect()->route('backend.program.beasiswa.index');
    }
}
