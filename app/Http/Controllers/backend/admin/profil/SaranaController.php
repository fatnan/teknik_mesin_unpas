<?php

namespace App\Http\Controllers\backend\admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;


class SaranaController extends Controller
{
    public function index()
    {
        $profil=Profil::where('jenis','sarana')->first();
        if($profil==null){
            $profil=[
                'content' => ""
            ];
        }
        $profil['title']="Sarana";
        $profil['store']="sarana.store";
        return view('backend.admin.profil.edit',$profil);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "sarana";
        unset($input['_token']);
        $sarana = Profil::where('jenis','sarana')->first();
        if($sarana){
            Profil::where('id',$sarana['id'])->update($input);
        } else {
            Profil::create($input);
        }
        return redirect()->back();
    }
}
