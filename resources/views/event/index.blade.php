
@extends('layouts.app')
@section('title')
<title>Junu | Edu {{ 'Events' }}</title>

@endsection

@section('content')
@include('layouts.nav')
<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/bg-laptop.jpg)" data-overlay="8">
  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>Events</h1>
        <p class="fs-18 opacity-70">Find your paper here !</p>

      </div>
    </div>

  </div>
</header>
<!-- END Header -->


<!-- Main container -->
<main class="main-content bg-gray">

            <section class="section">
                @forelse ($events as $e)
                <div class="container">
                        <header class="section-header">
                          <small><strong>Feature</strong></small>
                          <h2>{{ $e->title }}</h2>
                          <hr>
                          <p class="lead">Venue:{{ $e->location }}</p>
                        </header>



                        <div class="row gap-y">

                          <div class="col-12 offset-md-2 col-md-8 mb-30">
                            <img src="{{ Voyager::image( $e->image ) }}

                            " alt="..." data-aos="fade-up" data-aos-duration="2000">
                          </div>
<hr>
                          <div class="col-12 col-md-6 col-xl-4">
                            <div class="flexbox gap-items-4">
                              <div>
                                    <h5><i class="fa fa-tv fs-20 mr-5 text-secondary"></i>Date: <small>{{ $e->date }}</small></h5>
                              </div>
                            </div>
                          </div>


                          <div class="col-12 col-md-6 col-xl-4">
                            <div class="flexbox gap-items-4">
                              <div>
                                <h5><i class="fa fa-wrench fs-25 mr-5 text-secondary"></i>Staring time: <small>{{ $e->starting }}</small></h5>
                              </div>
                            </div>
                          </div>


                          <div class="col-12 col-md-6 col-xl-4">
                            <div class="flexbox gap-items-4">
                              <div>
                              <h5><i class="fa fa-cubes fs-25 pt-4 text-secondary"></i>Ending time : <small>{{ $e->ending }}</small></h5>
                              </div>


                            </div>
                          </div>

                          <div class="col-12 text-center">
                            <br><br>
                            <a class="btn btn-lg btn-primary" href="#">See more Features</a>
                          </div>

                        </div>

                      </div>
                      <br>
                      <hr>
                @empty

                @endforelse

            </section>
</main>
<!-- END Main container -->

@endsection










