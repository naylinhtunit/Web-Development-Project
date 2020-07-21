@extends('admin.layouts.client_head')

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
                
                @if (Auth::check()) <!--After login show-->
                        
                    <div class="x_title">
                        <h2>Clients data <small>DB</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                        <div class="clearfix"></div>
                    </div>
                            
                    <div class="x_content">
                        <!--<div class="row">-->
                            <!--<div class="col-sm-12">-->
                                <!--<div class="card-box table-responsive">-->
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Package</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        
                                        
                                        <tbody>
                                            @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->tel }}</td>
                                                <td>{{ $data->contacts_categorys_id }}</td>
                                                <td>{{ $data->message }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    </div>
                
                @else <!--Before Login-->
                
                    <div class="container">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Login Form</div>
                                <div class="panel-body">
                                    
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                        
                                        <div class="form-group">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus placeholder="{{ __('E-Mail Address') }}" required>
                        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                        
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" data-toggle="password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
                                        
                                        <div class="form-group">
                                            <div class="container">
                                                    
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Register Form</div>
                                <div class="panel-body">
                                    
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                        
                                        <div class="form-group">
                        
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name') }}" autofocus>
                        
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                        
                                        </div>
                        
                                        <div class="form-group">
                        
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">
                        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                        
                                        </div>
                        
                                        <div class="form-group">
                        
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" data-toggle="password" required>
                        
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                
                                        </div>
                        
                                        <div class="form-group">
                                            
                                            <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" data-toggle="password" required>
                                                
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
                        
                    </div>
                    
                @endif
                
            </div>
        </div>
    </div>
    
    <!--project details end-->
</div>
<!-- /page content -->

@endsection