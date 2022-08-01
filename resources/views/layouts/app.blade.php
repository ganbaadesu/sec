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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href={{asset("css/app.css")}}>
    <link rel="icon" type="image/x-icon" href={{asset("images/assets/logo.png")}}/>
</head>

<body onload="set_selected()">
  <div class="container-scroller" id="parent">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <img class="navbar-brand brand-logo mr-5" src="{{asset('images/assets/logo.png')}}">
        <img class="navbar-brand brand-logo-mini" src="{{asset('images/assets/logo.png')}}"/>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group input-group-bordered" onclick="search_form()">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search">Хайх хэсэг</i>
                </span>
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
          <li class="nav-item" id="dashboard">
            <a class="nav-link" href="/home">
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
          <div class="row hidden" id="hidden_form">
            @include('search')
          </div>
          @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
          @endif
          @yield('main')
        </div>
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src={{asset("js/app.js")}}></script>
  <script src={{asset("js/google_map.js")}}></script>
  <script src={{asset("main_assets/vendors/js/vendor.bundle.base.js")}}></script>
  <script src={{asset("main_assets/js/hoverable-collapse.js")}}></script>
  <script src={{asset("main_assets/js/off-canvas.js")}}></script>
  <script src={{asset("main_assets/js/template.js")}}></script>
</body>

</html>