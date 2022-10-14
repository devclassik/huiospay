<div class="mdk-header-layout js-mdk-header-layout">
    <div id="header" class="mdk-header bg-dark js-mdk-header mb-0" data-effects="waterfall blend-background" data-fixed data-condenses>
        <div class="mdk-header__content">
            <div data-primary class="navbar navbar-expand-sm pr-0 pr-md-16pt navbar-light bg-white mdk-header--fixed mdk-header--shadow" id="default-navbar">
                <div class="container">
                    <!-- Navbar Brand -->
                    <a href="{{route('frontend')}}" class="navbar-brand">
                        <img class="navbar-brand-icon" src="{{asset('medias/images/'.$settings->icon)}}" width="30" alt="{{$settings->app}}">
                        <span class="d-none d-md-block">{{$settings->app}}</span>
                    </a>
                    <!-- Main Navigation -->
                    @guest
                    <ul class="nav navbar-nav ml-auto d-none d-sm-flex">
                        <li class="nav-item">
                            <a href="{{route('frontend')}}" class="nav-link">Home</a>
                        </li>
                    </ul>
                    @endguest

                    @auth
                    <nav class="nav navbar-nav ml-auto flex-nowrap">
                        <div class="nav-item dropdown d-none d-sm-flex ml-16pt">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <img width="32" height="32" class="rounded-circle" src="{{asset($user->image->path.$user->image->name)}}" alt="{{$user->username}}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header"><strong>Student</strong></div>
                                <a class="dropdown-item" href="{{route('dashboard.home')}}">Dashboard</a>
                                <a class="dropdown-item" href="{{route('dashboard.pages',['page'=>'courses'])}}">Courses</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item" href="{{route('dashboard.home')}}/profile">Edit Account</a>
                                <a class="dropdown-item" href="{{ route('dashboard.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="menuitem">Logout</a>
                                <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </nav>
                    @endauth
                    <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar" data-target="#default-drawer">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="mdk-header-layout__content page-content pt-64pt">
        <div class="bg-gradient-primary border-bottom-white py-32pt">
            <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                <img src="{{asset('medias/images/white.svg')}}" class="mr-md-32pt mb-32pt mb-md-0" alt="student" width="104">
                <div class="flex mb-32pt mb-md-0">
                    <h2 class="text-white mb-0">{{Auth::check()?$user->firstname.' '.$user->lastname:$page->title}}</h2>
                    @guest
                    <p class="lead measure-lead text-white-50">{{$page->subtitle}}</p>
                    @endguest
                    @auth
                    <p class="lead text-white-50 d-flex align-items-center">Student <span class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> Matrict: {{$user->matric}}</span></p>
                    {{-- <p class="lead text-white-50 d-flex align-items-center">Student <span class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> 2,300 IQ</span></p> --}}
                    
                    @endauth
                </div>
                @auth
                <a href="#" class="btn btn-outline-white slidepanel"><i class="fas fa-eye mr-2"></i> Check Result</a>
                @endauth
                @guest
                <a href="{{ route('frontend')}}" class="btn btn-outline-white flex-column">
                    Just Check Result?
                    <span class="btn__secondary-text">Return back home</span>
                </a>
                @endguest
            </div>
        </div>
        
        @auth
        <div class="navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 ">
            <div class="container page__container">
                <!-- Navbar toggler -->
                <button class="navbar-toggler ml-n16pt" type="button" data-toggle="collapse" data-target="#navbar-submenu2">
                    <span class="material-icons">people_outline</span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-submenu2">
                    <div class="navbar-collapse__content pb-16pt pb-sm-0">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active">
                                <a href="{{route('dashboard.home')}}" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('dashboard.pages',['page'=>'courses'])}}" class="nav-link">Courses</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="student-discussions.html" class="nav-link">Discussions</a>
                            </li> --}}
                        </ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="{{route('dashboard.pages',['page'=>'profile'])}}" class="nav-link">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endauth
    </div>

    <!-- drawer -->
    <div class="mdk-drawer js-mdk-drawer" style="z-index: 100" id="default-drawer">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar="">
                <div class="sidebar-p-a sidebar-b-b sidebar-m-b pt-0">
                    <a href="{{$settings->server}}" class="sidebar-brand">
                        <img class="sidebar-brand-icon" src="{{asset('medias/images/'.$settings->icon)}}" width="30" alt="{{$settings->app}}">
                        <span>{{$settings->app}}</span>
                    </a>
                </div>

                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{$settings->server}}">Home</a>
                    </li>
                    @auth
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{route('dashboard.home')}}">Dashboard</a>
                    </li>
                    @endauth
                </ul>

                <div class="sidebar-heading">Pages</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        @auth
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#student_menu">
                            Student
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="student_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{route('dashboard.pages',['page'=>'profile'])}}">Profile</a>
                            </li>
                            {{-- <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-my-courses.html">Add Course</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-my-courses.html">My Courses</a>
                            </li> --}}
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button slidepanel" href="#">Check Result</a>
                            </li>
                        </ul>
                        @endauth
                    </li>
                    <li class="sidebar-menu-item active open">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                            Account
                            <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                            <span class="sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show sm-indent" id="account_menu">
                            @guest
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{route('dashboard.pages',['page'=>'login'])}}">Login</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{route('dashboard.pages',['page'=>'register'])}}">Create Account</a>
                            </li>
                            @endguest
                            @auth
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('dashboard.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            @endauth
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- // END drawer -->