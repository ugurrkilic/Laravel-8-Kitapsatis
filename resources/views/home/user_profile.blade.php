@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
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
 <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">My Account</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}}">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">My Account</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start About Area -->
          <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-2 col-12 order-0 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">User Panel</h3>
        						<ul>
        							<li><a href="{{route('myprofile')}}">My Profile</a></li>
									<li><a href="#">My Orders</a></li>
									<li><a href="#">My Reviews</a></li>
									<li><a href="#">My Shopcart</a></li>
									<li><a href="#">My Messages</a></li>
									<li><a href="{{route('logout')}}">Logout</a></li>
        						</ul>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-10 col-12 order-12 order-lg-12">
        					<div class="col-lg-12">
			                    @include('profile.show')			
        				    </div>
        		    </div>
				</div>	
        	</div>
        <!-- End Shop Page -->
        </div>

@include('home._footer')
</body>
</html>