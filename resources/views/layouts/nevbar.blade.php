<div class="logo">
   <a href="{{route('admin.main')}}" class="simple-text logo-normal"><img class="rounded-circle" src="{{asset('storage/admin/'.Auth::guard('admin')->user()->image)}}" width="50px" /> {{Auth::Guard('admin')->user()->name}}</a>
</div>
<div class="sidebar-wrapper">
   <ul class="nav">
      <li class="nav-item {{ request()->is('*admin/dashboard/content*') ? 'active' : '' }}">
         <a class="nav-link" href="{{route('admin.main')}}">
            <i class="material-icons">dashboard</i>
            <p>{{ trans('Dashboard') }}</p>
         </a>
      </li>
      <li class="nav-item {{ request()->is('*articel-page*') ? 'active' : '' }}">
         <a class="nav-link" href="{{route('admin.articel_page')}}">
         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <p>Create Articel</p>
         </a>
      </li>
      <li class="nav-item {{ request()->is('*articel-list*') ? 'active' : '' }}">
         <a class="nav-link" href="{{route('admin.articel_list')}}">
         <i class="fa fa-list" aria-hidden="true"></i>
            <p>Articel List</p>
         </a>
      </li>
      <li class="nav-item {{ request()->is('*admin/dashboard*') ? 'active' : '' }}">
         <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="material-icons">content_paste</i>
            <p>{{ trans('User Table List') }}</p>
         </a>
      </li>
      <li class="nav-item {{ request()->is('*admin/count-like*') ? 'active' : '' }}">
         <a class="nav-link" href="{{ route('admin.count_like') }}">
            <i class="material-icons">content_paste</i>
            <p>{{ trans('Artical Like Status') }}</p>
         </a>
      </li>
      <li class="nav-item {{ request()->is('*admin/show-comment*') ? 'active' : '' }}">
         <a class="nav-link" href="{{ route('admin.show_comment') }}">
            <i class="material-icons">content_paste</i>
            <p>{{ trans('Show Comments') }}</p>
         </a>
      </li>
      <!-- <li class="nav-item {{ request()->is('*list-point*') ? 'active' : '' }}">
         <a class="nav-link" href="">
            <i class="material-icons">person</i>
            <p>Point Details</p>
         </a>
      </li> -->
      <!-- <li class="nav-item {{ request()->is('*list-point*') ? 'active' : '' }}">
         <a class="nav-link" href="">
            <i class="material-icons">person</i>
            <p>User Recharge Details</p>
         </a>
      </li> -->
      <!-- <li class="nav-item {{ request()->is('*list-point*') ? 'active' : '' }}">
         <a class="nav-link" href="">
         <i class="material-icons">notifications</i>
            <p>Notification</p>
         </a>
      </li> -->
   </ul>