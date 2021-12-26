<html>
<head>
<title>Image Galery</title>
  <!-- Bootstrap -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets')}}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets')}}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


</head>

        
                    <h2>{{$data->title}}</h2>
                  <div class="x_content">
                  <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="{{route('user_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                     @csrf

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Title</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="title" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Add Image</button>
                        </div>
                      </div>
                    </form>
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Title(s)</th>
                          <th>Image</th>
                          <th>Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach( $images as $rs)
                        <tr>
                          <td>{{ $rs->id}}</td>
                          <td>{{ $rs->title}}</td>
                          <td>
                        @if($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" height="50" alt="">
                                            @endif
                          </td>
                          <td><a href="{{route('user_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Delete ! Are You Sure?')"class="btn btn-danger btn-xs">
                          <i class="fa fa-trash-o"></i> Delete</a></td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
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
   </body>
  </html>