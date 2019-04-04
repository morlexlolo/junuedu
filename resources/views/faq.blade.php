
@extends('layouts.app')
@section('title')
<title>Junu | Edu {{ 'FAQ' }}</title>

@endsection

@section('content')
@include('layouts.nav')
<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/header-ss.jpg)" data-overlay="8">
  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>Requency ask question</h1>
        <p class="fs-18 opacity-70">Find your answer here !</p>

      </div>
    </div>

  </div>
</header>
<!-- END Header -->

<!-- Main container -->
<main class="main-content">



  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | FAQ - General
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>Faq</small>
        <h2>App</h2>
        <hr>
      </header>


      <div class="accordion" id="accordion-general">
        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-1">What is JunuEdu?</a>
          </h5>

          <div id="collapse-general-1" class="collapse in">
            <div class="card-block">
                    JunuEdu is web application that provide high school students iin south sudan to get access to exams papers and events in the country about the.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-2">How can i use junuedu?</a>
          </h5>

          <div id="collapse-general-2" class="collapse">
            <div class="card-block">
              To use junuedu you need to register first so that you can access unlimited sources.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-3">How can i register?</a>
          </h5>

          <div id="collapse-general-3" class="collapse">
            <div class="card-block">
             To register you need to go to the register page and the provide your credential in the form.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-4">How can i login the system?</a>
          </h5>

          <div id="collapse-general-4" class="collapse">
            <div class="card-block">
              For you to log in the system you need to register first or login with your social media account etc Facebook,Google,Twitter.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-5">How can i contact Junuedu?</a>
          </h5>

          <div id="collapse-general-5" class="collapse">
            <div class="card-block">
              To contact us you can go to the contact page and find our address or you can use the contact form to contact us direct to our email thanks.
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>





  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | FAQ - Past papers
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section bg-grey">
    <div class="container">
      <header class="section-header">
        <small>Faq</small>
        <h2>Past papers</h2>
        <hr>
      </header>


      <div class="accordion" id="accordion-license">
        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-license" href="#collapse-license-1">How can i get access to the past papers?</a>
          </h5>

          <div id="collapse-license-1" class="collapse in">
            <div class="card-block">
              To get an access to the past papers you need to register with us first.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-license" href="#collapse-license-2">How can i download the past papers?</a>
          </h5>

          <div id="collapse-license-2" class="collapse">
            <div class="card-block">
              To download the past paper is easy all you to do is login and search for the paper and download.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-license" href="#collapse-license-3">Is the services offer by junuedu free?</a>
          </h5>

          <div id="collapse-license-3" class="collapse">
            <div class="card-block">
              Yes, the services offer by us is completely free of charge as we eager to help our students.
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>






  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | FAQ - Events
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>Faq</small>
        <h2>Events</h2>
        <hr>
      </header>


      <div class="accordion" id="accordion-payment">
        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-1">What are events?</a>
          </h5>

          <div id="collapse-payment-1" class="collapse in">
            <div class="card-block">
             Events are      thing that happens or takes place, especially one of importance..
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-2">How can recieve an update about the events?</a>
          </h5>

          <div id="collapse-payment-2" class="collapse">
            <div class="card-block">
              To recieve an update about events all you need to do is subscribe to our daily newsletter where we update our users with weekly events.
            </div>
          </div>
        </div>
    </div>
  </section>







</main>
<!-- END Main container -->






@endsection










