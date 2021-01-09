<?php

namespace App\Http\Controllers\backend\admin\pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendaftaran;


class PostDoctoralController extends Controller
{
    public function index()
    {
        $pendaftaran=Pendaftaran::where('jenis','postdoctoral')->first();
        if($pendaftaran==null){
            $pendaftaran=[
                'content' => ""
            ];
        }
        $pendaftaran['title']="postdoctoral";
        $pendaftaran['store']="backend.pendaftaran.postdoctoral.store";
        return view('backend.admin.pendaftaran.edit',$pendaftaran);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "postdoctoral";
        unset($input['_token']);
        $postdoctoral = Pendaftaran::where('jenis','postdoctoral')->first();
        if($postdoctoral){
            Pendaftaran::where('id',$postdoctoral['id'])->update($input);
        } else {
            Pendaftaran::create($input);
        }

        return redirect()->route('backend.pendaftaran.postdoctoral.index');
    }
}
