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
                
                <div class="panel panel-info">
                    <div class="panel-heading">
                        
                        <span>Create Projects</span>
                        
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="pull-right">
                            <a href="{{ url('/panel/web') }}" class="btn btn-success"> Back </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="panel-body">
                        
                        <div class="x_content">
                            <form method="post" action="{{ url('/panel/web') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                    <input name="url" type="text" class="form-control" placeholder="Website Url">
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
        </div>
    </div>
    
    <!--project details end-->
</div>
<!-- /page content -->
@endsection