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
                
                @if (Auth::check()) <!--After login show-->
                
                    <!--Logo-->
                    <div class="panel panel-success">
                        
                        <div class="panel-heading">Some Of Our Clients Logo Demo</div>
                        
                        <div class="panel-body">
                            
                            <div class="x_content">
                            
                            <!-- start project list -->
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th>Image</th>
                                        <th>Project Name</th>
                                        <th>Price</th>
                                        <th>Start Date</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach ($logos as $logo)
                                    <tr>
                                        <td>{{$logo->id}}</td>
                                        <td>
                                            <ul class="list-inline">
                                                <li>
                                                    <img src="{{ URL::to('/') }}/public/img/demo/logo/{{ $logo->image }}" class="avatar" alt="Avatar" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            {{$logo->name}}
                                        </td>
                                        <td>
                                            {{$logo->price}} MMK
                                        </td>
                                        <td>
                                            {{date('Y-m-d', strtotime($logo->created_at))}}
                                        </td>
                                        <td>
                                            
                                            <!--<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>-->
                                            
                                            <form action="{{ url('/panel/logo', $logo->id) }}" method="post">
                                                <a href="{{ url('panel/logo/edit', $logo->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs" type="submit" data-toggle="tooltip" title="Trash">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table>
                            <!-- end project list -->
                        </div>
                    </div>
                </div>
                
                    <!--Web-->
                    <div class="panel panel-success">
                        
                        <div class="panel-heading">Some Of Our Clients Web Demo</div>
                        
                        <div class="panel-body">
                            
                            <div class="x_content">
                            
                            <!-- start project list -->
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th>Image</th>
                                        <th>Url</th>
                                        <th>Start Date</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach ($webs as $web)
                                    <tr>
                                        <td>{{$web->id}}</td>
                                        <td>
                                            <ul class="list-inline">
                                                <li>
                                                    <img src="{{ URL::to('/') }}/public/img/demo/web/{{ $web->image }}" class="avatar" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            {{$web->url}}
                                        </td>
                                        <td>
                                            {{date('Y-m-d', strtotime($web->created_at))}}
                                        </td>
                                        <td>
                                            
                                            <!--<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>-->
                                            
                                            <form action="{{ url('/panel/web', $web->id) }}" method="post">
                                                <a href="{{ url('panel/web/edit', $web->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs" type="submit" data-toggle="tooltip" title="Trash">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table>
                            <!-- end project list -->
                        </div>
                    </div>
                </div>
                
                    <!--News-->
                    <div class="panel panel-success">
                        
                        <div class="panel-heading">News</div>
                        
                        <div class="panel-body">
                            
                            <div class="x_content">
                            
                            <!-- start project list -->
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Detail</th>
                                        <th>Start Date</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>
                                            <ul class="list-inline">
                                                <li>
                                                    <img src="{{ URL::to('/') }}/public/img/blog/post/{{ $post->image }}" class="avatar" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            {{$post->title}}
                                        </td>
                                        <td>
                                            {!! Str::words($post->detail, 10,' . . .') !!}
                                        </td>
                                        <td>
                                            {{date('Y-m-d', strtotime($post->created_at))}}
                                        </td>
                                        <td>
                                            
                                            <!--<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>-->
                                            
                                            <form action="{{ url('/panel/blog', $post->id) }}" method="post">
                                                <a href="{{ url('panel/blog/edit', $post->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs" type="submit" data-toggle="tooltip" title="Trash">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table>
                            <!-- end project list -->
                        </div>
                    </div>
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