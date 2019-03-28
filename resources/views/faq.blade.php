
@extends('layouts.app')
@section('title')
<title>Junu | Edu {{ 'FAQ' }}</title>

@endsection

@section('content')
@include('layouts.nav')
<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/bg-laptop.jpg)" data-overlay="8">
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
        <h2>Usage</h2>
        <hr>
      </header>


      <div class="accordion" id="accordion-general">
        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-1">What is JunuEdu?</a>
          </h5>

          <div id="collapse-general-1" class="collapse in">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-2">Where can I learn more about how to use TheSaaS?</a>
          </h5>

          <div id="collapse-general-2" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-3">Where can I get more details about your security practices?</a>
          </h5>

          <div id="collapse-general-3" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-4">Where can I get more details about your security practices?</a>
          </h5>

          <div id="collapse-general-4" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-general" href="#collapse-general-5">What is TheSaaS’s approach to data privacy?</a>
          </h5>

          <div id="collapse-general-5" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>





  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | FAQ - License
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section bg-grey">
    <div class="container">
      <header class="section-header">
        <small>Faq</small>
        <h2>License</h2>
        <hr>
      </header>


      <div class="accordion" id="accordion-license">
        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-license" href="#collapse-license-1">What is reqular license?</a>
          </h5>

          <div id="collapse-license-1" class="collapse in">
            <div class="card-block">
              Regular license can be used for end products that do not charge users for access or service(access is free and there will be no monthly subscription fee). Single regular license can be used for single end product and end product can be used by you or your client. If you want to sell end product to multiple clients then you will need to purchase separate license for each client. The same rule applies if you want to use the same end product on multiple domains(unique setup).
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-license" href="#collapse-license-2">What is extended license?</a>
          </h5>

          <div id="collapse-license-2" class="collapse">
            <div class="card-block">
              Extended license can be used for end products(web service or SAAS) that charges users for access or service(e.g: monthly subscription fee). Single extended license can be used for single end product and end product can be used by you or your client. If you want to sell end product to multiple clients then you will need to purchase separate extended license for each client. The same rule applies if you want to use the same end product on multiple domains(unique setup).
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-license" href="#collapse-license-3">Where can I find your Terms of Service (TOS)?</a>
          </h5>

          <div id="collapse-license-3" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>






  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | FAQ - Payment
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>Faq</small>
        <h2>Payment</h2>
        <hr>
      </header>


      <div class="accordion" id="accordion-payment">
        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-1">Can I use TheSaaS for free?</a>
          </h5>

          <div id="collapse-payment-1" class="collapse in">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-2">What payment services do you support?</a>
          </h5>

          <div id="collapse-payment-2" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-3">Can I cancel my subscription?</a>
          </h5>

          <div id="collapse-payment-3" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-4">Is this a secure site for purchases?</a>
          </h5>

          <div id="collapse-payment-4" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-5">Can I update my card details?</a>
          </h5>

          <div id="collapse-payment-5" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-6">What if I want to change plans?</a>
          </h5>

          <div id="collapse-payment-6" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>


        <div class="card">
          <h5 class="card-title">
            <a data-toggle="collapse" data-parent="#accordion-payment" href="#collapse-payment-7">How long are your contracts?</a>
          </h5>

          <div id="collapse-payment-7" class="collapse">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>







</main>
<!-- END Main container -->






@endsection










