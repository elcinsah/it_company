
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>it Company</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <style>
     .span1
     {
       color: #9B7536;
     }
     .span2
     {
color: #00b44e;
     }
     .span3
     {
color: #9B7536;
     }
    </style>

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Moderna
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light"><a href=""><span class="span1">It</span><span class="span2">/</span><span class="span3">Company</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="{{request()->is('/')? "active":""}}" href="{{route('home')}}">Home</a></li>
                <li><a class="{{request()->is('about')? "active":""}}" href="{{route('about')}}">About</a></li>
                <li><a class="{{request()->is('service')? "active":""}}" href="{{route('services')}}">Services</a></li>
                <li><a class="{{request()->is('portfolio')? "active":""}}" href="{{route('portfolio')}}">Portfolio</a></li>
                <li><a class="{{request()->is('team-page')? "active":""}}" href="{{route('team.page')}}">Team</a></li>


                <li class="dropdown"><a  href="#"><span >category</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @if($meny !=null)
                            @foreach($meny as $menys)
                        <li><a  href="{{route('category',$menys->id)}}">{{$menys->name}}</a></li>

                            @endforeach
                        @endif
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

