@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">
@if( $admin_user !=null)
        <form action="{{route('admin-user.update.form',$admin_user->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$admin_user->name}}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$admin_user->email}}">
            </div>


            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="{{$admin_user->password}}">
            </div>


            <button type="submit" class="btn btn-default">gonder</button>
        </form>
        @endif
    </div>


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#summernote').summernote(
                {
                    height: 300
                }
            );
        });

    </script>
@endsection


