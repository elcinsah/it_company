@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('about.project.change',$about_project->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Project_name:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$about_project->title}}" required>
            </div>

            <div class="form-group">
                <label for="title_cont">Project_Count:</label>
                <input type="number" class="form-control" id="title_count" name="title_count" value="{{$about_project->title_count}}" required>
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


