
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS - Content blocks</title>

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body class="thesaas-sections-split">
@include('layouts.nav')



    <!-- Header -->
    <header class="header header-inverse bg-fixed" style="background-image: url(assets/img/bg-laptop.jpg)" data-overlay="8">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Content blocks</h1>
            <p class="fs-18 opacity-70">Develop your pages by copy and pasting ready blocks</p>

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
      <h6 class="section-info" id="content-2"><a href="#content-2">Content 2</a></h6>


      <section class="section">
        <div class="container">

            @foreach ($events as $e)


          <div class="row gap-y align-items-center">
            <div class="col-12 col-md-6">
              <img class="rounded" src="{{ Voyager::image( $e->image ) }}" alt="..." data-aos="fade-in">
            </div>


            <div class="col-12 col-md-6">
              <h3>{{ $e->title }}</h3>
              <br>
             <p>{{ Str::limit($e->description, 70) }}</p>
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
