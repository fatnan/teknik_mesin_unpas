@extends('backend.layouts.master')

@section('content')
    <div class="container">    
        <br />
        {{-- <h3 align="center">How to Delete or Remove Data From Mysql in Laravel 6 using Ajax</h3> --}}
        <br />
        <div align="right">
            <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button>
        </div>
        <br />
        <div class="table-responsive">
            <table id="berita_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th width="35%">Judul</th>
                    <th width="30%">Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#berita_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('berita.index') }}",
                },
                columns: [
                    {
                        data: 'judul',
                        name: 'judul'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });

            $('#create_record').click(function(){
                $('.modal-title').text('Add New Record');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#form_result').html('');

                $('#formModal').modal('show');
            });

            $('#berita_form').on('submit', function(event){
                event.preventDefault();
                var action_url = '';

                if($('#action').val() == 'Add')
                {
                    action_url = "{{ route('berita.store') }}";
                }

                if($('#action').val() == 'Edit')
                {
                    action_url = "{{ route('berita.update') }}";
                }

                $.ajax({
                    url: action_url,
                    method:"POST",
                    data:$(this).serialize(),
                    dataType:"json",
                    success:function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success)
                        {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#berita_form')[0].reset();
                            $('#berita_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            });

            $(document).on('click', '.edit', function(){
                var id = $(this).attr('id');
                $('#form_result').html('');
                $.ajax({
                    url :"/berita/"+id+"/edit",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#judul').val(data.result.judul);
                        $('#content').val(data.result.content);
                        $('#hidden_id').val(id);
                        $('.modal-title').text('Edit Record');
                        $('#action_button').val('Edit');
                        $('#action').val('Edit');
                        $('#formModal').modal('show');
                    }
                })
            });

            var berita_id;

            $(document).on('click', '.delete', function(){
                berita_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"berita/destroy/"+berita_id,
                    beforeSend:function(){
                        $('#ok_button').text('Deleting...');
                    },
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#confirmModal').modal('hide');
                            $('#berita_table').DataTable().ajax.reload();
                            alert('Data Deleted');
                        }, 2000);
                    }
                })
            });

        });
    </script>
      
@endsection
