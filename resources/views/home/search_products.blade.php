@extends('layouts.home')
@section('title', $search. ' Products List')


@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4" style="background-image:url('{{asset('assets')}}/images/main/resim2.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Products List</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}} ">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active"><a href="{{$search}}">Products List</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Product Categories</h3>
        						<ul>
        							<li><a href="#">Biography <span>(3)</span></a></li>
        							<li><a href="#">Business <span>(4)</span></a></li>
        							<li><a href="#">Cookbooks <span>(6)</span></a></li>
        							<li><a href="#">Health & Fitness <span>(7)</span></a></li>
        							<li><a href="#">History <span>(8)</span></a></li>
        							<li><a href="#">Mystery <span>(9)</span></a></li>
        							<li><a href="#">Inspiration <span>(13)</span></a></li>
        							<li><a href="#">Romance <span>(20)</span></a></li>
        							<li><a href="#">Fiction/Fantasy <span>(22)</span></a></li>
        							<li><a href="#">Self-Improvement <span>(13)</span></a></li>
        							<li><a href="#">Humor Books <span>(17)</span></a></li>
        							<li><a href="#">Harry Potter <span>(20)</span></a></li>
        							<li><a href="#">Land of Stories <span>(34)</span></a></li>
        							<li><a href="#">Kids' Music <span>(60)</span></a></li>
        							<li><a href="#">Toys & Games <span>(3)</span></a></li>
        							<li><a href="#">hoodies <span>(3)</span></a></li>
        						</ul>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
			                        </div>
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product -->
								  @foreach ($datalist as $rs)	
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img src="{{ Storage::url($rs->image) }}" height="400px" alt="product image"></a>
											<a class="second__img animation1" href="single-product.html"><img src="{{ Storage::url($rs->image) }}" height="400px" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">{{$rs->title}}</a></h4>
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
		        					<!-- End Single Product -->
								  @endforeach	
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->
		

@endsection