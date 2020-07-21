@extends('admin.layouts.header')

@section('content')

@include('admin.layouts.left')
@include('admin.layouts.nav')

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Projects</span>
            <div class="count">3</div>
        </div>
        
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-dollar"></i> Total Revenue</span>
            <div class="count"> 0 MMK</div>
        </div>
        
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-line-chart"></i> Total Ads</span>
            <div class="count">0</div>
        </div>
    </div>
    <!-- /top tiles -->
    
    <!--project details-->
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                
                <div class="container">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Reset Password Form</div>
                            <div class="panel-body">
            
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                        
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                        
                                    <div class="form-group row">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
                        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                        
                                    <div class="form-group row mb-0">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </form>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</div>

@endsection
