@extends('layouts.home')
@section('title', $setting->title)
@section('description'){{$setting->description}}@endsection

@section('content')
@include('home._sliderarea')
<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
					@foreach ($new as $rs)	
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}"><img src="{{ Storage::url($rs->image) }}" style="height:350px" alt="product image"></a>
								<a class="second__img animation1" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}"><img src="{{ Storage::url($rs->image) }}" style="height:350px" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}">{{$rs->title}}</a></h4>
								<ul class="prize d-flex">
									<li>{{$rs->price}}</li>
									<li class="old_prize">{{$rs->price*1.2}}</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
										    <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
											@csrf
											<input name="quantity" type="hidden" value="1">
											<button type="submit"><i class="bi bi-shopping-bag4"></i></button>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a title="Quick View" class="quickview modal-view detail-link" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}} "><i class="bi bi-search"></i></a></li>
										    </form>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									@php
											$avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
											$countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
											@endphp
											
											<div class="review-ratings">
                                <div class="rating-summary d-flex">
                                    <i class="@if($avgrev>=1) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=2) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=3) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=4) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
								    <i class="@if($avgrev>=5) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i>({{$countreview}})</i>
                                </div>
								</div>
							</div>	
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					@endforeach
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start NEwsletter Area -->
		<section class="wn__newsletter__area bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--220">
						
					</div>
				</div>
			</div>
		</section>
		<!-- End NEwsletter Area -->
		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<div class="tab__container mt--60">
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
						    @foreach ($all as $rs) 
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}"><img src="{{ Storage::url($rs->image) }}" style="height:350px" alt="product image"></a>
											<a class="second__img animation1" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}"><img src="{{ Storage::url($rs->image) }}" style="height:350px" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}">{{$rs->title}}</a></h4>
											<ul class="prize d-flex">
												<li>${{$rs->price}}</li>
												<li class="old_prize">{{$rs->price*1.2}}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
										    <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
											@csrf
											<input name="quantity" type="hidden" value="1">
											<button type="submit"><i class="bi bi-shopping-bag4"></i></button>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a title="Quick View" class="quickview modal-view detail-link" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}} "><i class="bi bi-search"></i></a></li>
										    </form>
										</ul>
												</div>
											</div>
											<div class="product__hover--content">
									@php
											$avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
											$countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
											@endphp
											
											<div class="review-ratings">
                                <div class="rating-summary d-flex">
                                    <i class="@if($avgrev>=1) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=2) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=3) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=4) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
								    <i class="@if($avgrev>=5) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i>({{$countreview}})</i>
                                </div>
								</div>
							
											</div>
										</div>
									</div>	
								</div>
						    </div>
							@endforeach
					    </div>
						
				    </div>
			    </div>
				<div class="tab__container mt--60">
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
						    @foreach ($new as $rs) 
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}"><img src="{{ Storage::url($rs->image) }}" style="height:350px" alt="product image"></a>
											<a class="second__img animation1" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}"><img src="{{ Storage::url($rs->image) }}" style="height:350px" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}">{{$rs->title}}</a></h4>
											<ul class="prize d-flex">
												<li>{{$rs->price}}</li>
												<li class="old_prize">{{$rs->price*1.2}}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
										    <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
											@csrf
											<input name="quantity" type="hidden" value="1">
											<button type="submit"><i class="bi bi-shopping-bag4"></i></button>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a title="Quick View" class="quickview modal-view detail-link" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}} "><i class="bi bi-search"></i></a></li>
										    </form>
										</ul>
												</div>
											</div>
											<div class="product__hover--content">
												@php
											$avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
											$countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
											@endphp
											
											<div class="review-ratings">
                                <div class="rating-summary d-flex">
                                    <i class="@if($avgrev>=1) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=2) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=3) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=4) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
								    <i class="@if($avgrev>=5) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i>({{$countreview}})</i>
                                </div>
								</div>
											</div>
										</div>
									</div>	
								</div>
						    </div>
							@endforeach
					    </div>
				    </div>
		</section>

@endsection




