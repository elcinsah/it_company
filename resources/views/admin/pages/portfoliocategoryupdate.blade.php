@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('portfoliocategory.change',$portfoliocategory->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$portfoliocategory->name}}" required>
            </div>

            <div class="form-group">

                <select id="status" name="status" >
                    <option value="" selected disabled hidden>{{$portfoliocategory->status===0?"passiv":"active"}}</option>
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


