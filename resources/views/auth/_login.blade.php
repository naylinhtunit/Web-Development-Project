@extends('layouts.head')

@section('content')

<div class="head-fixed">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="{{ url('/') }}">{{ config('app.name', 'Forw3b') }}</a></h1>
        </div>

    </div>
</div>

<div class="container">
    <div class="row justify-content-center login-form">
        <div class="col-md-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    {{ __('Don\'t have an account?') }}
                    @if (Route::has('register'))
                        <a class="btn-link" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                    @endif
                </div>

                <div class="form-group">
                    <div class="container">
                        <div class="row">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            
                            <!--Fb Login-->
                            <!--<div class="col-md-4">-->
                                
                            <!--    <div id="fb-root"></div>-->
                            <!--    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=516479155845011&autoLogAppEvents=1"></script>-->
                            <!--    <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false"></div>-->
                                    
                            <!--</div>-->
                            <!--End Fb Login-->
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>

                        <div class="pull-right">
                            @if (Route::has('password.request'))
                                <a class="btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-7 col-md-8">
            <div class="contact-about">
              <h3><img class="main-logo" src="{{asset('public/img/logo/forw3b_fb_logo.png')}}" alt="" /></h3>
              
            <div class="info">
                <div>
                    <i class="ion-ios-location-outline"></i>
                    <p>Myitta 2 Street, Thuwanna Township, Yangon</p>
                </div>

                <div>
                    <i class="ion-ios-email-outline"></i>
                    <p>info@forw3b.com</p>
                </div>

                <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+95 09-766033123</p>
                </div>
            </div>
            
              <div class="social-links">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/forw3b/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-google-plus"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

@endsection
