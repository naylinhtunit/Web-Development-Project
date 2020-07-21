@extends('admin.layouts.translate_header')

@section('content')
@include('admin.layouts.left')
@include('admin.layouts.nav')

<!-- page content -->
<div class="right_col" role="main">
    
    <!--project details-->
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                
                @if (Auth::check()) <!--After login show-->
                
                <!--Website-->
                <div class="panel panel-success">
                    <div class="panel-heading">Forw3b Translator</div>
                    <div class="panel-body">
                
                        <div class="x_title">
                            <div class="col-lg-10 col-md-10">
                                <form method="POST" action="{{ route('translations.create') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="text" name="key" class="form-control" placeholder="Key">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" name="value" class="form-control" placeholder="Value">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-success pull-right">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="col-lg-2 col-md-2">
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            
                        </div>
                            
                        <div class="x_content">
                        
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Key</th>
                                    @if($languages->count() > 0)
                                        @foreach($languages as $language)
                                            <th>{{ $language->name }}({{ $language->code }})</th>
                                        @endforeach
                                    @endif
                                    <th width="80px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if($columnsCount > 0)
                                        @foreach($columns[0] as $columnKey => $columnValue)
                                            <tr>
                                                <td><a href="#" class="translate-key" data-title="Enter Key" data-type="text" data-pk="{{ $columnKey }}" data-url="{{ route('translation.update.json.key') }}">{{ $columnKey }}</a></td>
                                                @for($i=1; $i<=$columnsCount; ++$i)
                                                <td><a href="#" data-title="Enter Translate" class="translate" data-code="{{ $columns[$i]['lang'] }}" data-type="textarea" data-pk="{{ $columnKey }}" data-url="{{ route('translation.update.json') }}">{{ isset($columns[$i]['data'][$columnKey]) ? $columns[$i]['data'][$columnKey] : '' }}</a></td>
                                                @endfor
                                                <td><button data-action="{{ route('translations.destroy', $columnKey) }}" class="btn btn-danger btn-xs remove-key">Delete</button></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <!-- end translator project list -->
                            
                        </div>
                    </div>
                </div>
                
                @else <!--Before Login-->
                
                    <div class="container">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">Login Form</div>
                                <div class="panel-body">
                                    
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
                                            <div class="container">
                                                    
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
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
                        
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">Register Form</div>
                                <div class="panel-body">
                                    
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
                        
                    </div>
                    
                @endif
                
            </div>
        </div>
    </div>
    
    <!--project details end-->
</div>
<!-- /page content -->
@endsection