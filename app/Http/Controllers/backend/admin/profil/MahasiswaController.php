<?php

namespace App\Http\Controllers\backend\admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;


class MahasiswaController extends Controller
{
    public function index()
    {
        $profil=Profil::where('jenis','mahasiswa')->first();
        if($profil==null){
            $profil=[
                'content' => ""
            ];
        }
        $profil['title']="Mahasiswa";
        $profil['store']="mahasiswa.store";
        return view('backend.admin.profil.edit',$profil);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "mahasiswa";
        unset($input['_token']);
        $mahasiswa = Profil::where('jenis','mahasiswa')->first();
        if($mahasiswa){
            Profil::where('id',$mahasiswa['id'])->update($input);
        } else {
            Profil::create($input);
        }
        return redirect()->back();
    }
}
