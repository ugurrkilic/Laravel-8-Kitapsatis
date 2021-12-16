<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <meta name="author" content="Uğur Kılıç">

    
	

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico">
	<link rel="apple-touch-icon" href="{{asset('assets')}}/images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/plugins.css">
	<link rel="stylesheet" href="{{asset('assets')}}/style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">

	<!-- Modernizer js -->
	<script src="{{asset('assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	
@include('home._header')

@include('home._sliderarea')
@include('home._newproducts')
@include('home._staywithus')
@include('home._allproducts')
@include('home._ourblog')
@include('home._bestseller')
@include('home._quickwiev')

@include('home._footer')
</body>
</html>