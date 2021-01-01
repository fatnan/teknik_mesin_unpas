@extends('backend.layouts.master')

@section('content')
     <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Sejarah</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="showimages"></div>
                </div>
    
                <div class="col-md-6 offset-3 mt-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h6 class="text-white">How To Use TinyMCE Editor In Laravel ? - NiceSnippets.com</h6>
                        </div>
                        <div class="card-body">
                            <form class="image-upload" method="post" action="{{ route('sejarah.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Sejarah</label>
                                    <textarea name="content" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
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
