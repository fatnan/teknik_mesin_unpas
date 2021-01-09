<?php

namespace App\Http\Controllers\backend\admin\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;


class MagisterController extends Controller
{
    public function index()
    {
        $program=Program::where('jenis','magister')->first();
        if($program==null){
            $program=[
                'content' => ""
            ];
        }
        $program['title']="magister";
        $program['store']="backend.program.magister.store";
        return view('backend.admin.program.edit',$program);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "magister";
        unset($input['_token']);
        $magister = Program::where('jenis','magister')->first();
        if($magister){
            Program::where('id',$magister['id'])->update($input);
        } else {
            Program::create($input);
        }

        return redirect()->route('backend.program.magister.index');
    }
}
