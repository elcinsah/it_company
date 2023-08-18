@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">

        <form action="{{route('contact.info.change',$info->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="email">Email_title:</label>
                <input type="text" class="form-control" id="email_title" name="email_title" value="{{$info->email_title}}" required>
            </div>
            <div class="form-group">
                <label for="phone_title">Phone_title:</label>
                <input type="text" class="form-control" id="phone_title" name="phone_title" value="{{$info->phone_title}}" required>
            </div>
            <div class="form-group">
                <label for="address_title">Address_title:</label>
                <input type="text" class="form-control" id="address_title" name="address_title" value="{{$info->address_title}}" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$info->address}}" required>
            </div>
            <div class="form-group">
                <label for="address_icon">Address_icon:</label>
                <input type="text" class="form-control" id="addres_icon" name="address_icon" value="{{$info->address_icon}}" required>
            </div>
            <div class="form-group">
                <label for="email_icon">Email_icon:</label>
                <input type="text" class="form-control" id="email_icon" name="email_icon" value="{{$info->email_icon}}" required>
            </div>
            <div class="form-group">
                <label for="phone_icon">Phone_icon:</label>
                <input type="text" class="form-control" id="phone_icon" name="phone_icon" value="{{$info->phone_icon}}" required>
            </div>
            <div class="form-group">
                <label for="map">Map:</label>
                <input type="text" class="form-control" id="map" name="map" value="{{$info->map}}" required>
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


