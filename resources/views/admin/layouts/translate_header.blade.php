<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Forw3b') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Favicons -->
    <link href="{{asset('public/img/favicon.png')}}" rel="icon">
    <link href="{{asset('public/img/favicon.png')}}" rel="apple-touch-icon">
    
    <link href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/lib/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet">
    <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!--<link href="{{asset('public/js/lib/bootstrap3-editable/js/bootstrap-editable.min.js')}}" rel="stylesheet">-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    
    <!-- Font Awesome -->
    <link href="{{asset('public/vendors/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/css/lib/build/css/custom.min.css')}}" rel="stylesheet">
    
  </head>
@yield('content')
@extends('admin.layouts.translate_footer')