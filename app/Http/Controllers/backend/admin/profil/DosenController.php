<?php

namespace App\Http\Controllers\backend\admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;


class DosenController extends Controller
{
    public function index()
    {
        $profil=Profil::where('jenis','dosen')->first();
        if($profil==null){
            $profil=[
                'content' => ""
            ];
        }
        $profil['title']="Dosen";
        $profil['store']="dosen.store";
        return view('backend.admin.profil.edit',$profil);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "dosen";
        unset($input['_token']);
        $dosen = Profil::where('jenis','dosen')->first();
        if($dosen){
            Profil::where('id',$dosen['id'])->update($input);
        } else {
            Profil::create($input);
        }
        return redirect()->back();
    }
}
