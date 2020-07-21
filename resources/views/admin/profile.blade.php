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
            <div class="count">1</div>
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
                <div class="x_title">
                    
                    <h2>Edit {{$user->name}} Profile</h2>
                    
                    <div class="pull-right">
                        <a href="{{ url('/admin') }}" class="btn btn-success"> Back </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                
                <div class="x_content">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- edit profile --}}
                    <div class="row">
                        @if ($message = Session::get('success'))
            
                            <div class="alert alert-success alert-block">
            
                                <button type="button" class="close" data-dismiss="alert">×</button>
            
                                <strong>{{ $message }}</strong>
            
                            </div>
            
                        @endif
            
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    
                    <!--<div class="row tile_count">-->
                    <!--    <div class="col-md-5">-->
                    <!--    </div>-->
                    <!--    <div class="col-md-2">-->
                    <!--        <div class="text-center">-->
                    <!--            <img class="img-circle profile_img" src="/public/uploads/avatars/{{ $user->avatar }}" />-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-5">-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <form action="/admin/profile" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-cloud-download" aria-hidden="true"></i></span>
                                    <input name="avatar" type="file" data-default-file="{{ URL::to('/') . '/public/uploads/avatars/' . $user->avatar }}" data-allowed-file-extensions="png jpg jpeg svg" aria-describedby="fileHelp" id="input-file-now avatarFile" class="dropify" />    
                                </div>
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" value="{{ $user->name }}">
                                </div>
        
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
        
                                <div class="form-group">
                                    <input type="password" class="form-control" value="{{ $user->password }}" name="password" disabled>
                                </div>
        
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <!--edit profile-->
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--project details end-->
</div>
<!-- /page content -->
            
@endsection