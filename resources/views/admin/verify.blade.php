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
                            
                            <div class="panel-heading">{{ __('Verify Your Email Address') }}</div>

                            <div class="panel-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
            
                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                            </div>
                            
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</div>

@endsection
