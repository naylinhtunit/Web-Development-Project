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
    <link href="{{ asset('public/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('public/img/favicon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap -->
    <link href="{{ asset('public/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="{{ asset('public/vendors/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('public/css/lib/build/css/custom.min.css') }}" rel="stylesheet">
    
    <!-- dropify -->
    <link rel="stylesheet" href="{{ asset('public/vendors/dropify/dist/css/dropify.min.css') }}">
    
  </head>
@yield('content')
@extends('admin.layouts.footer')