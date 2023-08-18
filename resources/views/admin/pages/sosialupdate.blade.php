@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('sosial.update.form',$sosial->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="facebook">Facebook:</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="{{$sosial->facebook}}" required>
            </div>
            <div class="form-group">
                <label for="instagram">Instagram:</label>
                <input type="text" class="form-control" id="instagram" name="instagram" value="{{$sosial->instagram}}" required>
            </div>
            <div class="form-group">
                <label for="linkedin">Linkedin:</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$sosial->linkedin}}" required>
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


