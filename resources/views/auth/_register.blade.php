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
    <div class="row justify-content-center register-form">
        <div class="col-md-8">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name') }}" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        
                </div>

                <div class="form-group">
                    
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                        
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
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
