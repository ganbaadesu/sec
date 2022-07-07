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
      <div style="background-color: white" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{url('/')}}" style="color: black"><h1>Home</h1></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img  src="{{asset('/images/assets/home.png')}}" alt="profile" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
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
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav style="background-color: white" class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <h1>settings</h1>
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src={{asset("main_assets/vendors/js/vendor.bundle.base.js")}}></script>
</body>

</html>