<?php

namespace App\Http\Controllers\backend\admin\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendaftaran;


class DoctoralController extends Controller
{
    public function index()
    {
        $pendaftaran=Pendaftaran::where('jenis','doctoral')->first();
        if($pendaftaran==null){
            $pendaftaran=[
                'content' => ""
            ];
        }
        $pendaftaran['title']="doctoral";
        $pendaftaran['store']="backend.pendaftaran.doctoral.store";
        return view('backend.admin.pendaftaran.edit',$pendaftaran);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "doctoral";
        unset($input['_token']);
        $doctoral = Pendaftaran::where('jenis','doctoral')->first();
        if($doctoral){
            Pendaftaran::where('id',$doctoral['id'])->update($input);
        } else {
            Pendaftaran::create($input);
        }

        return redirect()->route('backend.pendaftaran.doctoral.index');
    }
}
