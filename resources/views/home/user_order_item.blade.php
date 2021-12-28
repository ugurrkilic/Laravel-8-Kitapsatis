@extends('layouts.home')
@section('title','User Shopcart')
@section('content')
         <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">User Shopcart</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}} ">User Shopcart</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">User Shopcart</span>
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
                                    <li><a href="{{route('user_orders')}}">My Orders</a></li>
									<li><a href="{{route('myreviews')}}">My Reviews</a></li>
									<li><a href="{{route('user_shopcart')}}">My Shopcart</a></li>
									<li><a href="{{route('user_products')}}">My Product</a></li>
									<li><a href="{{route('logout')}}">Logout</a></li>
        						</ul>
        					</aside>
        				</div>
        			</div>
<div class="col-lg-10 col-12 order-12 order-lg-12">
              @include('home.message')
              <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
              
                            <div>
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $datalist as $rs)
                                        <tr>
                                            <td><a href="#">
                                            @if($rs->product->image)
                                            <img src="{{ Storage::url($rs->product->image) }}" height="30" alt="">
                                            @endif
                                            </a></td>
                                            <td><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug] )}} ">{{ $rs->product->title}}</a></td>
                                            <td><span>{{ $rs->product->price}}</span></td>
                                            <td>{{ $rs->quantity}}</td>
                                            <td>{{ $rs->amount}}</td>
                                            <td>{{ $rs->status}}</td>
                                            <td>{{ $rs->note}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>${{ $rs->order->total}}</span>
                            </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- cart-main-area end -->
        		    </div>
				</div>	
        	</div>
        <!-- End Shop Page -->
        </div>
	</div>	

@endsection