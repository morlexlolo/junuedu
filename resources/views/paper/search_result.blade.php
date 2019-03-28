
@extends('layouts.app')
@section('title')
<title>Junu | Edu {{"search-result" }}</title>
@endsection

@section('content')
@include('layouts.nav')
<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/bg-laptop.jpg)" data-overlay="8">
  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1> Search {{ request()->input('query') }}: {{ $past_papers->count() }}</h1>
        <p class="fs-18 opacity-70">Find your paper here !</p>

      </div>
    </div>

  </div>
</header>
<!-- END Header -->


<!-- Main container -->
<main class="main-content bg-gray">
  <div class="container">
    <div class="row">


      <div class="col-md-8 col-xl-9 py-90">
        <div class="row gap-y">
                @forelse ($past_papers as $p)
                <?php $file = (json_decode($p->file))[0]->download_link; ?>
                <div class="col-md-6">
                        <div class="card card-hover-shadow">
                    <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$p->Nom}}
                      <img class="card-img-top" title="{{ $p->subject->name }}" src="{{  asset('/img/pdf.png') }}"alt="Card image cap">
                    </a>
                        <div class="card-block">
                            <h4 class="card-title">{{ $p->subject->name }}</h4>
                            <a class="fw-600 fs-12" href="blog-single.html">{{ $p->year }} <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                        </div>
                        </div>
                    </div>

                @empty

                <h4 class="card-title" style="text-align:left;">Oops Sorry ! There is no past paper at the moment</h4>

                @endforelse
        </div>


        <nav>
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                      <hr>
                    {{ $past_papers->appends(request()->input())->links() }}
                  </li>
                </ul>
             </nav>
      </div>



      <div class="col-md-4 col-xl-3 hidden-sm-down">
        <div class="sidebar">

          <h6 class="sidebar-title">Search</h6>
          <form class="input-group" action="{{ route('paper.search') }}" method="GET">
            <input type="text" name= "query" class="form-control" placeholder="Search">
            <span class="input-group-addon"><i class="ti-search"></i></span>
          </form>

          <hr>

          <hr>

          <h6 class="sidebar-title">Sort by Year</h6>
          <div class="row link-color-default fs-14 lh-24">

              <div class="col-6"><a href="{{ route('paper.index',['subject'=> request()->subject,'sort'=>'new']) }}">Old</a></div>
              <div class="col-6"><a href="{{ route('paper.index',['subject'=> request()->subject,'sort'=>'old']) }}">New</a></div>



          </div>
          <hr>

          <h6 class="sidebar-title">Subjects</h6>
          <div class="row link-color-default fs-14 lh-24">
              @forelse ($subjects as $s)
              <div class="col-6"><a href="{{ route('paper.index',['subject'=>$s->slug]) }}">{{ $s->name }}</a></div>
              @empty
              <div class="col-6"><a href="{{ route('paper.index',['subject'=>$s->slug]) }}">{{ 'No Subject at the moment!' }}</a></div>
              @endforelse

          </div>

          <hr>

          <h6 class="sidebar-title">About</h6>
          <p class="fs-12">To adverstise here call us please thanks !</p>


        </div>
      </div>

    </div>
  </div>
</main>
<!-- END Main container -->

@endsection










