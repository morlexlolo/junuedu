
@extends('layouts.app')
@section('title')


@endsection

@section('content')
@include('layouts.nav')

<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/header-ss.jpg)" data-overlay="8">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">

          <h1>Hello {{ Auth()->user()->name }} !!!!</h1>
          <p class="fs-18 opacity-70">Welcome to your profile !</p>

        </div>
      </div>

    </div>
  </header>
<!-- END Header -->




<!-- Main container -->
<main class="main-content">




  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Description
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section bg-gray">
    <div class="container">



  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Apply form
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section" id="section-apply">
    <div class="container">
      <header class="section-header">
        <small>Welcome to your</small>
        <h2>My Profile</h2>
        <hr>

      </header>


      <div class="row">
            <div class="container">
                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
        <div class="col-12 col-md-8 offset-md-2">


          <form action="{{ route('users.update') }}" method="POST">

            @method('patch')
            @csrf



            <div class="form-group">
                <label for="name">Full Name :</label>
                <input class="form-control" name="name" value="{{ old('name',$user->name) }}" type="text" placeholder="Full Name">
            </div>

            <div class="form-group">
                    <label for="name">Email :</label>
                     <input class="form-control" name="email" value="{{ old('name',$user->email) }}" type="email" placeholder="Enter Your Email">

            </div>

            <div class="form-group">
                <label for="name">Password :</label>
                <input class="form-control" name="password" type="password" placeholder="Password">
              <b> <small>Leave password blank to keep the current one!</small></b>
            </div>

            <div class="form-group">
                <label for="name">Comfirm Password :</label>
              <input class="form-control" name="password_confirmation" type="password"  placeholder="Confirm (password)">
            </div>

            {{-- <div class="form-group input-group file-group">
                    <input type="file" class="form-control file-value" placeholder="Choose file..." readonly>
                    <input type="file" multiple>
                    <span class="input-group-btn">
                    <button class="btn btn-white file-browser" type="button"><i class="fa fa-upload"></i></button>
                    </span>
            </div> --}}
                    <button class="btn btn-success btn-block" type="submit">Update</button>
          </form>

          <hr>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
          <div class="form-group">
                   <a href="{{ route('logout') }}"> <button class="btn btn-danger btn-block"> Logout</button></a>
          </div>
        </form>

        </div>
      </div>


    </div>
  </section>

</main>
<!-- END Main container -->


@endsection





