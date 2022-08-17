<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{config('app.name')}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{asset("main_assets/vendors/feather/feather.css")}}>
    <link rel="stylesheet" href={{asset("main_assets/vendors/css/vendor.bundle.base.css")}}>
    <link rel="stylesheet" href={{asset("main_assets/css/vertical-layout-light/style.css")}}>
    <link rel="stylesheet" href={{asset("main_assets/vendors/ti-icons/css/themify-icons.css")}}>
    <link rel="stylesheet" href={{asset("css/app.css")}}>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="icon" type="image/x-icon" href={{asset("images/assets/logo.png")}}/>
</head>

<body onload="index()">
  <div class="hidden popup" id="hidden_form">
    <h1 class="search-close" id="close_search_button">X</h1>
    <div class="center-popup" id="center_popup">
      @include('search')
    </div>
  </div>
  <div class="container-scroller" id="parent">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group input-group-bordered" onclick="search_form()">
              <div class="input-group-prepend hover-cursor search_border" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
                <div style="text-align: center">
                  <p class="search_title"> Хайх хэсэг</p>

                </div>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset(Auth::user()->profile)}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{url('/settings')}}">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="ti-power-off text-primary"></i>
                @csrf
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <img src="{{asset('images/assets/logo.png')}}" alt="" height="50px" width="108px" id="logo">
        </ul>
        <ul class="nav nav-content">
          <li class="nav-item" id="dashboard">
            <a class="nav-link" href="/">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Нүүр хуудас</span>
            </a>
          </li>
          @yield('nav-bar')
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if (\Session::has('success'))
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success">
                  <ul>
                      <li>{!! \Session::get('success') !!}</li>
                  </ul>
              </div>
            </div>
          </div>
          @endif
          @if (\Session::has('error'))
          <div class="row">
            <div class="col-12">
              <div class="alert alert-danger">
                  <ul>
                      <li>{!! \Session::get('error') !!}</li>
                  </ul>
              </div>
            </div>
          </div>
          @endif
          @yield('main')

        </div>
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- external:js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" defer></script>

  <!-- custom:js -->
  <script src={{asset("js/app.js")}}></script>
  <script src={{asset("main_assets/vendors/js/vendor.bundle.base.js")}}></script>
  <script src={{asset("main_assets/js/hoverable-collapse.js")}}></script>
  <script src={{asset("main_assets/js/off-canvas.js")}}></script>
  <script src={{asset("main_assets/js/template.js")}}></script>
</body>

</html>