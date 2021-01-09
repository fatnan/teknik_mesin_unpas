<?php

namespace App\Http\Controllers\backend\admin\tridharma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tridharma;


class PendidikanController extends Controller
{
    public function index()
    {
        $tridharma=Tridharma::where('jenis','pendidikan')->first();
        if($tridharma==null){
            $tridharma=[
                'content' => ""
            ];
        }
        $tridharma['title']="pendidikan";
        $tridharma['store']="backend.tridharma.pendidikan.store";
        return view('backend.admin.tridharma.edit',$tridharma);
    }

    public function store(Request $request){
        $input = $request->all();
        $input['jenis'] = "pendidikan";
        unset($input['_token']);
        $pendidikan = Tridharma::where('jenis','pendidikan')->first();
        if($pendidikan){
            Tridharma::where('id',$pendidikan['id'])->update($input);
        } else {
            Tridharma::create($input);
        }

        return redirect()->route('backend.tridharma.pendidikan.index');
    }
}
