<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="{{asset('medias/images/'.$settings->icon)}}" title="{{$settings->app}}">
            <span class="navbar-brand-text hidden-xs-down">{{$settings->app}}</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>
    
    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                        <span class="sr-only">Toggle menubar</span>
                        <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                    <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="nav-item hidden-float">
                    <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search" role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->
        
            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                        <span class="avatar avatar-online">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="{{$user->username}}">
                            <i></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item slide-panel" data-action="edit" data-url="{{$user->id}}" data-target="#profile" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                            <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link notifications-dropdown" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up" role="button">
                        <i class="icon wb-bell" aria-hidden="true"></i>
                        @if($action->notifications_count > 0)
                        <span class="badge badge-pill badge-danger up">{{$action->notifications_count}}</span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <div class="dropdown-menu-header">
                            <h5>NOTIFICATIONS</h5>
                            @if($action->notifications_count > 0)
                            <span class="badge badge-round badge-danger">New {{$action->notifications_count}}</span>
                            @endif
                        </div>        
                        <div class="list-group">
                            <div data-role="container">
                                <div data-role="content">
                                    @foreach($action->notifications->data->notifications as $notification)
                                    @php $notifier = ($notification->sender->id==$user->id)?$notification->recipient:$notification->sender; @endphp
                                    @php DB::table('notifications')->where(($notification->sender->id==$user->id)?'sender':'recipient',$user->id)->update(['status' => ($notification->sender->id==$user->id)?2:3]);@endphp
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                                                <span class="avatar">
                                                    <img src="{{asset(($notification->sender->id==$user->id)?$notification->recipient->image->path.$notification->recipient->image->name:$notification->sender->image->path.$notification->sender->image->name)}}" alt="{{$notification->username}}">
                                                </span>
                                                <!-- <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i> -->
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">{{($notification->sender->id==$user->id)?$notification->notifier:$notification->notification}}</h6>
                                                <time class="media-meta" datetime="{{$notification->date}}">{{$notification->time}}</time>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button"><i class="icon wb-settings" aria-hidden="true"></i></a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">All notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link slide-panel" data-toggle="dropdown" href="javascript:void(0)" data-view="settings/1" data-action="edit" data-target="#settings"  data-placement="bottom" data-toggle="tooltip" data-original-title="Settings" aria-expanded="false" data-animation="scale-up" role="button">
                        <i class="icon wb-settings" aria-hidden="true"></i>
                        {{-- <span class="badge badge-pill badge-info up">0</span> --}}
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>    
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">General</li>
                    @foreach($user->actives as $role)
                    @if($role->page=='dashboard')
                    <li class="site-menu-item {{($action->action=='')?'active':''}}">
                        <a href="{{route('office.home')}}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    @endif
                    @if($role->page=='media')
                    <li class="site-menu-item {{($action->action=='media')?'active':''}}">
                        <a class="animsition-link" href="{{route('office.action','media')}}">
                            <i class="site-menu-icon wb-gallery" aria-hidden="true"></i>
                            <span class="site-menu-title">Media</span>
                        </a>
                    </li>
                    @endif

                    @endforeach
                    <li class="site-menu-category">Application</li>
                    @foreach($action->app as $app)
                    @foreach($user->actives as $role)
                    @if($role->page==$app->name)
                    <li class="site-menu-item {{($action->action==$app->action)?'active':''}}">
                        <a class="animsition-link" href="{{route('office.action',$app->action)}}">
                            <i class="site-menu-icon {{$app->icon}}" aria-hidden="true"></i>
                            <span class="site-menu-title">{{ucfirst($app->name)}}</span>
                        </a>
                    </li>
                    @endif
                    @endforeach
                    @endforeach

                    @foreach($user->actives as $role)                    
                    @if($role->page=='resources'||$role->page=='pages'||$role->page=='navigations')
                    <li class="site-menu-category">Resources</li>
                    @php break @endphp
                    @endif
                    @endforeach

                    @foreach($user->actives as $role)                    
                    @if($role->page=='pages')
                    <li class="site-menu-item has-sub {{($action->item=='pages')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                            <span class="site-menu-title">Pages</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{route('office.action','pages')}}">
                                    <span class="site-menu-title">View Pages</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{route('office.action.create','pages')}}">
                                    <span class="site-menu-title">Create Page</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Manage Pages</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-pill badge-success mr-25">{{count($pages)}}</span>
                                    </div>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    @foreach($pages as $page)
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="{{route('office.action.item',['pages',$page->slug])}}">
                                            <span class="site-menu-title">{{$page->page}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if($role->page=='widgets')
                    <li class="site-menu-item has-sub {{($action->item=='widgets')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-expand" aria-hidden="true"></i>
                            <span class="site-menu-title">Widgets</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{route('office.action','widgets')}}">
                                    <span class="site-menu-title">View Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{route('office.action.create','widgets')}}">
                                    <span class="site-menu-title">Create Widget</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Manage Widgets</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-pill badge-success mr-25">{{count($widgets)}}</span>
                                    </div>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    @foreach($widgets as $widget)
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="{{route('office.action.item',['widgets',$widget->slug])}}">
                                            <span class="site-menu-title">{{$widget->title}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if($role->page=='navigations')
                    <li class="site-menu-item has-sub {{($action->item=='navigations')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-menu" aria-hidden="true"></i>
                            <span class="site-menu-title">Navigations</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{route('office.action','navigations')}}">
                                    <span class="site-menu-title">View Menu</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{route('office.action.create','navigations')}}">
                                    <span class="site-menu-title">Create Menu</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Manage Menus</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-pill badge-success mr-25">{{count($navigations)}}</span>
                                    </div>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    @foreach($navigations as $menu)
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="{{route('office.action.item',['navigations',$menu->slug])}}">
                                            <span class="site-menu-title">{{$menu->title}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if($role->page=='resources')
                    <li class="site-menu-item has-sub {{($action->item=='resources')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Resources</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{route('office.action','resources')}}">
                                    <span class="site-menu-title">View Resources</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{route('office.action.create','resources')}}">
                                    <span class="site-menu-title">Create Resource</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Manage Resources</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-pill badge-success mr-25">{{count($resources)}}</span>
                                    </div>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    @foreach($resources as $resource)
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="{{route('office.action.item.command',['resources',$resource->slug,'view'])}}">
                                            <span class="site-menu-title">{{$resource->title}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @endforeach

                    @foreach($user->actives as $role)
                    @php $booking  = DB::table('roles')->where('page','bookings')->where('user',$user->id)->value('access'); @endphp
                    @if($role->page=='reports' && $action->platform=='booking' && $booking==1)
                    <li class="site-menu-category">Reports</li>
                    <li class="site-menu-item">
                        <a href="{{route('office.action','reports')}}">
                            <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                            <span class="site-menu-title">View Reports</span>
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>      
            </div>
        </div>
    </div>    
    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show slide-panel" data-action="edit" data-url="{{$user->id}}" data-target="#profile" data-placement="top" data-toggle="tooltip" data-original-title="Profile">
            <span class="icon wb-user" aria-hidden="true"></span>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-placement="top" data-toggle="tooltip" data-original-title="Screen Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>    
<div class="site-gridmenu">
    <div>
        <div>
            <ul>
                @foreach($user->actives as $role)
                    @if($role->page=='dashboard' && $role->access=='1')
                    <li>
                        <a href="{{route('office.home')}}">
                            <i class="icon wb-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    @endif
                    @foreach($action->app as $app)
                    @if($role->page==$app->name && $role->access=='1')
                    <li>
                        <a href="{{route('office.action',$app->action)}}">
                            <i class="icon {{$app->icon}}"></i>
                            <span>{{ucfirst($app->name)}}</span>
                        </a>
                    </li>
                    @endif
                    @endforeach                    
                    @if($role->page=='resources' && $role->access=='1')
                    <li>
                        <a href="{{route('office.action','resources')}}">
                            <i class="icon wb-layout"></i>
                            <span>Resources</span>
                        </a>
                    </li>
                    @endif
                    @php $booking  = DB::table('roles')->where('page','bookings')->where('user',$user->id)->value('access'); @endphp
                    @if($role->page=='reports' && $role->access=='1' && $booking!=null && $booking!='' && $booking>0)
                    <li>
                        <a href="{{route('office.action','reports')}}">
                            <i class="icon wb-pie-chart"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>

@if($action->action!='')
<!-- Page -->
<section class="page">
    <div class="page-header">
        <h1 class="page-title">{{$action->action_cap}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('office.home')}}">Home</a></li>
            @if(empty($action->item))
            <li class="breadcrumb-item active">{{$action->action_cap}}</li>
            @elseif(!empty($action->item))
            <li class="breadcrumb-item"><a href="{{route('office.action',$action->action)}}">{{$action->action_cap}}</a></li>
            <li class="breadcrumb-item active">{{$action->item_cap}}</li>
            @endif
        </ol>
        <div class="page-header-actions">
            <a class="btn btn-sm btn-inverse btn-round" href="{{route('frontend')}}" target="_blank">
                <i class="icon wb-link" aria-hidden="true"></i>
                <span class="hidden-sm-down">Official Website</span>
            </a>
        </div>
    </div>

    <div class="page-content">
        <div class="panel panel-bordered">
            <div class="panel-heading position-relative">
                <h3 class="panel-title py-2 px-4 m-0 w-p50 d-inline-block">
                    @if($action->action=='media')
                    <a class="btn btn-sm btn-primary rounded text-white" data-target="#file-upload-browse" data-input="picture-user-new" data-toggle="modal"><i class="fas fa-plus mr-2"></i>Add {{$action->action_cap}}</a>
                    @elseif($action->action=='results' && in_array($action->action,$apps) && $action->item=='create' || $action->item=='modify')
                    <a class="btn btn-sm btn-primary rounded text-white" href="{{ route('office.action',$action->action)}}"><i class="fas fa-plus mr-2"></i>View {{$action->action_cap}}</a>
                    @elseif($action->action=='results' && in_array($action->action,$apps) && $action->item!=='create' && $action->item!='modify')
                    <a class="btn btn-sm btn-primary rounded text-white" href="{{ route('office.action.item',[$action->action,'create'])}}"><i class="fas fa-plus mr-2"></i>{{'Add '.$action->action_trimed_cap}}</a>
                    @elseif($action->action!='results' && in_array($action->action,$apps) && $action->action!='payments' && $action->action!='wallets' && $action->action!='referrals')
                    <a class="btn btn-sm btn-primary rounded text-white slide-panel"  data-action="{{($action->action=='comments'||$action->action=='contacts')?'':'new'}}" data-target="#{{$action->action}}"><i class="fas fa-plus mr-2"></i>Add {{$action->action_trimed_cap}}</a>
                    @elseif($action->item=='create' && $action->item!='modify')
                    <a class="btn btn-sm btn-primary rounded text-white" href="{{ route('office.action',$action->action)}}"><i class="fas fa-plus mr-2"></i>View {{$action->action_cap}}</a>
                    @elseif(($action->action=='resources' && !empty($action->item)) && empty($action->command))
                    <a class="btn btn-sm btn-primary rounded text-white" href="{{ route('office.action.item.command',[$action->action,$action->item,'view'])}}"><i class="fas fa-plus mr-2"></i>{{'View '.$action->item_cap}}</a>
                    @elseif(($action->action=='resources' && !empty($action->item)) && (!empty($action->command)) && ($action->command=='view'))
                    <a class="btn btn-sm btn-primary rounded text-white" href="{{ route('office.action.item.command',[$action->action,$action->item,'create'])}}"><i class="fas fa-plus mr-2"></i>{{'Add '.$action->item_trimed_cap}}</a>
                    @elseif(($action->action=='resources' && !empty($action->item)) && (!empty($action->command)) && ($action->command=='create' || $action->item=='modify'))
                    <a class="btn btn-sm btn-primary rounded text-white" href="{{ route('office.action.item.command',[$action->action,$action->item,'view'])}}"><i class="fas fa-plus mr-2"></i>{{'View '.$action->item_cap}}</a>
                    @elseif(!empty($action->item))
                    <a class="btn btn-sm btn-primary rounded text-white" href="{{ route('office.action.create',$action->action)}}"><i class="fas fa-plus mr-2"></i>{{($action->action=='resources'?'Add '.$action->action_trimed_cap:'Create '.$action->action_trimed_cap)}}</a>
                    @elseif(empty($action->item)  && !in_array($action->action,$apps) || $action->action=='pages' || $action->item=='create' || $action->item=='modify')
                    <a class="btn btn-sm btn-primary rounded text-white" href="{{ route('office.action.create',$action->action)}}"><i class="fas fa-plus mr-2"></i>{{($action->action=='media'?'Upload '.$action->action_trimed_cap:($action->action=='pages' || $action->action=='navigations' || $action->action=='resources'?'Add '.$action->action_trimed_cap:'Create '.$action->action_trimed_cap))}}</a>
                    @endif
                </h3>
                <div class="panel-actions py-2 px-1 w-p50 d-inline float-right text-right">
                    <!-- <a class="panel-action icon wb-refresh" data-toggle="panel-refresh" data-load-type="round-circle" data-load-callback="customRefreshCallback" aria-hidden="true"></a> -->
                    <a class="panel-action icon wb-minus" aria-expanded="true" data-toggle="panel-collapse" aria-hidden="true"></a>
                    <!-- <a class="panel-action icon wb-expand" data-toggle="panel-fullscreen" aria-hidden="true"></a> -->
                    <a class="panel-action icon wb-close" data-toggle="panel-close" aria-hidden="true"></a>
                </div>
            </div>
@endif