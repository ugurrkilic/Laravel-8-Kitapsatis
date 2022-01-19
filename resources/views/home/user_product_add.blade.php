@extends('layouts.home')
@section('title','User Add Product')
@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6" style="background-image:url('{{asset('assets')}}/images/main/resim2.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">User Add Product</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}} ">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active"> User Add Product</span>
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
									<li><a href="#">My Orders</a></li>
									<li><a href="{{route('myreviews')}}">My Reviews</a></li>
									<li><a href="#">My Shopcart</a></li>
									<li><a href="{{route('user_products')}}">My Product</a></li>
									<li><a href="{{route('logout')}}">Logout</a></li>
        						</ul>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-10 col-12 order-12 order-lg-12">
        			<form class="form-horizontal form-label-left" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                     @csrf

                     <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Category</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                        <select class="form-control" name="category_id">
                            
                            @foreach( $datalist as $rs)
                            <option value="{{ $rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                            @endforeach
                          </select>
                        </div>
                        
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" >Title</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="title" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" >Keywords</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="keywords" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="description" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Price</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="price" value="0" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Quantity</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="quantity" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Yazar</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="yazar" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Yayınevi</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="yayinevi" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Sayfa Sayısı</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="sayfa" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">ISBN</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="isbn" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Kapak</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="kapak" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Detail</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                        <textarea class="form-control" id="summary-ckeditor" name="detail"></textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor' );
                                            </script>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Slug</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="slug" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                          <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Image</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="file" name="image" class="form-control col-md-12 col-xs-12">
                        </div>
                      </div>
                      <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Add Product</button>
                        </div>
                    </div>  
                    </form>
        		    </div>
				</div>	
        	</div>
        <!-- End Shop Page -->
        </div>
	</div>	

@endsection