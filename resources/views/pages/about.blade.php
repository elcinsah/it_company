@extends('layout.layout')
@section('content')



    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{asset($about->image)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>{{$about->title}}</h3>
            <p class="fst-italic">
             {{$about->description}}
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">
@if($about_project !=null)
    @foreach($about_project as $project)
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$project->title_count}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>{{$project->title}}</p>
          </div>
                @endforeach
            @endif

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->


    <!-- ======= Tetstimonials Section ======= -->

    <section class="testimonials" data-aos="fade-up">
      <div class="container">
          @if($about !=null)
        <div class="section-title">
          <h2>Kamandamiz</h2>
          <p>{{$about->description_slider}}</p>
        </div>
          @endif
          @if($team !=null)

        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">
              @foreach($team as $teams)
            <div class="testimonial-item swiper-slide">
              <img src="{{asset($teams->image)}}" class="testimonial-img" alt="">
              <h3>{{$teams->name}}</h3>
              <h4>{{$teams->job}}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{$teams->description}}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
              @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

              @endif
      </div>
    </section><!-- End Ttstimonials Section -->

@endsection

