@extends('layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid">
            @include('flash::message')
            <div class="col-md-6">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Category</h3>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input value="{{$categories->name}}" type="text" name="name" class="form-control">
                            </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</section>
@endsection

@section('js')
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endsection
