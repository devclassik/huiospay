<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
            @if(isset($description)  && !empty($description))
            <meta name="description" content="{{$description}}">
            @endif
            @if(isset($keywords)  && !empty($keywords))
            <meta name="keywords" content="{{$keywords}}">
            @endif
            @if(isset($author)  && !empty($author))
            <meta name="author" content="{{$author}}">
            @endif            
            <!-- <meta http-equiv="Content-Security-Policy" content="default-src *"> -->
            <link rel="shortcut icon" href="{{asset('medias/images/'.$settings->icon)}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="57x57" href="{{asset('medias/images/favicon/apple-icon-57x57.png')}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="60x60" href="{{asset('medias/images/favicon/apple-icon-60x60.png')}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="72x72" href="{{asset('medias/images/favicon/apple-icon-72x72.png')}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="76x76" href="{{asset('medias/images/favicon/apple-icon-76x76.png')}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="114x114" href="{{asset('medias/images/favicon/apple-icon-114x114.png')}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="120x120" href="{{asset('medias/images/favicon/apple-icon-120x120.png')}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="144x144" href="{{asset('medias/images/favicon/apple-icon-144x144.png')}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="152x152" href="{{asset('medias/images/favicon/apple-icon-152x152.png')}}" type="image/x-icon">
            <link rel="apple-touch-icon" sizes="180x180" href="{{asset('medias/images/favicon/apple-icon-180x180.png')}}" type="image/x-icon">
            <link rel="shortcut icon"  sizes="192x192" href="{{asset('medias/images/favicon/android-icon-192x192.png')}}" type="image/x-icon">
            <link rel="shortcut icon" type="image/png" sizes="32x32" href="{{asset('medias/images/favicon/favicon-32x32.png')}}" type="image/x-icon">
            <link rel="shortcut icon" type="image/png" sizes="96x96" href="{{asset('medias/images/favicon/favicon-96x96.png')}}" type="image/x-icon">
            <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{asset('medias/images/favicon/favicon-16x16.png')}}" type="image/x-icon">
            <link rel="manifest" href="{{asset('medias/images/manifest.json')}}">
            <meta name="msapplication-TileColor" content="#1e6dbd">
            <meta name="msapplication-TileImage" content="{{asset('medias/images/favicon/ms-icon-144x144.png')}}">
            <meta name="theme-color" content="#1e6dbd">
            <!-- bootstrap -->
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/bootstrap/css/bootstrap.min.css')}}"/>
            <!-- custom -->
            <link rel="stylesheet" type="text/css" href="{{asset('dash/css/theme.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('dash/css/app.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('shared/css/style.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('dash/css/responsive.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('dash/css/preloader.css')}}">
            <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <!-- theme -->
            @if($page->slug!='login'&&$page->slug!='register'&&$page->slug!='reset'&&$page->slug!='password')
            <link rel="stylesheet" type="text/css" href="{{asset('dash/css/main.css')}}" />
            @else            
            <link rel="stylesheet" type="text/css" href="{{asset('dash/css/main.css')}}" />
            @endif
            @if($page->slug!='login'&&$page->slug!='register'&&$page->slug!='reset'&&$page->slug!='password')
            <!-- plugins -->
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/uploader/1.3/jquery.fileuploader.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/bootstrap-rating/bootstrap-rating.css')}}"/>            
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/bootstrap-select/dist/css/bootstrap-select.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/datepicker/dist/css/bootstrap-datepicker.min.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/bootstrap-multiselect/css/bootstrap-multiselect.min.css')}}"/>
            @endif
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/bootstrap-sweetalert/sweetalert.css')}}"/>
            <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>

            <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
            <title>{{config('app.name', $settings->app)}}  - {{$title}}</title>
        </head>
        <body id="app-container" class="{{($page->slug=='login'||$page->slug=='register'||$page->slug=='reset'||$page->slug=='password')?'':'menu-default show-spinner'}}">
            <div class="preloader">
                <div class="sk-double-bounce">
                    <div class="sk-child sk-double-bounce1"></div>
                    <div class="sk-child sk-double-bounce2"></div>
                </div>
            </div>