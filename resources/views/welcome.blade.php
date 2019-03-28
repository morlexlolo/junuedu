@extends('layouts.app')
@section('title')
<title>Junu | Edu</title>

@endsection

@section('content')
@include('layouts.nav')
@include('layouts.header')
<!-- Main container -->
<main class="main-content">
{{--  conten tsection one  --}}
<section class="section bg-gray">
        <div class="container">
          <h2 class="text-center">Latest Past Papers</h2>
          <br><br>
          <div class="row gap-y" id="section-intro">
                    @forelse ($past_papers as $p)
                    <?php $file = (json_decode($p->file))[0]->download_link; ?>
                        <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-bordered card-hover-shadow">
                                <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$p->Nom}}
                                        <img class="card-img-top" title="{{ $p->subject->name }}" src="{{  asset('/img/pdf.png') }}"alt="Card image cap">
                                </a>
                            <div class="card-block">

                            <p class="card-text">{{ $p->subject->name }}</p>
                            <a class="fw-600 fs-12" href="#">{{ $p->year }} <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                            </div>
                        </div>
                        </div>

                        @empty

                        @endforelse
          </div>

          <br><br>
          <p class="text-center"><a href="{{ route('paper.index') }}">Browse all the past papers</a></p>


        </div>
      </section>
        <section class="section section-inverse">


                <div class="container">
                  <div class="text-center mb-70">
                    <h2>Upcoming events</h2
                    <p>More than 80 events are waiting for you</p>
                  </div>


                  <div class="row gap-y">
                      @forelse ($events as $e)

                      @empty

                      @endforelse

                    <div class="col-12 col-lg-4">
                      <div class="card card-inverse">
                        <div class="card-block">
                          <h5 class="card-title">How to add new block to page builder</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                          <a class="fw-600 fs-12" href="#">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                        </div>
                      </div>
                    </div>

                  </div>


                  <div class="text-center mt-50">
                    <a class="btn btn-outline btn-white no-shadow" href="#">All articles</a>
                  </div>


                </div>
              </section>



</main>
<!-- END Main container -->





@endsection
