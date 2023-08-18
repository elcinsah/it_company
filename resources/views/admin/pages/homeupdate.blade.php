@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">
        @if($home !=null)
        <form action="{{route('home.form.update',$home->id)}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$home->description}}">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$home->title}}">
            </div>
            <div class="form-group">

                <select id="status" name="status" >
                    <option value="" selected disabled hidden>{{$home->status===0?"passiv":"active"}}</option>
                    <option value="1">active</option>
                    <option value="0">passive</option>
                </select>

            </div>

            <button type="submit" class="btn btn-default">gonder</button>
            @endif
        </form>

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




