
@extends('layouts.app')
@section('title')
<title>Junu | Edu {{ 'Contact-us' }}</title>

@endsection

@section('content')
@include('layouts.nav')
<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/header-ss.jpg)" data-overlay="8">
  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>About us</h1>
        <p class="fs-18 opacity-70">Find more about us !</p>

      </div>
    </div>

  </div>
</header>
<!-- END Header -->


<!-- Main container -->
    <main class="main-content">




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Mission
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section py-150">
        <div class="container">

          <div class="row">

            <div class="col-12 col-lg-6 pl-50 pr-80">
              <h2>Our Mission</h2>
              <p class="lead"></p>

              <br>

              <p>
                <i class="ti-check text-success mr-8"></i>
                <span class="fs-14">Provide high school student with the all exams past papers</span>
              </p>

              <p>
                <i class="ti-check text-success mr-8"></i>
                <span class="fs-14">Provide students with severals events in the country</span>
              </p>

              <p>
                <i class="ti-check text-success mr-8"></i>
                <span class="fs-14">To make student life easy </span>
              </p>

              <p>
                <i class="ti-check text-success mr-8"></i>
                <span class="fs-14">To introduce technology to our schools</span>
              </p>
            </div>


            <div class="col-lg-6 hidden-md-down align-self-center">
              <img class="shadow-3" src="assets/img/brand.png" alt="..." data-aos="fade-left" data-aos-duration="1500">
            </div>

          </div>


        </div>
      </section>




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Team
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section">
        <div class="container">
          <header class="section-header">
            <small>Team</small>
            <h2>Who We Are</h2>
            <hr>
            <p class="lead">Meet the team working to make student life  simpler for you.</p>
          </header>


          <div class="row gap-y">
            <div class="col-12 col-md-4 team-2">
              <a href="#">
                <img src="assets/img/avatar/1.jpg" alt="...">
              </a>
              <h5>Stephen Victor</h5>
              <small>Co-Founder & CEO</small>
              <p>Stephen is the founder and developer in the junuedu.</p>
              <br>
              <div class="social social-boxed social-rounded social-gray">
                <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>


            <div class="col-12 col-md-4 team-2">
              <a href="#">
                <img src="assets/img/avatar/2.jpg" alt="...">
              </a>
              <h5>Doreen</h5>
              <small>Co-Founder & CTO</small>
              <p>Doreen is the Co-Founder and an auditor in junuedu.</p>
              <br>
              <div class="social social-boxed social-rounded social-gray">
                <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>


            <div class="col-12 col-md-4 team-2">
              <a href="#">
                <img src="assets/img/avatar/3.jpg" alt="...">
              </a>
              <h5>Maxime</h5>
              <small>Director</small>
              <p>Maxime is the director and a market advisor in junuedu.</p>
              <br>
              <div class="social social-boxed social-rounded social-gray">
                <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>


        </div>
      </section>







    </main>
    <!-- END Main container -->


@endsection










