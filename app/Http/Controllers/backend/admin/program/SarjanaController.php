<?php

namespace App\Http\Controllers\backend\admin\program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;


class SarjanaController extends Controller
{
    public function index()
    {
        $program=Program::where('jenis','sarjana')->first();
        if($program==null){
            $program=[
                'content' => ""
            ];
        }
        $program['title']="sarjana";
        $program['store']="backend.program.sarjana.store";
        return view('backend.admin.program.edit',$program);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "sarjana";
        unset($input['_token']);
        $sarjana = Program::where('jenis','sarjana')->first();
        if($sarjana){
            Program::where('id',$sarjana['id'])->update($input);
        } else {
            Program::create($input);
        }

        return redirect()->route('backend.program.sarjana.index');
    }
}
