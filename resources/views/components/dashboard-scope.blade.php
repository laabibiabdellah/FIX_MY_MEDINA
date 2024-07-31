@props(['title' => ''])
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | {{$title}}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="index.html"><img src="{{asset('img/logo.png')}}" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('img/logo.png')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('img/admin.png')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="{{route('settings')}}" class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>

              <form action="{{route('logout')}}" method="POST" >
                @csrf

                  <button class="dropdown-item">
                    <i class="ti-power-off text-primary"></i>
                    Logout

                  </button>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.index')}}">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#users" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="users">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('dashboard-users.index')}}">User Management</a></li>
              </ul>
            </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-signal menu-icon"></i>
              <span class="menu-title">Signalement</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="posts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('dashboard-posts.index')}}">Gestion des signalements</a></li>
              </ul>
            </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#cities" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Villes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cities">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('dashboard-cities.index')}}">Gestions des Villes</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('dashboard-cities.create')}}">Ajouter une ville</a></li>
              </ul>
            </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#companies" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-layers-alt menu-icon"></i>
              <span class="menu-title">Companies</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="companies">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('dashboard-companies.index')}}">Gestions des Companies</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('dashboard-companies.create')}}">Ajouter une Companie</a></li>
              </ul>
            </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#prefectures" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Prefectures</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="prefectures">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('dashboard-prefectures.index')}}"> Gestions des Prefectures</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('dashboard-prefectures.create')}}">Ajouter une Prefecture</a></li>
              </ul>
            </div>
            </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h4 class="font-weight-bold mb-0">{{$title}}</h4>
                  </div>
                </div>
              </div>
            </div>
        {{$slot}}
    </div>
        <!-- content-wrapper ends -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/template.js')}}"></script>
  <script src="{{asset('admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin/js/dashboard.js')}}"></script>

    {{-- Sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- End custom js for this page-->
  <script src="{{asset('js/delete-confirmation.js')}}"></script>
</body>

</html>
