@extends('layout.layout')
@section('content')
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
            @if($portfolio !=null)
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset($portfolio->image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>{{$portfolio->title}}</h3>

                        <ul>
                            <li><i class="bi bi-check2-circle"></i>
                                {{$portfolio->mehsul_haqqinda}}
                            </li>
                            @if($portfolio->kredit_muddeti !=null)
                            <li>
                            <i class="bi bi-check2-circle"></i>
                            Odenis_muddeti: ({{$portfolio->kredit_muddeti}}) : Ay
                            </li>
                            @endif
                            <li><i class="bi bi-check2-circle"></i>
                                Category: {{$portfolio->getProfolio->name}}
                            </li>
                            <li><i class="bi bi-check2-circle"></i>
                                paylasim_vaxdi: {{$portfolio->created_at!="" ?$portfolio->created_at:"10.10.2023"}}
                            </li>
                        </ul>
                        <p>{{$portfolio->description}}</p>
                    </div>
                </div>
            @endif
        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    @if($port !=null)
    <section class="facts section-bg" data-aos="fade-up">
        <div class="container">

            <div class="row counters">
                <div class="qitymet-title"><h3>butun mehsullarimiz azn le satilir</h3></div>


                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{$port->negd_qiymet}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>NEGD_QIYMET</p>
                    </div>
                    @if($port->kredit_qiymet !=null)
                        <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{$port->kredit_qiymet}}" data-purecounter-duration="1"
                              class="purecounter"></span>
                            <p>KREDIT_QIYMET</p>
                        </div>
                    @endif
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{$port->ilkin_odenis}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>ILKIN_ODENIS</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{$port->ayliq_odenis}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>AYLIQ_ODENIS</p>
                    </div>

            </div>

        </div>
    </section><!-- End Facts Section -->
    @endif

@endsection

