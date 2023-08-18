@extends('layout.layout')
@section('content')

    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

               @if($team !=null)
@foreach($team as $teams)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset($teams->image)}}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>{{$teams->name}}</h4>
                            <span>{{$teams->job}}</span>
                            <p>{{$teams->description}}</p>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section><!-- End Team Section -->

@endsection

