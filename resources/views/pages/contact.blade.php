@extends('layout.layout')
@section('content')

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="{{$contact->address_icon}}"></i>
                  <h3>{{$contact->address_title}}</h3>
                  <p>{{$contact->address}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="{{$contact->email_icon}}"></i>
                  <h3>{{$contact->email_title}}</h3>
                    @foreach($email_t as $t)
                  <p>{{$t->email}}<br></p>
                    @endforeach
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="{{$contact->phone_icon}}"></i>
                  <h3>{{$contact->phone_title}}</h3>
                    @foreach($email_t as $t)
                        <p>{{$t->phone}}<br></p>
                    @endforeach
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{route('contact.mail')}}" method="post">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <br>
                <button style="background-color: #0dcaf0" type="submit" class="btn btn-default">gonder</button>
            </form>
          </div>

        </div>

      </div>
        @if(count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                   <h2>{{$error}}</h2>

                </div>
            @endforeach


        @endif

        @if(session('success'))
            <div class="alert alert-success">
                <h2>{{session('success')}}</h2>
            </div>

        @endif


    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
          <iframe src="{!! $contact->map !!}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section><!-- End Map Section -->
@endsection
