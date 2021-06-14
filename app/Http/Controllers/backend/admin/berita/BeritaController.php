<?php

namespace App\Http\Controllers\backend\admin\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;
use DataTables;
use Validator;


class BeritaController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Berita::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        // $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button = '<a href="berita/'.$data->id.'/edit" name="edit" class="edit btn btn-primary btn-sm">Edit</a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('backend.admin.berita.index');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berita['judul']="";
        $berita['isi'] = "";
        $berita['hidden_id'] = "";
        $berita['title']="Create Berita";
        $berita['store']="berita.store";

        return view('backend.admin.berita.edit',$berita);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'judul'    =>  'required',
            'isi'     =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return redirect()->back()->withInput()->withErrors($error);
            // return back()->withErrors($error)->withInput($request->input());
        }

        $form_data = array(
            'judul'        =>  $request->judul,
            'isi'         =>  $request->isi
        );

        Berita::create($form_data);

        return redirect()->route('berita.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if(request()->ajax())
        // {
        //     $data = Berita::findOrFail($id);
        //     return response()->json(['result' => $data]);
        // }

        $berita=Berita::where('id',$id)->first();
        if($berita==null){
            $berita=[
                'isi' => ""
            ];
        }
        $berita['title']="Edit Berita";
        $berita['store']="berita.update";
        $berita['hidden_id']=$id;

        return view('backend.admin.berita.edit',$berita);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $rules = array(
            'judul'        =>  'required',
            'isi'         =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return redirect()->back()->withInput()->withErrors($error);
        }

        $form_data = array(
            'judul'    =>  $request->judul,
            'isi'     =>  $request->isi
        );

        Berita::whereId($request->hidden_id)->update($form_data);

        return redirect()->route('berita.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::findOrFail($id);
        $data->delete();
    }
}
