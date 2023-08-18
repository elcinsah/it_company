@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('services.change',$services->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$services->title}}" required>
            </div>
            <div class="form-group">
                <label for="icon">icon:</label>
                <input type="text" class="form-control" id="icon" name="icon" value="{{$services->icon}}" required>
            </div>

            <div class="form-group">
                <label for="div_color">div_color:</label>
                <input type="text" class="form-control" id="div_color" name="div_color" value="{{$services->div_color}}" required>
            </div>

            <div class="form-group">
                <label for="pwd">description:</label>
                <textarea type="text" class="form-control" id="summernote" name="description" value=""
                          required>{{$services->description}}</textarea>
            </div>
            <div class="form-group">

                <select id="status" name="status" >
                    <option value="" selected disabled hidden>{{$services->status===0?"passiv":"active"}}</option>
                    <option value="1">active</option>
                    <option value="0">passive</option>

                </select>

            </div>

            <button type="submit" class="btn btn-default">gonder</button>
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


