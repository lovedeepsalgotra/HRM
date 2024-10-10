<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>HR | 5kWebTech</title>
  <!-- Favicon -->
   
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- Fonts -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css') }}" type="text/css">
</head>

<style>
    .sidenav.bg-white{
        
            background-color: #646464 !important;
        
        
    }
    .navbar.bg-primary{
            background-color: #939393 !important;
    }
    .navbar-vertical.navbar-expand-xs .navbar-nav > .nav-item > .nav-link.active{
            background: #5c5c5c;
    }
    .navbar-light .navbar-nav .nav-link{
        color: rgb(255 255 255);
    
    }
    .navbar-vertical .navbar-nav .nav-link > i{
        color: #f7c90e !important;
    }
    .navbar-vertical .navbar-nav .nav-link[data-toggle='collapse'][aria-expanded='true']:after{
            color: #f6c80f;
    }
    .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active{
        color: rgb(255 255 255 / 100%);
    }
    .bg-gradient-primary, .header.bg-primary{
        background: linear-gradient(
87deg, #acaaaa 0, #b5b5b5 100%) !important;
    }
    
    .breadcrumb-item a{
            color: #f7c90e;
    }
    
    .copyright a{
        
    color: #3e3e3e;
    }
    
</style>
<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="https://5kwebtech.com/wp-content/uploads/2021/10/logo-5sep.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              @if(isset(auth()->user()->id))
          <!-- Nav items -->
          <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
               
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                   
                    
                   
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
                @endif
            </li>
        </ul>
        <!-- Collapse -->
        @if(isset(auth()->user()->id))
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                </a>
            </li>
      

             
        
             
            
         
           
         

          
              <li class="nav-item">
                <a class="nav-link active" href="#viewtestimonial" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <span class="nav-link-text">Employee</span>
                </a>

                <div class="collapse show" id="attendenceslist">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('emplist') }}">
                               Employee List                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('attendenceslist') }}">
                               Attendance                          </a>
                        </li>
                       
                    </ul>
                </div>
            </li>
      
         
           
        </ul>
        
        </div>
        @endif
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">{{$pagename}}</h6>
              
            </div>
           @if(isset(auth()->user()->id))
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
           
           
           
           
          
          
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/icons8-user-80.png') }}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                
               
               
               
                <div class="dropdown-divider"></div>
                <a href="{{route('logout')}}" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
          @endif
        </div>
      </div>
    </nav>
   
    