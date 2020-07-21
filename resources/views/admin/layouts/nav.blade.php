<!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        @guest
                        <li>
                            <a href="{{ url('/admin') }}">{{ __('Login') }}</a>
                        </li>
                         @else
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="/public/uploads/avatars/{{ Auth::user()->avatar }}" alt="">{{ Auth::user()->name }}
                            <span class=" fa fa-angle-down"></span>
                        </a>
                         @endguest
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="{{ url('/admin/profile') }}"> <i class="fa fa-user pull-right"></i> Profile</a></li>
                            <li>
                                <a href="{{ url('/admin') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               <i class="fa fa-sign-out pull-right"></i> {{ __('Logout') }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<!-- /top navigation -->