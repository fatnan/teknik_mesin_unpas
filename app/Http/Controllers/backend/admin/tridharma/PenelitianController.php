<?php

namespace App\Http\Controllers\backend\admin\tridharma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tridharma;


class PenelitianController extends Controller
{
    public function index()
    {
        $tridharma=Tridharma::where('jenis','penelitian')->first();
        if($tridharma==null){
            $tridharma=[
                'content' => ""
            ];
        }
        $tridharma['title']="penelitian";
        $tridharma['store']="backend.tridharma.penelitian.store";
        return view('backend.admin.tridharma.edit',$tridharma);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "penelitian";
        unset($input['_token']);
        $penelitian = Tridharma::where('jenis','penelitian')->first();
        if($penelitian){
            Tridharma::where('id',$penelitian['id'])->update($input);
        } else {
            Tridharma::create($input);
        }

        return redirect()->route('backend.tridharma.penelitian.index');
    }
}
