<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Kılıç Kitapevi</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              @if(Auth::user()->profile_photo_path)
              <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" class="img-circle profile_img">
              @endif
              </div>
              <div class="profile_info">
                @auth
                <a href="{{route('myprofile')}}"><h2>{{Auth::user()->name}}</h2></a><br>
                <a href="{{route('logout') }}" class="d-block"><h2>Logout</h2></a>
                @endauth

              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />