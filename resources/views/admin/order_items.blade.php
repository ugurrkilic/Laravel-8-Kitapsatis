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
<h2>Order Detail</h2>
@include('home.message')
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                     @csrf
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th> <td>{{ $data->id}}</td>
                        </tr>
                          <tr>
                          <th>User</th> <td>{{ $data->user->name}}</td>
                          </tr>
                          <tr>
                          <th>Name</th> <td>{{ $data->name}}</td>
                          </tr>
                          <tr>
                          <th>Address</th> <td>{{ $data->address}}</td>
                          </tr>
                          <tr>
                          <th>Phone</th> <td>{{ $data->phone}}</td>
                          </tr>
                          <tr>
                          <th>Email</th> <td>{{ $data->email}}</td>
                          </tr>
                          <tr>
                          <th>Total</th> <td>{{ $data->total}}</td>
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
                          <tr><th>Status</th> 
                          <td>
                          <select class="form-control" name="status">
                            <option>{{$data->status}}</option>
                            <option>New</option>
                            <option>Accepted</option>
                            <option>Canceled</option>
                            <option>Shipping</option>
                            <option>Completed</option>
                          </select>
                          </td>
                          </tr>
                          <th>Admin Note </th> <td><textarea name="note" rows="3" cols="30">{{ $data->note}}</textarea></td>
                          </tr>
                      </thead>  
                    </table>
                      <div class="pull-right">
                        <button type="submit" class="btn btn-success">Update Order</button>
                    </div>
                </form>    
                    <table id="datatable" class="table table-striped table-bordered">
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
                                    <form class="form-horizontal form-label-left" action="{{route('admin_order_item_update',['id'=>$rs->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
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
                                            <td>
                                            <select class="form-control" name="status">
                                                <option>{{$rs->status}}</option>
                                                <option>New</option>
                                                <option>Accepted</option>
                                                <option>Canceled</option>
                                                <option>Shipping</option>
                                                <option>Completed</option>
                                            </select>
                                            </td>
                                            <td><textarea name="note" rows="3" cols="30">{{ $rs->note}}</textarea></td>
                                            <td><input type="submit" value="Update"></td>
                                        </tr>
                                    </form>
                                    @endforeach
                                    </tbody>
                    </table>    
                    <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr class="title-top">
                       <th>Total</th><td>{{ $data->total}}</td>
                    </tr>   
                    </thead>
                    </table>   
                </div>
                </div>
              </div>       
   </body>
  </html>