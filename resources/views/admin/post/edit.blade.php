@extends('admin.layouts.header')

@section('content')

@include('admin.layouts.left')
@include('admin.layouts.nav')
            
<!-- page content -->
<div class="right_col" role="main">
    
    <!--project details-->
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    
                    <h2>Edit {{$posts->title}} Projects</h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="pull-right">
                        <a href="{{ url('/panel/post') }}" class="btn btn-success"> Back </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                
                <form method="post" action="{{ url('panel/post', $posts->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="title" type="text" class="form-control" value="{{$posts->title}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                        <textarea id="editor" name="detail" class="form-control" rows="5" value="{!! $posts->detail !!}">{!! $posts->detail !!}</textarea>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-cloud-download" aria-hidden="true"></i></span>
                        <input name="image" type="file" id="input-file-now" data-default-file="{{ URL::to('/') . '/public/img/blog/post/' . $posts->image }}" data-allowed-file-extensions="png jpg jpeg svg" class="dropify" />    
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
                
                </div>
            </div>
        </div>
    </div>
    
    <!--project details end-->
</div>
<!-- /page content -->
@endsection