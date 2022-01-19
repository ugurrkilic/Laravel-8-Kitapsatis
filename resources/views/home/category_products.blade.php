@extends('layouts.home')
@section('title', $data->title . ' Products List')
@section('description'){{$data->description}}@endsection

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
                              <span class="breadcrumb_item active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</span>
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
							@php
					        $parentCategories = \App\Http\Controllers\HomeController::categorylist();
					        $count = \App\Http\Controllers\HomeController::getCount();
					        @endphp
        						<h3 class="wedget__title">Product Categories</h3>
								@foreach($parentCategories as $subcategory)
        						<ul>
        						@if(count($subcategory->children))
                                    <li class="label2">
                                    <a><h6>{{$subcategory->title}} </h6><span class="caret"></span></a>
                                    <ul>
                                    @include('home.categorytree',['children' => $subcategory->children])
                                    </ul>
                                   </li>
                                @else
                                <li>
                                <a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title ])}}">{{$subcategory->title}}</a>
                                </li>
                                @endif									
        						</ul>								
								@endforeach
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
											<a class="first__img" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}"><img src="{{ Storage::url($rs->image) }}" height="400px" alt="product image"></a>
											<a class="second__img animation1" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}}"><img src="{{ Storage::url($rs->image) }}" height="400px" alt="product image"></a>
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
		        					<!-- End Single Product -->
								  @endforeach	
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
@endsection