<?php

namespace App\Http\Controllers\backend\admin\tridharma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tridharma;


class PengabdianController extends Controller
{
    public function index()
    {
        $tridharma=Tridharma::where('jenis','pengabdian')->first();
        if($tridharma==null){
            $tridharma=[
                'content' => ""
            ];
        }
        $tridharma['title']="pengabdian";
        $tridharma['store']="backend.tridharma.pengabdian.store";
        return view('backend.admin.tridharma.edit',$tridharma);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "pengabdian";
        unset($input['_token']);
        $pengabdian = Tridharma::where('jenis','pengabdian')->first();
        if($pengabdian){
            Tridharma::where('id',$pengabdian['id'])->update($input);
        } else {
            Tridharma::create($input);
        }

        return redirect()->route('backend.tridharma.pengabdian.index');
    }
}
