<?php

namespace App\Http\Controllers\backend\admin\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendaftaran;


class MagangController extends Controller
{
    public function index()
    {
        $pendaftaran=Pendaftaran::where('jenis','magang')->first();
        if($pendaftaran==null){
            $pendaftaran=[
                'content' => ""
            ];
        }
        $pendaftaran['title']="magang";
        $pendaftaran['store']="backend.pendaftaran.magang.store";
        return view('backend.admin.pendaftaran.edit',$pendaftaran);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "magang";
        unset($input['_token']);
        $magang = Pendaftaran::where('jenis','magang')->first();
        if($magang){
            Pendaftaran::where('id',$magang['id'])->update($input);
        } else {
            Pendaftaran::create($input);
        }

        return redirect()->route('backend.pendaftaran.magang.index');
    }
}
