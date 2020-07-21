<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forw3b | Web Development Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSRF Token -->
    <meta name="keywords" content="{{ Lang::get('seo_keywords', array(), Helper::lang()) }}">
    <meta name="description" content="{{ Lang::get('seo_des', array(), Helper::lang()) }}">
    <meta name="author" content="Forw3b">
    <meta name="google-site-verification" content="bXmHXRmSrfqnGjkGvM52LDIoVMW0sa0TiWqOv5PplWE" />
    
    <meta property="og:url" content="https://{{ $_SERVER['HTTP_HOST'] }}<?php echo $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="{{ config('app.name', 'Forw3b') }}">
    <meta property="og:description" content="{{ Lang::get('seo_des', array(), Helper::lang()) }}" />
    <meta property="og:image" content="{{asset('public/img/logo/forw3b_logo.png')}}" />
    <meta property="og:type" content="website" />
    
    <meta name="geo.position" content="16.8033154;96.1840221" />
    <meta name="geo.placename" content="Forw3b" />
    <meta name="geo.region" content="MM" />
    
    <link rel="canonical" href="{{ Lang::get('url', array(), Helper::lang()) }}" />
    <link rel="shortlink" href="{{ Lang::get('url', array(), Helper::lang()) }}" />
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154962706-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-154962706-1');
    </script>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!--Fredericka the Great Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('public/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="{{asset('public/css/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    
    <!--Icon-->
    <link rel="stylesheet" href="{{asset('public/css/lib/icon/css/all.css')}}">
  
    <!-- Main Stylesheet File -->
    <link href="{{asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{asset('public/img/favicon.png')}}" rel="icon">
    <link href="{{asset('public/img/favicon.png')}}" rel="apple-touch-icon">
    
    <!--Google Adsense-->
    <script data-ad-client="ca-pub-3208312398055068" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
    <!--Cpatcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
</head>

<body>

@yield('main')
@yield('content')
@extends('layouts.footer')