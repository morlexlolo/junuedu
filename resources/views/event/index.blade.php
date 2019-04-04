
<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="keywords" content="">

                @yield('title','')

                <!-- Styles -->
                <link rel="stylesheet" href="{{ asset('assets/css/core.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/thesaas.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
                    {{--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">  --}}



                <!-- Favicons -->
                <link rel="apple-touch-icon" href="{{ asset('assets/img/brand.png') }}">
                <link rel="icon" href="{{ asset('assets/img/brand.png') }}">
              </head>

  <body class="thesaas-sections-split">
@include('layouts.nav')



    <!-- Header -->
    <header class="header header-inverse bg-fixed" style="background-image: url(assets/img/header-ss.jpg)" data-overlay="8">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>More than {{ $eventss->count() }} waiting for you!</h1>
            <p class="fs-18 opacity-70">Get update with the events around the country in education</p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->




    <!-- Main container -->
    <main class="main-content">

      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Content 2
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <h6 class="section-info" id="content-2"><a href="#content-2">Events</a></h6>


      <section class="section">
        <div class="container">

            @foreach ($events as $e)


          <div class="row gap-y align-items-center">
            <div class="col-12 col-md-6">
              <img class="rounded" src="{{ Voyager::image( $e->image ) }}" alt="..." data-aos="fade-in" onerror="this.style.display='none'"/>
            </div>


            <div class="col-12 col-md-6">
              <h3>{{ $e->title }}</h3>
              <br>
             <p>{{ Str::limit($e->description, 140) }}</p>
             <div class="list">
                <p><i class="fas fa-clock"></i> Starts : {{\Carbon\Carbon::createFromFormat('H:i:s',$e->starting)->format('h:i:a')}}</p>
                <p><i class="fas fa-clock"></i> Ends : {{\Carbon\Carbon::createFromFormat('H:i:s',$e->ending)->format('h:i:a')}}</p>

             </div>
             <div class="list-item">
                    <p><i class="fas fa-map-marker-alt"></i> Venue : {{ $e->location }}</p>
                    <p><i class="fas fa-calendar-alt"></i> Date : {{ \Carbon\Carbon::parse($e->date)->format('d/m/Y')}}</p>

             </div>
              <a class="btn btn-outline btn-primary no-shadow" href="{{ route('event.show', ['slug' => $e->slug]) }}">Read More <i class="ti-arrow-right fs-9 ml-4"></i></a>
            </div>

          </div>
          <br>
          <hr>
          @endforeach
          <nav>
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                      <hr>
                    {{ $events->appends(request()->input())->links() }}
                  </li>
                </ul>
             </nav>
        </div>
      </section>



    </main>
    <!-- END Main container -->


@include('layouts.footer')



    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>
