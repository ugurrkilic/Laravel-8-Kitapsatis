<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="{{route('home')}}">
								<img src="{{asset('assets')}}/images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					@php
					$parentCategories = \App\Http\Controllers\HomeController::categorylist();
					$count = \App\Http\Controllers\HomeController::getCount();
					@endphp
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="{{(route('home'))}}">Home</a></li>
									<li class="drop"><a href="#">Categories</a>
									<div class="megamenu dropdown">
										<ul class="item item01">               
								       @foreach($parentCategories as $subcategory)
                                       @if(count($subcategory->children))
                                       <li class="label2">
                                       <a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title ])}}" >{{$subcategory->title}} <span class="caret"></span></a>
                                       <ul>
                                       @include('home.categorytree',['children' => $subcategory->children])
                                       </ul>
                                    </li>
                                    @else
                                    <li><a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title ])}}">{{$subcategory->title}}</a></li>
									    @endif
                                        @endforeach	
								</li>
								</div>
								<li class="drop"><a href="{{(route('aboutus'))}} ">About Us</a>
								</li>
								<li class="drop"><a href="{{(route('references'))}}">References</a>
								</li>
								<li class="drop"><a href="{{(route('faq'))}}">Faq</a>
								</li>
								<li><a href="{{(route('contact'))}}">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="checkout__btn" href="{{route('user_shopcart')}}"><span class="product_qun">{{$count}} </span></a>
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
													@auth
													<span><a href="#">{{Auth::user()->name}}</a></span>
													<span><a href="{{route('myprofile')}}">My Account</a></span>
													<span><a href="{{route('user_products')}}">My Product</a></span>
													<span><a href="{{route('user_orders')}}">My Orders</a></span>
													<span><a href="{{route('myreviews')}}">My Review</a></span>
													<span><a href="{{route('user_shopcart')}}">My Shopcart</a></span>
													<span><a href="{{route('logout')}}">Logout</a></span>
													@endauth
													@guest
													<span><a href="/register">Join</a></span>
													<span><a href="/login">Login</a></span>
													@endguest
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->	
			</div>		
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="{{route('getproduct')}}" method="post">
			@csrf
				<div class="field__search">
				@livewire('search')
					<div class="action">
						<button type="submit" class="search-btn"><i class="zmdi zmdi-search"></i></button>
					</div>
				</div>
			</form>
			@section('footerjs')
			@livewireScripts
			@endsection
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>