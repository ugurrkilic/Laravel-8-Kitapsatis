<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <ul class="nav side-menu">
    <li class="nav-item has-treview">
     <a href="{{route('admin_category')}}" class="nav-link">
     <i class="fa fa-plus-square"></i> Category</a>
    </li>
  </ul>
   
  <ul class="nav side-menu">
    <li class="nav-item has-treview">
     <a href="{{route('admin_products')}}" class="nav-link">
     <i class="fa fa-cubes"></i> Products</a>
    </li>
  </ul>

  <ul class="nav side-menu">
    <li class="nav-item has-treview">
     <a href="{{route('admin_message')}}" class="nav-link">
     <i class="fa fa-envelope"></i> Contact Messages</a>
    </li>
  </ul>
  

  <ul class="nav side-menu">
    <li class="nav-item has-treview">
     <a href="{{route('admin_review')}}" class="nav-link">
     <i class="fa fa-comment"></i> Review</a>
    </li>
  </ul>

  <ul class="nav side-menu">
    <li class="nav-item has-treview">
     <a href="{{route('admin_faq')}}" class="nav-link">
     <i class="fa fa-question-circle"></i> FAQ</a>
    </li>
  </ul>
  <ul class="nav side-menu">
  <li><a><i class="fa fa-shopping-cart"></i>Orders <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
      <li><a href="{{route('admin_orders')}} ">All Orders</a></li>
      <li><a href="{{route('admin_order_list',['status'=>'new'])}} ">New Orders</a></li>
      <li><a href="{{route('admin_order_list',['status'=>'accepted'])}} ">Accepted Orders</a></li>
      <li><a href="{{route('admin_order_list',['status'=>'canceled'])}} ">Canceled Orders</a></li>
      <li><a href="{{route('admin_order_list',['status'=>'shipping'])}} ">Shipping Orders</a></li>
      <li><a href="{{route('admin_order_list',['status'=>'completed'])}} ">Completed Orders</a></li>
    </ul>
  </li>
  </ul>

   <ul class="nav side-menu">
    <li class="nav-item has-treview">
     <a href="{{route('admin_users')}}" class="nav-link">
     <i class="fa fa-user"></i> Users</a>
    </li>
  </ul>
  
</div>
<br>


 

<div class="main_menu_side hidden-print main_menu">
 <div class="menu_section">
   <h3>Live On</h3>
   <ul class="nav side-menu">
    <li class="nav-item has-treview">
     <a href="{{route('admin_setting')}}" class="nav-link">
     <i class="fa fa-cog"></i>Settings</a>
    </li>
  </ul>
  </div>
</div> 
