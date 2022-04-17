@extends('layouts.master')

@section('content')

        <div class="container-fluid mt-5">
            @include('flash::message')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                            <a href="{{route('brands.create')}}" class="btn btn-primary  float-right">
                                <i class="fa fa-plus"></i>Add Category</a>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($brands as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>
                                                <a href="{{route('brands.edit',$data->id)}}" class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i>Edit
                                                </a>
                                                <a href="javascript:;" class="btn btn-danger btn-sm sa-delete" data-form-id="{{$data->id}}">
                                                    <i class="fa fa-trash"></i>Delete</a>

                                                <form id="{{$data->id}}" action="{{route('brands.destroy',$data->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                   @endforeach
                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
@endsection

@section('js')
<script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        });

        $('.sa-delete').on('click',function(){
            let form_id = $(this).data('form-id');
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $("#"+form_id).submit();
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })
        })
    });
</script>
@endsection
