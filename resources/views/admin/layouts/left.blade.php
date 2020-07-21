<body class="nav-md">
    <div class="container body">
        <div class="main_container">
          
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ url('/') }}" class="site_title">
                            <img src="{{asset('public/img/logo/forw3b_logo.png')}}" />
                            <span>CPanel</span>
                        </a>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    @if (Auth::check()) <!--After login show-->
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <!--<ul class="nav side-menu">-->
                                <!--    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>-->
                                <!--        <ul class="nav child_menu">-->
                                <!--            <li><a href="{{ url('/panel') }}">Dashboard</a></li>-->
                                <!--            <li><a href="{{ url('/panel/logo') }}">Logos</a></li>-->
                                <!--            <li><a href="{{ url('/panel/web') }}">Websites</a></li>-->
                                <!--            <li><a href="{{ url('/panel/blog') }}">Courses</a></li>-->
                                <!--        </ul>-->
                                <!--    </li>-->
                                <!--</ul>-->
                                <ul class="nav side-menu">
                                    <li>
                                        <a href="{{ url('/panel') }}">
                                            <i class="fa fa-home"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/panel/logo') }}">
                                            <i class="fa fa-leaf"></i> Logos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/panel/web') }}">
                                            <i class="fa fa-leaf"></i> Websites
                                        </a>
                                    </li>
                                    <li class="tools">
                                        <a href="{{ url('#') }}">
                                            <i class="fa fa-sitemap"></i> Blog <span class="fa fa-plus"></span><span class="fa fa-minus"></span>
                                        </a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{ url('/panel/post') }}">News</a></li>
                                            <li><a href="{{ url('/panel/demo') }}">WP Themes</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/panel/languages') }}">
                                            <i class="fa fa-language"></i> Translator
                                        </a>
                                    </li>
                                    <li>
                                        <a href={{ url('/panel/client') }}>
                                            <i class="fa fa-table"></i> Client Table
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->
                    @else
                    
                    @endif
                </div>
            </div>