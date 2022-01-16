@extends('layouts.home')
@section('title','User Order')
@section('content')
         <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6" style="background-image:url('{{asset('assets')}}/images/main/resim2.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">User Order</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}} ">User Order</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">User Order</span>
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
                @auth
        					<aside class="wedget__categories poroduct--cat">
                  @php
                  $userRoles = Auth::user()->roles->pluck('name');
                  @endphp
        						<h3 class="wedget__title">User Panel</h3>
        						<ul>
        					<li><a href="{{route('myprofile')}}">My Profile</a></li>
									<li><a href="{{route('myreviews')}}">My Reviews</a></li>
									<li><a href="{{route('user_shopcart')}}">My Shopcart</a></li>
									<li><a href="{{route('user_products')}}">My Product</a></li>
                  @if($userRoles->contains('admin'))
                  <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
                  @endif
									<li><a href="{{route('logout')}}">Logout</a></li>
        						</ul>
        					</aside>
                @endauth  
        				</div>
        			</div>
        			<div class="col-lg-10 col-12 order-12 order-lg-12">
              @include('home.message')
        			     <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Total</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id}}</td>
                          <td>{{ $rs->name}}</td>
                          <td>{{ $rs->phone}}</td>
                          <td>{{ $rs->address}}</td>
                          <td>${{ $rs->total}}</td>
                          <td>{{ $rs->created_at}}</td>
                          <td>{{ $rs->status}}</td>
                          <td><a href="{{route('user_order_show',['id'=>$rs->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a></td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
        		    </div>
				</div>	
        	</div>
        <!-- End Shop Page -->
        </div>
	</div>	
@endsection