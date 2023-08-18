@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('home.form.sent')}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="">
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




