<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{asset("main_assets/vendors/feather/feather.css")}}>
    <link rel="stylesheet" href={{asset("main_assets/vendors/ti-icons/css/themify-icons.css")}}>
    <link rel="stylesheet" href={{asset("main_assets/vendors/css/vendor.bundle.base.css")}}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{asset("main_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("main_assets/vendors/ti-icons/css/themify-icons.css")}}>
    <link rel="stylesheet" type="main_assets/text/css" href={{asset("js/select.dataTables.min.css")}}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href={{asset("main_assets/css/vertical-layout-light/style.css")}}>
    <!-- endinject -->
    <link rel="icon" type="image/x-icon" href={{asset("images/assets/logo.png")}}/>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <h1 class="navbar-brand brand-logo mr-5" style="color: black">Сайн уу, {{Auth::user()->name}}</h1>
        <img class="navbar-brand brand-logo-mini" src="{{asset(Auth::user()->profile)}}" alt="profile" height="45px" width="40px"/>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
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
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          @yield('nav-bar')
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('main')
        </div>
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src={{asset("main_assets/vendors/js/vendor.bundle.base.js")}}></script>
  <script src={{asset("main_assets/js/off-canvas.js")}}></script>
  <script src={{asset("main_assets/js/template.js")}}></script>
</body>

</html>