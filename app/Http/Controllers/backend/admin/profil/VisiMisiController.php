<?php

namespace App\Http\Controllers\backend\admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;


class VisiMisiController extends Controller
{
    public function index()
    {
        $profil=Profil::where('jenis','visimisi')->first();
        if($profil==null){
            $profil=[
                'content' => ""
            ];
        }
        $profil['title']="Visi Misi";
        $profil['store']="backend.profil.visimisi.store";
        return view('backend.admin.profil.edit',$profil);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "visimisi";
        unset($input['_token']);
        $visimisi = Profil::where('jenis','visimisi')->first();
        if($visimisi){
            Profil::where('id',$visimisi['id'])->update($input);
        } else {
            Profil::create($input);
        }
        return redirect()->route('backend.profil.visimisi.index');
    }
}
