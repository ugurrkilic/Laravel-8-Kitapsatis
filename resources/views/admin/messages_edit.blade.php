<html>
<head>
<title>Message Detail</title>
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
              <h2>Message Detail</h2>
              @include('home.message')
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                     @csrf
                      </div>
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th> <td>{{ $data->id}}</td>
                        </tr>
                        <tr>
                          <th>Name</th> <td>{{ $data->name}}</td>
                          </tr>
                          <tr>
                          <th>Email</th> <td>{{ $data->email}}</td>
                          </tr>
                          <tr>
                          <th>Phone</th> <td>{{ $data->phone}}</td>
                          </tr>
                          <tr>
                          <th>Subject</th> <td>{{ $data->subject}}</td>
                          </tr>
                          <tr>
                          <th>Message</th> <td>{{ $data->message}}</td>
                          </tr>
                          <tr>
                          <th>Admin Note</th> <td>
                          <textarea id="note" name="note">{{ $data->note}} </textarea>
                          </td>
                          </tr>
                          <tr>
                          <th>Status</th> <td>{{ $data->status}}</td>
                        </tr>
                      </thead>
                    </table>
                      <div class="pull-right">
                        <button type="submit" class="btn btn-success">Send Message</button>
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