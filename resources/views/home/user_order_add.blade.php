@extends('layouts.home')
@section('title','Order')
@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Order</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Order</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Start Checkout Area -->
        <section class="wn__checkout__area section-padding--lg bg__white">
        	<div class="container">
			  <form action="{{route('user_order_store')}}" method="post">
			  @csrf
        		<div class="row">
        			<div class="col-lg-6 col-12">
        				<div class="customer_details">
        					<h3>Billing details</h3>
        					<div class="customar__field">
                                <div class="input_box">
        							<label>Name<span>*</span></label>
        							<input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Name & Surname">
        						</div>
        						<div class="input_box">
        							<label>Email<span>*</span></label>
        							<input type="text" name="email" value="{{Auth::user()->email}}" placeholder="Email">
        						</div>
                                <div class="input_box">
        							<label>Phone<span>*</span></label>
        							<input type="text" name="phone" value="{{Auth::user()->phone}}" placeholder="Phone Number">
        						</div>
        						<div class="input_box">
        							<label>Address <span>*</span></label>
        							<input type="text" name="address" value="{{Auth::user()->address}}" placeholder="Address">
        						</div>
        					</div>
        				</div>
        			</div>
						<div class="col-lg-6 col-12">
        				<div class="customer_details">
						<h3>Cart details</h3>
        					<div class="customar__field">
                                <div class="input_box">
        							<label>Card Name<span>*</span></label>
        							<input type="text" name="cardname" value="{{Auth::user()->name}}" placeholder="Card Name & Surname">
        						</div>
        						<div class="input_box">
        							<label>Card Number<span>*</span></label>
        							<input type="number" name="cardnumber" value="" placeholder="Card Number">
        						</div>
                                <div class="input_box">
        							<label>Valid Dates<span>*</span></label>
        							<input type="text" name="dates" value="" placeholder="Valid Dates mm/yy">
        						</div>
        						<div class="input_box">
        							<label>Secret Number<span>*</span></label>
        							<input type="text" name="key" value="" placeholder="Secret Number">
        						</div>
        					</div>
        				</div>
					    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
						    <div class="payment">
							<div class="wn__order__box">
        					<ul class="total__amount">
							<input type="hidden" name="total" value="{{$total}}">
        						<li>Order Total <span>${{$total}} </span></li>
        					</ul>
        				    </div>
						    </div>
                            <div style="float:right;margin-top: 0px;">
                                <button class="btn btn btn-primary">Place Order</button>
                            </div>
					    </div>
        			</div>
        		</div>
			  </form>	
        	</div>
        </section>
        <!-- End Checkout Area -->

@endsection