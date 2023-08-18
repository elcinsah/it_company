@extends('layout.layout')
@section('content')
    <section id="hero" class="d-flex justify-cntent-center align-items-center">

        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            @if($home !=null)
                @foreach($home as $key => $homes)
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

                    <div class="carousel-item {{!$key ?'active':""}}">
                        <div class="carousel-container">
                            <h2 class="animate__animated animate__fadeInDown">{{$homes->title}}</h2>
                            <p id="des" class="animate__animated animate__fadeInUp">
                                {{substr($homes->description,0,100)}}
                                @if(strlen($homes->description)>100)...
                            <p id="pe"></p>
                            @endif

                            </p>
                            @if(strlen($homes->description)>100)
                                <button class="btn btn-primary" onclick="myFunction({{$homes->id}})">Daha cox</button>

                            @endif
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                    </a>

                @endforeach

            @endif

        </div>


    </section>
    <main id="main">
        <section class="portfolio">
            <div class="container">


                <div class="row" id="title-porfolio">
                    <div class="col-lg-12">
                        <p>
                        <h2> staisda olan umumi mehsullarimiz</h2></p>

                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                     data-aos-duration="500">
                    @if($portfolio !=null)

                        @foreach($portfolio as $port)
                            <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
                                <div class="portfolio-item">
                                    <img src="{{$port->getCategory->image}}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h3>{{$port->name}}</h3>
                                        <div class="portfolio-item">
                                            <a href="{{$port->getCategory->image}}" data-gallery="portfolioGallery"
                                               class="portfolio-lightbox" title="{{$port->name}}"><i
                                                    class="bx bx-plus"></i></a>
                                            <a href="{{route('single.negd',$port->getCategory->id)}}"
                                               title="Portfolio Details"><i
                                                    class="bx bx-link"></i></a>
                                        </div>

                                    </div>

                                </div>
                                <br>
                                @if($port->getCategory->satis_novu==1)
                                    <div>
                                        <a href="{{route('single',$port->getCategory->id)}}">
                                            <button type="button" class="btn btn-success">Kreditle Al</button>
                                        </a>
                                    </div>
                                @endif
                                <br>
                            </div>
                        @endforeach

                    @endif

                </div>
                {{ $portfolio->links() }}

            </div>
        </section><!-- End Portfolio Section -->


        @if($homelink !=null)
            <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 video-box">
                            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                            <a href="{{$homelink->link_home}}" class="venobox play-btn mb-4"
                               data-vbtype="video" data-autoplay="true"></a>
                        </div>

                        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                <h4 class="title"><span>{{$homelink->cashback}}</span></h4>
                                <p class="description">{{$homelink->cashback_description}}</p>
                            </div>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-gift"></i></div>
                                <h4 class="title">{{$homelink->gift}}</h4>
                                <p class="description">{{$homelink->gift_description}}</p>
                            </div>

                        </div>
                    </div>

                </div>
            </section><!-- End Why Us Section -->
        @endif
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

        <script>

            function myFunction(id) {
                var idi;
                idi = id;

                let pe = document.getElementById('pe');
                $.ajax({
                    url: "{{route('read.more')}}",
                    method: "POST",
                    headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                    data: {
                        "idi": idi,
                    },
                    success: function (result) {
                        let des = document.getElementById('des');

                        for (let i in result) {

                            pe.innerHTML = result[i];
                        }
                        des.innerHTML="";
                    }


                });


            }


        </script>
@endsection
