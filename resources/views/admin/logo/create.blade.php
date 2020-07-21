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
                    
                    <h2>Create Projects</h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="pull-right">
                        <a href="{{ url('/panel/logo') }}" class="btn btn-success"> Back </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                
                <form method="post" action="{{ url('/panel/logo') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="name" type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                        <input name="price" type="text" class="form-control" placeholder="Price">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-cloud-download" aria-hidden="true"></i></span>
                        <input name="image" type="file" id="input-file-now" data-allowed-file-extensions="png jpg jpeg svg" class="dropify" />    
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