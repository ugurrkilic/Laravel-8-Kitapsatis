@extends('layouts.admin')
@section('title','Edit FAQ')

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
                <h3>Edit FAQ</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit FAQ</h2>
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

                    <form class="form-horizontal form-label-left" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                     @csrf
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" >Position</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="position" value="{{$data->postion}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" >Question</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="question" value="{{$data->question}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Answer</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                        <textarea class="form-control" id="summary-ckeditor" name="answer"></textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor' );
                                            </script>
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
                          <button type="submit" class="btn btn-success">Update FAQ</button>
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