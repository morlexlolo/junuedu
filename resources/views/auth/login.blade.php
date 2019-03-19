@extends('layouts.app')

@section('content')
<div class="container">
    {{--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  --}}

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
              <a class="btn btn-circular btn-sm btn-facebook mr-4" href="#"><i class="fa fa-facebook"></i></a>
              <a class="btn btn-circular btn-sm btn-google mr-4" href="#"><i class="fa fa-google"></i></a>
              <a class="btn btn-circular btn-sm btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
            </div>

            <hr class="w-30">

            <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
          </div>
</div>
@endsection
