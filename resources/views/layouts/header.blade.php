<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{url('images/favicon.png')}}">

    <link href="{{url('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    
    <link href="{{url('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
</head>
<body>

<div id="preloader">
<div class="sk-three-bounce">
<div class="sk-child sk-bounce1"></div>
<div class="sk-child sk-bounce2"></div>
<div class="sk-child sk-bounce3"></div>
</div>
</div>


<div id="main-wrapper">

<div class="nav-header">
<a href="/dashboard" class="brand-logo">
<h4>{{str_replace("_"," ",config('app.name'))}}</h4>
</a>
<div class="nav-control">
<div class="hamburger">
<span class="line"></span><span class="line"></span><span class="line"></span>
</div>
</div>
</div>


<div class="chatbox">
<div class="chatbox-close"></div>

</div>
</div>

@include ('layouts.inc.navbar');
@include ('layouts.inc.menu');