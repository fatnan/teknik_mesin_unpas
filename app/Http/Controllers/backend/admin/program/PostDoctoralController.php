<?php

namespace App\Http\Controllers\backend\admin\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;


class PostDoctoralController extends Controller
{
    public function index()
    {
        $program=Program::where('jenis','postdoctoral')->first();
        if($program==null){
            $program=[
                'content' => ""
            ];
        }
        $program['title']="postdoctoral";
        $program['store']="backend.program.postdoctoral.store";
        return view('backend.admin.program.edit',$program);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "postdoctoral";
        unset($input['_token']);
        $postdoctoral = Program::where('jenis','postdoctoral')->first();
        if($postdoctoral){
            Program::where('id',$postdoctoral['id'])->update($input);
        } else {
            Program::create($input);
        }

        return redirect()->route('backend.program.postdoctoral.index');
    }
}
