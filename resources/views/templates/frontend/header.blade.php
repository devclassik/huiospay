<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="A flexible, modern and secure payment collection platform in Nigeria.">
            <meta name="keywords" content="payments, africa, nigeria, ghana, fintech, tech in africa, ussd, mobile money, pos, paystack, online payments Nigeria, pay online in Nigeria, payment platforms in Nigeria, payment gateways in Nigeria, top 10 online payment processing platforms, top online payment gateways in Nigeria, best online payment gateways in Nigeria, online payment gateways in nigeria for e-commerce, payment platforms in Nigeria, Nigeria online payment platforms">
            <meta name="author" content="HuiosPay">
            <link rel="shortcut icon" href="https://www.huiospay.com/medias/images/icon.png" type="image/x-icon">
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
            <meta name="msapplication-TileColor" content="#343f52">
            <meta name="msapplication-TileImage" content="{{asset('medias/images/favicon/ms-icon-144x144.png')}}">
            <meta name="theme-color" content="#343f52">
            <!-- bootstrap -->
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/bootstrap/css/bootstrap.min.css')}}"/>
            <!-- custom -->
            <link rel="stylesheet" type="text/css" href="{{asset('front/css/plugins.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('front/css/colors/navy.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('front/css/theme.css')}}"/>
            <!-- plugins -->
            <link rel="stylesheet" type="text/css" href="{{asset('shared/css/fontawesome-pro/css/all.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>

            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"/>



            <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
            <title>HuiosPay  - A flexible, modern and secure payment collection platform in Nigeria.</title>
        </head>
        <body class="page-home">
            <div id="loading">
                <div class="load-circle"><span class="one"></span></div>
            </div>

            <main class="content-wrapper">
                <header class="wrapper bg-light">
                    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light px-3">
                        <div class="container flex-lg-row flex-nowrap align-items-center">
                            <div class="navbar-brand w-100">
                                <a href="/">
                                  <img src="{{asset('medias/images/logo.png')}}" srcset="{{asset('medias/images/logo@2x.png')}}" alt="" />
                                </a>
                            </div>
                            <div class="navbar-collapse offcanvas-nav">
                                <div class="offcanvas-header d-lg-none d-xl-none">
                                    <a href="/"><img src="{{asset('medias/images/logo-light.png')}}" srcset="{{asset('medias/images/logo-light@2x.png')}}" alt="" /></a>
                                    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                                </div>
                                <ul class="navbar-nav">
									<li class="nav-item active"> <a href="/" class="nav-link">Home</a></li>
                                    <li class="nav-item active"> <a href="/about" class="nav-link">About</a></li>

                                    <li class="nav-item dropdown " data-toggle="hover">
									    <a href="about" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle ">Company</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="/about" class="dropdown-item">About Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/contact" class="dropdown-item">Contact Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/setupAccount" class="dropdown-item">Create Account</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/faqs" class="dropdown-item">FAQ</a>
                                                </li>
                                            </ul>
									</li>
                                    <li class="nav-item">
                                        <a href="/setupAccount" class="nav-link">Account Setup</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar-other ms-lg-4">
                                <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">

									<li class="nav-item d-lg-none">
										<div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
									  </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
