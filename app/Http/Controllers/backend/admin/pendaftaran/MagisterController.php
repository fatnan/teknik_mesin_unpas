<?php

namespace App\Http\Controllers\backend\admin\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendaftaran;


class MagisterController extends Controller
{
    public function index()
    {
        $pendaftaran=Pendaftaran::where('jenis','magister')->first();
        if($pendaftaran==null){
            $pendaftaran=[
                'content' => ""
            ];
        }
        $pendaftaran['title']="magister";
        $pendaftaran['store']="backend.pendaftaran.magister.store";
        return view('backend.admin.pendaftaran.edit',$pendaftaran);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "magister";
        unset($input['_token']);
        $magister = Pendaftaran::where('jenis','magister')->first();
        if($magister){
            Pendaftaran::where('id',$magister['id'])->update($input);
        } else {
            Pendaftaran::create($input);
        }

        return redirect()->route('backend.pendaftaran.magister.index');
    }
}
