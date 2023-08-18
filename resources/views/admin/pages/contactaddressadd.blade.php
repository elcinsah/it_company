@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('contact.address.sent')}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="Phone" class="form-control" id="phone" name="phone" value="">
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


