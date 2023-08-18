@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('about.add.form')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" name="title" value="" required>
            </div>

            <div class="form-group">
                <label for="image">slect foto:</label><br>

                <input type="file" class="form-control" id="image" name="image" value="">
            </div>


            <div class="form-group">
                <label for="pwd">description:</label>
                <textarea type="text" class="form-control" id="summernote" name="description" value=""
                          required></textarea>
            </div>
            <div class="form-group">
                <label for="description_slider">slider_sescription:</label>
                <textarea type="text" class="form-control" id="description_slider" name="description_slider" value=""
                          required></textarea>
            </div>
            <div class="form-group">

                <select id="status" name="status">
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


