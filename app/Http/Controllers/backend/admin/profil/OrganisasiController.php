<?php

namespace App\Http\Controllers\backend\admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;


class OrganisasiController extends Controller
{
    public function index()
    {
        $profil=Profil::where('jenis','organisasi')->first();
        if($profil==null){
            $profil=[
                'content' => ""
            ];
        }
        $profil['title']="Organisasi";
        $profil['store']="backend.profil.organisasi.store";
        return view('backend.admin.profil.edit',$profil);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "organisasi";
        unset($input['_token']);
        $organisasi = Profil::where('jenis','organisasi')->first();
        if($organisasi){
            Profil::where('id',$organisasi['id'])->update($input);
        } else {
            Profil::create($input);
        }
        return redirect()->route('backend.profil.organisasi.index');
    }
}
