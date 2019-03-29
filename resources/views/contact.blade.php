
@extends('layouts.app')
@section('title')
<title>Junu | Edu {{ 'Contact-us' }}</title>

@endsection

@section('content')
@include('layouts.nav')
<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/bg-laptop.jpg)" data-overlay="8">
  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>Contact us</h1>
        <p class="fs-18 opacity-70">Please contact us below  !</p>

      </div>
    </div>

  </div>
</header>
<!-- END Header -->


<!-- Main container -->
<main class="main-content">




  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Contact form
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <div class="section">
    <div class="container">

      <div class="row gap-y">
        <div class="col-12 col-md-6">
                @if(Session::has('success'))
                <div class="alert alert-success">
                  {{ Session::get('success') }}
                </div>
             @endif

          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            {{--  <div class="alert alert-success">We received your message and will contact you back soon.</div>  --}}

            <div class="form-group">
              <input class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Your Name">
              @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
              <input class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Your Email Address">
              @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input class="form-control form-control-lg {{ $errors->has('phnoe') ? ' is-invalid' : '' }}" type="phone" name="phone" placeholder="Your Phone Number">
                @if ($errors->has('phone'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
            </div>

            <div class="form-group">
              <textarea class="form-control form-control-lg {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" rows="4" placeholder="Your Message"></textarea>
              @if ($errors->has('message'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                @endif
            </div>


            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Send Enquiry</button>
          </form>

        </div>


        <div class="col-12 col-md-5 offset-md-1">
          <div class="bg-grey h-full p-20">
            <p>Give us a call or stop by our door anytime, we try to answer all enquiries within 24 hours on a work days.</p>
            <p>We are open from 9am — 5pm week days.</p>

            <hr class="w-80">

            <p class="lead">Bogani East RD, Langata 12<br>Nairobi, Kenya 00200</p>

            <div>
              <span class="d-inline-block w-20 text-lighter" title="Email">E:</span>
              <span class="fs-14">junuedu@gmail.com</span>
            </div>

            <div>
              <span class="d-inline-block w-20 text-lighter" title="Phone">P:</span>
              <span class="fs-14">+254 (725) 652-675</span>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>




  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Map
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <div class="h-400" data-provide="map" data-lat="44.540" data-lng="-78.556" data-marker-lat="44.540" data-marker-lng="-78.556" data-zoom="6" data-style="light"></div>





</main>
<!-- END Main container -->


@endsection










