@extends('layouts.admin')
@section('title','Edit Setting')

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

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('assets')}}/admin/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('assets')}}/admin/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('assets')}}/admin/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('assets')}}/admin/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('assets')}}/admin/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Setting</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <form class="form-horizontal form-label-left" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
            <section class="content">
             @csrf 
            <div class="row">

              <div class="col-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#general_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">General</a>
                        </li>
                        <li role="presentation" class=""><a href="#smtp_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Smtp Email</a>
                        </li>
                        <li role="presentation" class=""><a href="#social_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Social Medya</a>
                        </li>
                          <li role="presentation" class=""><a href="#about_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">About Us</a>
                        </li>
                          <li role="presentation" class=""><a href="#contact_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Contact Page</a>
                        </li>
                          <li role="presentation" class=""><a href="#references_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">References</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="general_content1" aria-labelledby="home-tab">
               
                          <input type="hidden" id='id' name="id" value="{{$data->id}}" class="form-control col-md-7 col-xs-12">
                      
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
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Company</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="company" value="{{$data->company}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="address" value="{{$data->address}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                     <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Phone</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="phone" value="{{$data->phone}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                     <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Fax</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="number" name="fax" value="{{$data->fax}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                     <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="email" value="{{$data->email}}" class="form-control col-md-7 col-xs-12">
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
                      </div>
                        <div role="tabpanel" class="tab-pane fade" id="smtp_content2" aria-labelledby="profile-tab">
                         <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">SmtpServer</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                     <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">SmtpEmail</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                     <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">SmtpPassword</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                     <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">SmtpPort</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="smtpport" value="{{$data->smtpport}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="social_content3" aria-labelledby="profile-tab">
                          <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Facebook</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                     <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Instagram</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                           <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Twitter</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                                           <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Youtube</label>
                        <div class="col-md-11 col-sm-6 col-xs-12">
                          <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                        </div>
                           <div role="tabpanel" class="tab-pane fade" id="about_content3" aria-labelledby="profile-tab">
                                   <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">About Us</label>
                        <div class="col-12 col-sm-12">
                        <textarea class="form-control" id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'aboutus' );
                                            </script>
                        </div>
                      </div>
                        </div>
                           <div role="tabpanel" class="tab-pane fade" id="contact_content3" aria-labelledby="profile-tab">
                                          <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Contact</label>
                        <div class="col-12 col-sm-12">
                        <textarea class="form-control" id="contact" name="contact">{{$data->contact}}</textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'contact' );
                                            </script>
                        </div>
                      </div>
                        </div>
                           <div role="tabpanel" class="tab-pane fade" id="references_content3" aria-labelledby="profile-tab">
                          <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">References</label>
                        <div class="col-12 col-sm-12">
                        <textarea class="form-control" id="references" name="references">{{$data->references}}</textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'references' );
                                            </script>
                        </div>
                      </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
                      <div class="card-footer">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Update Setting</button>
                        </div>
                      </div>
                      
                      </section>
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