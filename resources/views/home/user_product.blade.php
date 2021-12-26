@extends('layouts.home')
@section('title','User Product')
@section('content')
         <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">User Product</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}} ">User Product</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">User Product</span>
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
              <div style="float:right;margin-top: 0px;">
                    <a href="{{route('user_product_add')}}" class="btn btn btn-primary">Add Product</a>
                    </div>
        			     <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Category</th>
                          <th>Title(s)</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Image</th>
                          <th>Image Galery</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id}}</td>
                          <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                          <td>{{ $rs->title}}</td>
                          <td>{{ $rs->quantity}}</td>
                          <td>{{ $rs->price}}</td>
                          <td>
                        @if($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                            @endif
                          </td>
                          <td><a href="{{route('user_image_add',['product_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 width=1100,height=700')">
                          <img src="{{asset('assets/admin/images')}}/gallery.png" height="30"></a></td>
                          <td>{{ $rs->status}}</td>
                          <td><a href="{{route('user_product_edit',['id'=>$rs->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a></td>
                          <td><a href="{{route('user_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure?')"class="btn btn-danger btn-xs">
                          <i class="fa fa-trash-o"></i> Delete</a></td>
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