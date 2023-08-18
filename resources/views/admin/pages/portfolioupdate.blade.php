@extends('admin.backlayout.backlayout')
@section('content')
    <div class="container">
@if($portfolio!=null)
        <form action="{{route('portfolio.change',$portfolio->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$portfolio->title}}" required>
            </div>
            <div class="form-group">
                <label for="mehsul_haqqinda">mehsul_haqqinda:</label>
                <input type="text" class="form-control" id="mehsul_haqqinda" name="mehsul_haqqinda" value="{{$portfolio->mehsul_haqqinda}}" required>
            </div>
            <div class="form-group">
                <label for="img">slect foto:</label><br>
                <img src="{{asset($portfolio->image)}}" width="200" class="img-thumbnail">
                <input type="file" class="form-control" id="img" name="image" value="">
            </div>


            <div class="form-group">
                <label for="pwd">description:</label>
                <textarea type="text" class="form-control" id="summernote" name="description" value=""
                          required>{{$portfolio->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="negd_qiymet">negd_qiymet:</label>
                <input type="text" class="form-control" id="negd_qiymet" name="negd_qiymet" value="{{$portfolio->negd_qiymet}}" required>
            </div>
            <div class="form-group">
                <label for="kredit_qiymet">kredit_qiymet:</label>
                <input type="text" class="form-control" id="kredit_qiymet" name="kredit_qiymet" value="{{$portfolio->kredit_qiymet}}" required>
            </div>
            <div class="form-group">
                <label for="ilkin_odenis">ilkin_odenis:</label>
                <input type="text" class="form-control" id="ilkin_odenis" name="ilkin_odenis" value="{{$portfolio->ilkin_odenis}}" required>
            </div>
            <div class="form-group">
                <label for="ayliq_odenis">ayliq_odenis:</label>
                <input type="text" class="form-control" id="ayliq_odenis" name="ayliq_odenis" value="{{$portfolio->ayliq_odenis}}" required>
            </div>
            <div class="form-group">
                <label for="kredit_muddeti">kredit_muddeti:</label>
                <input type="text" class="form-control" id="kredit_muddeti" name="kredit_muddeti" value="{{$portfolio->kredit_muddeti}}" required>
            </div>

            <div class="form-group">
                <select id="status" name="status" >
                    <option value="" selected disabled hidden>{{$portfolio->status===0?"passiv":"active"}}</option>
                    <option value="1">active</option>
                    <option value="0">passive</option>
                </select>

            </div>
            <div class="form-group">

                <select id="satis_novu" name="satis_novu" >
                    <option value="" selected disabled hidden>{{$portfolio->satis_novu===0?"negd":"kredit"}}</option>
                    <option value="1">kredit</option>
                    <option value="0">negd</option>

                </select>

            </div>
            <div class="form-group">

                <select id="catname" name="catname">
                    <option value="" selected disabled hidden>{{$portfolio->getProfolio->name}}</option>

                @foreach($catname as $catnames)
                        <option value="{{$catnames->id}}">{{$catnames->name}}</option>
                    @endforeach

                </select>

            </div>

            <button type="submit" class="btn btn-default">gonder</button>
        </form>
        @endif
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


