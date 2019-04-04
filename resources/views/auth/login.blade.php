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
            <h5 class="text-uppercase text-center">Login</h5>
            <br><br>

            <form method="POST" action="{{ route('login') }}">
                    @csrf
              <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus  placeholder="Enter Your Email">
                    @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('email') }}</strong>
                        </span>
                     @endif
              </div>

              <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  placeholder="Enter Your Password!">
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                     @endif
              </div>

              <div class="form-group flexbox py-10">
                <label class="custom-control custom-checkbox">
                        <input class="custom-control-indicator" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <span class="custom-control-description" for="remember">Remember me</span>
                </label>
                @if (Route::has('password.request'))


                <a class="text-muted hover-primary fs-13" href="{{ route('password.request') }}">Forgot password?</a>
                @endif
              </div>

              <div class="form-group">
                <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
              </div>
            </form>

            <div class="divider">Or Sign In With</div>
            <div class="text-center">
              <a class="btn btn-circular btn-sm btn-facebook mr-4" href="{{ url('/login/facebook') }}"><i class="fa fa-facebook"></i></a>
              <a class="btn btn-circular btn-sm btn-google mr-4" href="{{ url('/login/google') }}"><i class="fa fa-google"></i></a>
              <a class="btn btn-circular btn-sm btn-twitter" href="{{ url('/login/twitter') }}"><i class="fa fa-twitter"></i></a>
            </div>

            <p class="text-center text-muted fs-13 mt-20">Dont have an account? <a href="{{ route('register') }}"><div class="form-group">
                    <button class="btn btn-bold btn-block btn-success" type="submit">REgister Here !</button>
                  </div></a></p>
                  <div class="text-center">
                        <a href="/">Go back home</a>
                    </div>
          </div>



          <!-- Scripts -->
          <script src="{{ asset('assets/js/core.min.js') }}"></script>
          <script src="{{ asset('assets/js/thesaas.min.js') }}"></script>
          <script src="{{ asset('assets/js/script.js') }}"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
          <script>

              @if (Session::has('subscribed'))
              toastr.success('{{ Session::get('subscribed') }}')

              @endif

              @if(Session::has('success'))
                  toastr.success('{{ Session::get('success') }}')
              @endif

          </script>
  </body>

</html>


