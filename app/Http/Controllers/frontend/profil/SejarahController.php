<?php

namespace App\Http\Controllers\frontend\profil;

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
        return view('frontend.profil.sejarah',$profil);
    }
}
