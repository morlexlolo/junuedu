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

  <body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url(assets/img/test2.jpg);">



    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
            <h5 class="text-uppercase text-center">Register</h5>
            <br><br>

            <form class="form-type-material" method="POST" action="{{ route('register') }}">
                    @csrf
              <div class="form-group">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Your Full Name">
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter Your Email Address">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
              </div>

              <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Your Password!">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              </div>

              <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Password (confirm)">
              </div>

              {{-- <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">I agree to all <a class="text-primary" href="#">terms</a></span>
                </label>
              </div> --}}

              <br>
              <button class="btn btn-bold btn-block btn-success" type="submit">Register</button>
            </form>
            <p class="text-center text-muted fs-13 mt-20">Have an account? <a href="{{ route('login') }}"><div class="form-group">
                    <button class="btn btn-bold btn-block btn-primary" type="submit">Login Here !</button>
                  </div></a></p>


                  <div class="text-center">
                      <a style="" href="/">Go back home</a>
                  </div>
          </div>


</div>




    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>

