@extends('backend.layouts.master')

@section('content')
     <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Sejarah</h1>
            </div> --}}

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="showimages"></div>
                </div>
    
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h6 class="text-white"><?=Str::upper($title)?></h6>
                        </div>
                        <div class="card-body">
                            <form class="image-upload" method="post" action="{{ route($store) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control"  placeholder="Judul" value={{ (old('judul') ? old('judul') : ($judul ? $judul : "") ) }}>
                                    @if ($errors->has('judul'))
                                        <span class="text-danger">{{ $errors->first('judul') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea id="ckeditor" name="isi" rows="5" cols="40" class="form-control tinymce-editor"><?=(old('isi')? old('isi') : ($isi ? $isi : "") )?></textarea>
                                    @if ($errors->has('isi'))
                                        <span class="text-danger">{{ $errors->first('isi') }}</span>
                                    @endif
                                    <input type="hidden" name="hidden_id" value={{$hidden_id ? $hidden_id : ""}}>
                                </div>  
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success btn-sm">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        <!-- /.container-fluid -->


      
@endsection
