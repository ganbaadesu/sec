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
  <link rel="shortcut icon" href={{asset("main_assets/images/favicon.png")}}/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{url("/")}}"><img src={{asset("main_assets/images/logo.svg")}} class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url("/")}}"><img src={{asset("main_assets/images/logo-mini.svg")}} alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src={{asset("main_assets/images/faces/face28.jpg")}} alt="profile"/>
              name
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
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
          @yield('nav-bar')
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        @yield('main')
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src={{asset("main_assets/vendors/js/vendor.bundle.base.js")}}></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src={{asset("main_assets/js/off-canvas.js")}}></script>
  <script src={{asset("main_assets/js/hoverable-collapse.js")}}></script>
  <script src={{asset("main_assets/js/template.js")}}></script>
  <script src={{asset("main_assets/js/settings.js")}}></script>
  <script src={{asset("main_assets/js/todolist.js")}}></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src={{asset("main_assets/js/dashboard.js")}}></script>
  <script src={{asset("main_assets/js/Chart.roundedBarCharts.js")}}></script>
  <!-- End custom js for this page-->
</body>

</html>