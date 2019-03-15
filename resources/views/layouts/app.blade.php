<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>{{ 'Junu|Edu' }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/thesaas.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">



    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
  </head>

  <body>


  @include('layouts.nav')



@yield('content')




@include('layouts.footer')
  </body>
</html>
