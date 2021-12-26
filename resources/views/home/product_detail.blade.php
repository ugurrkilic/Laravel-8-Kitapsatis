@extends('layouts.home')
@section('title',$data->title)
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)
@section('content')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--4">        
    <div class="container">        
        <div class="row">        
            <div class="col-lg-12">        
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Product Detail</h2>     	       
                        <nav class="bradcaump-content">    
                           <a class="breadcrumb_item" href="index.html">Home</a>
                           <span class="brd-separetor">/</span>      
                           <span class="breadcrumb_item active">Product Detail</span>           
                        </nav>    
                </div>        
            </div>        
        </div>        
    </div>        
</div>        
<!-- End Bradcaump area -->        
<div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row">
                
        			<div class="col-lg-11 col-12">
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
		        							  <a href="1.jpg"><img src="{{ Storage::url($data->image) }}" style="height:350px" alt=""></a>
                                              @foreach ($datalist as $rs)
		        							  <a href="2.jpg"><img src="{{ Storage::url($rs->image) }}" style="height:50px" alt=""></a>
                                              @endforeach
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1>{{$data->title}}</h1>
        								<div class="price-box">
        									<span>${{$data->price}}</span>
        								</div>
										<div class="product__overview">
        									<p>{{$data->description}}</p>
        								</div>

										<div>
										    @php
											$avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
											$countreview = \App\Http\Controllers\HomeController::countreview($data->id);
											@endphp
											
											<div class="review-ratings">
                                <div class="rating-summary d-flex">
                                    <i class="@if($avgrev>=1) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=2) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=3) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($avgrev>=4) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
								    <i class="@if($avgrev>=5) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
                                </div>
                            </div>
											<a href="tab2">{{ $countreview }} Review(s) {{$avgrev}} / Add Review</a>   
        								<div class="box-tocart d-flex">
										<form action="{{route('user_shopcart_add',['id' => $data->id])}}" method="post">
										@csrf
        									<span>Qty</span>
        									<input id="qty" class="input-text qty" name="quantity" min="1" max="{{$data->quantity}}" value="1" title="Qty" type="number">
        									<div class="addtocart__actions">
        										<button class="tocart" type="submit" title="Add to Cart">Add to Cart</button>
        									</div>
										</form>	
											<div class="product-addto-links clearfix">
												<a class="wishlist" href="#"></a>
												<a class="compare" href="#"></a>
											</div>
        								</div>
										<div class="product_meta">
											<span class="posted_in">Categories: 
												<a href="#">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}</a> ,
												<a href="#"> {{$data->title}}</a>
											</span>
										</div>
										<div class="product-share">
											<ul>
												<li class="categories-title">Share :</li>
												<li>
													<a href="#">
														<i class="icon-social-twitter icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-tumblr icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-facebook icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-linkedin icons"></i>
													</a>
												</li>
											</ul>
										</div>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
	                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
	                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews ({{$countreview}})</a>
	                        </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										<p>{!! $data->detail !!}</p>
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
									<div class="review-item clearfix">
									@foreach ($reviews as $rs)
                        <div class="review-item-submitted">
                          <strong> {{$rs->user->name}} </strong>
                          <em>{{$rs->created_at}}</em>
                          <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                          </div>
						  <div class="review-item-content">
						  
						    <div class="review-ratings">
                                <div class="rating-summary d-flex">
                                    <i class="@if($rs->rate>=1) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($rs->rate>=2) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($rs->rate>=3) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
									<i class="@if($rs->rate>=4) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
								    <i class="@if($rs->rate>=5) zmdi zmdi-star @else zmdi zmdi-star-outline @endif"></i>
                                </div>
                            </div>
							<strong> {{$rs->subject}} </strong>
						  <p>{{$rs->review}} </p>
						  <br>
                        </div>                                             
                      </div>
					  @endforeach
									<div class="review-fieldset">
										<h2>You're reviewing:</h2>
										<h3>{{$data->title}}</h3>
										@livewire('review',['id'=>$data->id])
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        </div>
        				</div>

        			</div>
        		</div>	
        		</div>
        	</div>
        </div>
        <!-- End main Content -->        
	</div>

@endsection