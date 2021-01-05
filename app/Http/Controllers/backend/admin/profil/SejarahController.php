<?php

namespace App\Http\Controllers\backend\admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;


class SejarahController extends Controller
{
    public function index()
    {
        $profil=Profil::where('jenis','sejarah')->first();
        if($profil==null){
            $profil=[
                'content' => ""
            ];
        }
        $profil['title']="sejarah";
        $profil['store']="sejarah.store";
        return view('backend.admin.profil.edit',$profil);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "sejarah";
        unset($input['_token']);
        $sejarah = Profil::where('jenis','sejarah')->first();
        if($sejarah){
            Profil::where('id',$sejarah['id'])->update($input);
        } else {
            Profil::create($input);
        }
        
        return redirect()->route('sejarah.index');
    }
}
