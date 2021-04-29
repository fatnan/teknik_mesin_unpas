<?php

namespace App\Http\Controllers\backend\admin\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;


class DoctoralController extends Controller
{
    public function index()
    {
        $program=Program::where('jenis','doctoral')->first();
        if($program==null){
            $program=[
                'content' => ""
            ];
        }
        $program['title']="doctoral";
        $program['store']="backend.program.doctoral.store";
        return view('backend.admin.program.edit',$program);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "doctoral";
        unset($input['_token']);
        $doctoral = Program::where('jenis','doctoral')->first();
        if($doctoral){
            Program::where('id',$doctoral['id'])->update($input);
        } else {
            Program::create($input);
        }

        return redirect()->route('backend.program.doctoral.index');
    }
}
