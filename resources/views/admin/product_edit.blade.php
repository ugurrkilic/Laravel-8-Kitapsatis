@extends('layouts.admin')
@section('title','Edit Product')

@section('content')
 <!-- /menu footer buttons -->
 <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Product</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Product</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                     @csrf

                    <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Category</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                        <select class="form-control" name="category_id">
                            
                            @foreach( $datalist as $rs)
                            <option value="{{$rs->id}}" @if($rs->id== $data->parent_id) selected="selected" @endif >
                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" >Title</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="title" value="{{$data->title}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" >Keywords</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="description" value="{{$data->description}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Price</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="price" value="{{$data->price}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Quantity</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="quantity" value="{{$data->quantity}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Yazar</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="yazar" value="{{$data->yazar}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Yayınevi</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="yayinevi" value="{{$data->yayinevi}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Sayfa Sayısı</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="sayfa" value="{{$data->sayfa}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">ISBN</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="isbn" value="{{$data->isbn}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Kapak</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="kapak" value="{{$data->kapak}}" class="form-control col-md-7 col-xs-12">
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
                          <input type="text" name="slug" value="{{$data->slug}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                          <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Image</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="file" name="image" class="form-control col-md-7 col-xs-12">
                                @if ($data->image) 
                          <img src="{{ Storage::url($data->image)}}" height="60" alt="">
                          @endif
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-1 col-sm-3 col-xs-12" >Status
                        </label>  
                      <div class="col-md-11 col-sm-6 col-xs-12" >
                          <select class="form-control" name="status" value="{{$data->status}}">
                            <option>True</option>
                            <option>False</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="card-footer">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Update Product</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
    </div>    
   
@endsection