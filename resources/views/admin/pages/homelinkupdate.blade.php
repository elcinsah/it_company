@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">
        @if($home_link !=null)
            <form action="{{route('home-link.form.update',$home_link->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="gift">Gift:</label>
                    <input type="text" class="form-control" id="gift" name="gift" value="{{$home_link->gift}}">
                </div>
                <div class="form-group">
                    <label for="gift_description">Gift_description:</label>
                    <textarea type="text" class="form-control" id="gift_description" name="gift_description" value=""
                              required>{{$home_link->gift_description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="cashback">Cashback:</label>
                    <input type="text" class="form-control" id="cashback" name="cashback"
                           value="{{$home_link->cashback}}">
                </div>
                <div class="form-group">
                    <label for="cashback_description">Cashback_description:</label>
                    <textarea type="text" class="form-control" id="cashback_description" name="cashback_description"
                              value=""
                              required>{{$home_link->cashback_description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="link_home">Link_home:</label>
                    <input type="text" class="form-control" id="link_home" name="link_home"
                           value="{{$home_link->link_home}}">
                </div>
                <div class="form-group">

                    <select id="status" name="status">
                        <option value="" selected disabled hidden>{{$home_link->status===0?"passiv":"active"}}</option>
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




