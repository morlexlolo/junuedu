
@extends('layouts.app')
@section('title')
<title>Junu | Edu {{ $event->title }} </title>
@endsection

@section('content')
@include('layouts.nav')
<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/header-ss.jpg)" data-overlay="8">
  <div class="container text-center">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>More than {{ $event->title}} </h1>


      </div>
    </div>

  </div>
</header>
<!-- END Header -->

<!-- Main container -->
    <main class="main-content">



      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section" id="section-content">
        <div class="container">

          <div class="row">
                <br>
                <p><img src="{{ Voyager::image( $event->image ) }}" alt="{{ $event->title }}" onerror="this.style.display='none'"/></p>
                <br>
            <div class="col-12 col-lg-8 offset-lg-2">

            <p class="lead">
                    {!! Markdown::convertToHtml( $event->description ) !!};

            </p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">


              <div class="gap-multiline-items-1 mt-30">
                <a class="badge badge-pill badge-default" href="#"><i class="fas fa-calendar-alt"></i> Date : {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y')}}</a>
                <a class="badge badge-pill badge-default" href="#"><i class="fas fa-clock"></i> Venue : {{  $event->location}}</a>
                <a class="badge badge-pill badge-default" href="#"><i class="fas fa-clock"></i> Starts : {{\Carbon\Carbon::createFromFormat('H:i:s',$event->starting)->format('h:i:a')}}</a>
                <a class="badge badge-pill badge-default" href="#"><i class="fas fa-clock"></i> Ends : {{\Carbon\Carbon::createFromFormat('H:i:s',$event->ending)->format('h:i:a')}}</a>
              </div>

            </div>
          </div>


        </div>
      </div>





      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Comments
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section bt-1 bg-grey">
        <div class="container">

          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

             @include('layouts.disqus')

            </div>
          </div>

        </div>
      </div>

      <section class="section">
            <div class="container">

              <h5 class="mb-20">Similar Events</h5>

              <div class="row gap-y gap-2">
                    @forelse ($mightlike as $m)

                    <div class="col-12 col-md-6 col-xl-3">
                            <a class="shop-item" href="{{ route('event.show', ['slug' => $m->slug]) }}">
                              <div class="item-details">
                                <div>
                                  <h5>{{ $m->title }}</h5>
                                  <p>{{ Str::limit($m->description, 100) }}</p>
                                </div>

                              </div>
                              <img src="{{ Voyager::image( $m->image ) }}" onerror="this.style.display='none'" alt="product">
                            </a>
                          </div>


                    @empty

                    @endforelse




              </div>


            </div>
          </section>





    </main>
    <!-- END Main container -->








    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5917986145e03cd6"></script>


@endsection










