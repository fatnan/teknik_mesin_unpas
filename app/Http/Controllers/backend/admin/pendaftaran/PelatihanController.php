<?php

namespace App\Http\Controllers\backend\admin\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendaftaran;


class PelatihanController extends Controller
{
    public function index()
    {
        $pendaftaran=Pendaftaran::where('jenis','pelatihan')->first();
        if($pendaftaran==null){
            $pendaftaran=[
                'content' => ""
            ];
        }
        $pendaftaran['title']="pelatihan";
        $pendaftaran['store']="backend.pendaftaran.pelatihan.store";
        return view('backend.admin.pendaftaran.edit',$pendaftaran);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "pelatihan";
        unset($input['_token']);
        $pelatihan = Pendaftaran::where('jenis','pelatihan')->first();
        if($pelatihan){
            Pendaftaran::where('id',$pelatihan['id'])->update($input);
        } else {
            Pendaftaran::create($input);
        }

        return redirect()->route('backend.pendaftaran.pelatihan.index');
    }
}
