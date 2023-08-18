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

                            <li><i class="bi bi-check2-circle"></i>
                                Category: {{$portfolio->getProfolio->name}}
                            </li>
                            <li><i class="bi bi-check2-circle"></i>
                                Qiymet: {{$portfolio->negd_qiymet}}:(azn)
                            </li>
                            <li><i class="bi bi-check2-circle"></i>
                                paylasim_vaxdi: {{$portfolio->created_at!="" ?$portfolio->created_at:"10.10.2023"}}
                            </li>
                        </ul>
                        <p>{{$portfolio->description}}</p>
                    </div>
                </div>
            <br>
                @if($portfolio->satis_novu !=0)
                    <div>
                        <a href="{{route('single',$portfolio->id)}}">
                            <button type="button" class="btn btn-success">Kreditle Al</button>
                        </a>
                    </div>
                @endif
            @endif
        </div>
    </section>

@endsection

