@extends('layout.layout')
@section('content')
    <section class="services">

        <div class="container">

            <div class="row">
                @if($services !=null)
                    @foreach($services as $sevic)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-{{$sevic->div_color}}">
                        <div class="icon"><i class="bx bxl-{{$sevic->icon}}"></i></div>
                        <h4 class="title"><a href="">{{$sevic->title}}</a></h4>
                        <p class="description">{{$sevic->description}}</p>
                    </div>
                </div>
                    @endforeach
                @endif

            </div>

        </div>
    </section>
@endsection
