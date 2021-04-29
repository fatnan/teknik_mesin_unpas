<?php

namespace App\Http\Controllers\backend\admin\tridharma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tridharma;


class LayananController extends Controller
{
    public function index()
    {
        $tridharma=Tridharma::where('jenis','layanan')->first();
        if($tridharma==null){
            $tridharma=[
                'content' => ""
            ];
        }
        $tridharma['title']="layanan";
        $tridharma['store']="backend.tridharma.layanan.store";
        return view('backend.admin.tridharma.edit',$tridharma);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "layanan";
        unset($input['_token']);
        $layanan = Tridharma::where('jenis','layanan')->first();
        if($layanan){
            Tridharma::where('id',$layanan['id'])->update($input);
        } else {
            Tridharma::create($input);
        }

        return redirect()->route('backend.tridharma.layanan.index');
    }
}
