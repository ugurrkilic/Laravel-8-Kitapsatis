<html>
<head>
<title>Review Detail</title>
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
              <h2>Review Detail</h2>
              @include('home.message')
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                     @csrf
                      </div>
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th> <td>{{ $data->id}}</td>
                        </tr>
                        <tr>
                          <th>Name</th> <td>{{ $data->user->name}}</td>
                          </tr>
                          <tr>
                          <th>Email</th> <td>{{ $data->product->title}}</td>
                          </tr>
                          <tr>
                          <th>Subject</th> <td>{{ $data->subject}}</td>
                          </tr>
                          <tr>
                          <th>Review</th> <td>{{ $data->review}}</td>
                          </tr>
                          <tr>
                          <th>Rate</th> <td>{{ $data->rate}}</td>
                          </tr>
                          <tr>
                          <th>Ip</th> <td>{{ $data->IP}}</td>
                          </tr>
                          <tr>
                          <th>Created Date</th> <td>{{ $data->created_at}}</td>
                          </tr>
                          <tr>
                          <th>Updated Date</th> <td>{{ $data->updated_at}}</td> 
                          </tr>
                          <tr>
                          <th>Status</th> <td>
                          <select class="form-control" value="{{$data->status}}" name="status">
                            <option>True</option>
                            <option>False</option>
                          </select>
                          </td>
                        </tr>
                      </thead>
                    </table>
                      <div class="pull-right">
                        <button type="submit" class="btn btn-success">Update Review</button>
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
        </div>
        <!-- /page content -->
    </div>  
   </body>
  </html>