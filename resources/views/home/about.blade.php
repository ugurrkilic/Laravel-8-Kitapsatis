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
                        	<h2 class="bradcaump-title">About us</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}}">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">About us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start About Area -->
        <div class="page-about about_area bg--white section-padding--lg">
        	<div class="container">
				<div class="row">
        			<div class="col-lg-12">
        				<div class="section__title--3 text-center pb--30">
        					<h2>Our Process Skill Of High</h2>
        					<p>the right people for your project</p>
        				</div>
        			</div>
        		</div>
        		<div class="row align-items-center">
					
        			<div class="col-lg-6 col-sm-12 col-12">
        				<div class="content">
        					<strong>London Address</strong><br>
							{{$setting->company}}<br>
							{{$setting->address}}<br>
							<strong>Phone:</strong> {{$setting->phone}}<br>
							<strong>Fax:</strong> {{$setting->fax}}<br>
							<strong>E-mail:</strong> {{$setting->email}}<br>
        					<p></p>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End About Area -->
        <!-- Start Team Area -->
        <section class="wn__team__area pb--75 bg--white">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="section__title--3 text-center">
        					<h2>Meet our team of experts</h2>
        					<p>the right people for your project</p>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{asset('assets')}}/images/about/team/1.jpg" alt="Team images">
        					</div>
        					<div class="content text-center">
        						<h4>JOHN SMITH</h4>
        						<p>Manager</p>
        						<ul class="team__social__net">
        							<li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-tumblr icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{asset('assets')}}/images/about/team/2.jpg" alt="Team images">
        					</div>
        					<div class="content text-center">
        						<h4>ALICE KIM</h4>
        						<p>Co-Founder</p>
        						<ul class="team__social__net">
        							<li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-tumblr icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{asset('assets')}}/images/about/team/3.jpg" alt="Team images">
        					</div>
        					<div class="content text-center">
        						<h4>VICTORIA DOE</h4>
        						<p>Marketer</p>
        						<ul class="team__social__net">
        							<li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-tumblr icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        		</div>
        	</div>
        </section>

@include('home._footer')
</body>
</html>