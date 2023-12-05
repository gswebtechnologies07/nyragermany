<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="{{URL::to('/')}}/public/images/settings/{{get_setting('fav_icon')}}" type="image/x-icon"/>
      <title>Admin Panel! | </title>
      <!-- Bootstrap -->
      <link href="{{asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <!-- NProgress -->
      <link href="{{asset('assets/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
      <!-- iCheck -->
      <link href="{{asset('assets/admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
      <!-- bootstrap-progressbar -->
      <link href="{{asset('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
      <!-- JQVMap -->
      <link href="{{asset('assets/admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
      <!-- bootstrap-daterangepicker -->
      <link href="{{asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="{{asset('assets/admin/build/css/custom.min.css')}}" rel="stylesheet">
      <!--//table-->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
      <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!--Alertify CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css" integrity="sha512-MpdEaY2YQ3EokN6lCD6bnWMl5Gwk7RjBbpKLovlrH6X+DRokrPRAF3zQJl1hZUiLXfo2e9MrOt+udOnHCAmi5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body class="nav-md">
      <div class="container body">
      <div class="main_container">
      <div class="col-md-3 left_col">
         <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
               <a href="{{ route('banner-list') }}" class="site_title">
               <img src="{{URL::to('/')}}/public/images/settings/{{get_setting('logo')}}" alt=""></a>
            </div>
            <div class="clearfix"></div>
            <br/>
            @include('layouts.admin.sidebar')
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
                        @if(!empty(Auth::user()->image))
                        <img src="{{URL::to('/')}}/public/images/users/{{Auth::user()->image}}" alt="Profile">
                        @endif
                        <span class=" fa fa-angle-down"></span>
                     </a>
                     <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li>
                           @if(!empty(Auth::user()->id))
                           <a href="{{route('admin-profile',  Auth::user()->id)}}"> My Profile</a>
                           @endif
                        </li>
                        <li><a href="{{route('reset-password')}}">Reset Password</a></li>
                        <li>
                           <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                           {{ __('Logout') }} 
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <!-- /top navigation -->