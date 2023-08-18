@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('about.change',$about->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$about->title}}" required>
            </div>

            <div class="form-group">
                <label for="img">slect foto:</label><br>
                <img src="{{asset($about->image)}}" width="200" class="img-thumbnail">
                <input type="file" class="form-control" id="img" name="image" value="">
            </div>


            <div class="form-group">
                <label for="pwd">description:</label>
                <textarea type="text" class="form-control" id="summernote" name="description" value=""
                          required>{{$about->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="slider_sescription">slider_description:</label>
                <textarea type="text" class="form-control" id="slider_sescription" name="description_slider" value=""
                          required>{{$about->description_slider}}</textarea>
            </div>
            <div class="form-group">

                <select id="status" name="status" >
                    <option value="" selected disabled hidden>{{$about->status==0?"passiv":"active"}}</option>
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


