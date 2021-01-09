<?php

namespace App\Http\Controllers\backend\admin\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendaftaran;


class SarjanaController extends Controller
{
    public function index()
    {
        $pendaftaran=Pendaftaran::where('jenis','sarjana')->first();
        if($pendaftaran==null){
            $pendaftaran=[
                'content' => ""
            ];
        }
        $pendaftaran['title']="sarjana";
        $pendaftaran['store']="backend.pendaftaran.sarjana.store";
        return view('backend.admin.pendaftaran.edit',$pendaftaran);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "sarjana";
        unset($input['_token']);
        $sarjana = Pendaftaran::where('jenis','sarjana')->first();
        if($sarjana){
            Pendaftaran::where('id',$sarjana['id'])->update($input);
        } else {
            Pendaftaran::create($input);
        }

        return redirect()->route('backend.pendaftaran.sarjana.index');
    }
}
