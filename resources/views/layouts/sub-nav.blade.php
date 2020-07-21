<div id="app">
    <header id="header" class="sub-header">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="{{ url('/') }}" class="scrollto"><img src="{{asset('public/img/logo/forw3b_logo.png')}}" /></a>
            </div>
            <nav id="nav-menu-container">
                <!-- Right Side Of Navbar -->
                <ul class="nav-menu">
                    <!-- Authentication Links -->
                    <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                    <li class="menu-has-children"><a href="#more-features" class="sf-with-ul">Our Services</a>
                        <ul style="display: none;">
                            <li><a href="{{ url('/our-services/web') }}">Websites</a></li>
                            <li><a href="{{ url('/our-services/logo') }}">Logos</a></li>
                            <li><a href="{{ url('/our-services/design') }}">Designs</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="#" class="sf-with-ul">Blog</a>
                        <ul style="display: none;">
                            <li><a href="{{ url('/blog/news') }}">News</a></li>
                            <li><a href="{{ url('/blog/themes') }}">Themes</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    <li>{{ Helper::transchange() }}</li>
                </ul>
            </nav>
        </div>
    </header>
</div>