<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap admin template">
        <meta name="author" content="">
        
        <title>{{config('app.name', 'Application')}} - Login</title>
        
        <link rel="apple-touch-icon" href="{{asset('medias/images/'.$settings->icon)}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('medias/images/'.$settings->icon)}}" type="image/x-icon">
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('office/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('office/css/bootstrap-extend.min.css')}}">
        <link rel="stylesheet" href="{{asset('office/assets/css/site.min.css')}}">
        <link rel="stylesheet" href="{{asset('office/css/login.css')}}">
        
        <!-- Plugins -->
        <link rel="stylesheet" href="{{asset('office/plugins/animsition/animsition.css')}}">
        <link rel="stylesheet" href="{{asset('office/plugins/asscrollable/asScrollable.css')}}">
        <link rel="stylesheet" href="{{asset('office/plugins/switchery/switchery.css')}}">
        <link rel="stylesheet" href="{{asset('office/plugins/intro-js/introjs.css')}}">
        <link rel="stylesheet" href="{{asset('office/plugins/slidepanel/slidePanel.css')}}">
        <link rel="stylesheet" href="{{asset('office/plugins/flag-icon-css/flag-icon.css')}}">
        <link rel="stylesheet" href="{{asset('office/assets/examples/css/pages/login-v2.css')}}">
        
        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('office/fonts/web-icons/web-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('office/fonts/brand-icons/brand-icons.min.css')}}">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        
        <!--[if lt IE 9]>
        <script type="text/javascript" src="{{asset('office/plugins/html5shiv/html5shiv.min.js')}}"></script>
        <![endif]-->
        
        <!--[if lt IE 10]>
        <script type="text/javascript" src="{{asset('office/plugins/media-match/media.match.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/respond/respond.min.js')}}"></script>
        <![endif]-->
        
        <!-- Scripts -->
        <script type="text/javascript" src="{{asset('office/plugins/breakpoints/breakpoints.js')}}"></script>
        <script>Breakpoints();</script>
    </head>
    <body class="animsition page-login-v2 layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

        <style>
            body {
                background: transparent;
            }
        </style>
        
        @yield('content')

        <!-- Core  -->
        <script type="text/javascript" src="{{asset('office/plugins/jquery/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/popper-js/umd/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/babel-external-helpers/babel-external-helpers.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/bootstrap/js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/animsition/animsition.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/mousewheel/jquery.mousewheel.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/asscrollbar/jquery-asScrollbar.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/asscrollable/jquery-asScrollable.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
        
        <!-- Plugins -->
        <script type="text/javascript" src="{{asset('office/plugins/switchery/switchery.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/intro-js/intro.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/screenfull/screenfull.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/slidepanel/jquery-slidePanel.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/jquery-placeholder/jquery.placeholder.js')}}"></script>
        
        <!-- Scripts -->
        <script type="text/javascript" src="{{asset('office/scripts/Component.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/Plugin.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/Base.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/Config.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('office/assets/js/Section/Menubar.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/Section/GridMenu.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/Section/Sidebar.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/Section/PageAside.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/Plugin/menu.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('office/scripts/config/colors.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/config/tour.js')}}"></script>
        <script>Config.set('assets', '../../assets');</script>
        
        <!-- Page -->
        <script type="text/javascript" src="{{asset('office/assets/js/Site.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/asscrollable.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/slidepanel.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/switchery.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/jquery-placeholder.js')}}"></script>
        
        <script>
            (function(document, window, $){
                'use strict';
                var Site = window.Site;
                $(document).ready(function(){
                    Site.run();
                });
            })(document, window, jQuery);
        </script>
    </body>
</html>

