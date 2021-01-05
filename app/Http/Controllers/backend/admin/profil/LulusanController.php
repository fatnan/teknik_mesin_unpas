<?php

namespace App\Http\Controllers\backend\admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;


class LulusanController extends Controller
{
    public function index()
    {
        $profil=Profil::where('jenis','lulusan')->first();
        if($profil==null){
            $profil=[
                'content' => ""
            ];
        }
        $profil['title']="Lulusan";
        $profil['store']="lulusan.store";
        return view('backend.admin.profil.edit',$profil);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "lulusan";
        unset($input['_token']);
        $lulusan = Profil::where('jenis','lulusan')->first();
        if($lulusan){
            Profil::where('id',$lulusan['id'])->update($input);
        } else {
            Profil::create($input);
        }
        return redirect()->back();
    }
}
