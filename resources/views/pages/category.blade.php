@extends('layout.layout')
@section('content')

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Portfolio</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Our Portfolio</li>
                </ol>
            </div>

        </div>
        @if($category !=null)
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
        <div class="container">

            <div class="row" id="title-porfolio">
                <div class="col-lg-12">
                    <p><h2> staisda olan umumi mehsullarimiz</h2></p>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                 data-aos-duration="500">


                    @foreach($category as $port)

                        <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
                            <div class="portfolio-item">
                                <img src="{{asset($port->image)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h3>{{$port->getProfolio->name}}</h3>
                                    <div  class="portfolio-item">
                                        <a href="{{asset($port->image)}}" data-gallery="portfolioGallery"
                                           class="portfolio-lightbox" title="{{$port->getProfolio->name}}"><i class="bx bx-plus"></i></a>
                                        <a href="{{route('single.negd',$port->id)}}" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>

                                </div>

                            </div>
                            @if($port->satis_novu==1)
                                <div>
                                    <a href="{{route('single',$port->id)}}">
                                        <button type="button" class="btn btn-success">Kreditle Al</button>
                                    </a>
                                </div>
                            @endif
                            <br>
                        </div>


                    @endforeach
                        {{ $category->links() }}


            </div>

        </div>
    </section><!-- End Portfolio Section -->
    @endif


@endsection
