<?php

namespace App\Http\Controllers\backend\admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;


class SejarahController extends Controller
{
    public function index()
    {
        return view('backend.admin.profil.sejarah');
    }
    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "sejarah";
        unset($input['_token']);
        $sejarah = Profil::where('jenis','sejarah')->get();
        if($sejarah){
            Profil::where('id',$sejarah[0]['id'])->update($input);
        } else {
            Profil::create($input);
        }
        return redirect()->back();
    }
}
