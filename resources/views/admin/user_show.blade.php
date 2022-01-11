<html>
<head>
<title>{{$data->name}}</title>
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
              <h2>User Detail</h2>
              @include('home.message')
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                     @csrf
                      </div>
                      <table id="datatable" class="table table-striped table-bordered">
                      
                        <tr>
                          <th rowspan="8" valign="center">
                            @if($data->profile_photo_path)
                            <img src="{{ Storage::url($data->profile_photo_path) }}" height="300" style="border-raidus:10px" alt="">
                            @endif
                        </td>
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
                          <th>Address</th> <td>{{ $data->address}}</td>
                          </tr>
                          <tr>
                          <th>Date</th> <td>{{ $data->created_at}}</td>
                          </tr>
                          <tr>
                          <th>Roles</th>
                          <td>
                          <table>
                          @foreach ($data->roles as $row)
                          <tr>
                          <td>{{$row->name}}</td>
                          <td>
                          <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete ! Are You Sure?')"class="btn btn-danger btn-xs">
                          <i class="fa fa-trash-o"></i> Delete</a></td>
                          </tr>
                          @endforeach
                        </table>
                    </form>    
                        <tr>
                    <th>Add Role</th>
                    <td>
                    <form class="form-horizontal form-label-left" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <select name="roleid">
                    @foreach ($datalist as $rs)
                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                    @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Add Role</button>
                    </form>
                    </td>
                    </tr>
                    
                    </table>
                    </td>
                    </tr>
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