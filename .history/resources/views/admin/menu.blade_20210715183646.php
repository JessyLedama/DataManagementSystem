<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CarBazaar | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome --> 
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 --> 
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- style css -->
  <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
  <!-- Font Awesome --->
  <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../img/carbazaar.png" alt="AdminLTELogo">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('sell-car') }}" class="nav-link btn btn-success" style="color: white; text-transform: uppercase;">Sell your car</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="../img/carbazaar.png" alt="CARBAZAAR Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Carbazaar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <!-- HOME -->
          <li class="nav-item">
            <a href="{{ route('/') }}" class="nav-link">
              <i class="nav-icon fas fa-long-arrow-alt-left"></i>
              <p>
                Back to Home
              </p>
            </a>
          </li>

          <!-- DASHBOARD -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <!-- EDIT PROFILE -->
          <li class="nav-item">
            <a href="{{ route('profile') }}" class="nav-link">
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Edit Profile
              </p>
            </a>
          </li>
         
          <!-- <li class="nav-item">
            <a href="my-message.html" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                My Messages
              </p>
            </a>
          </li> -->

          <!-- MY INVENTORY -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                My Inventory
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="published-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Published Ads
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="expire-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Expire Ads
                  </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="sold-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Sold Ads
                  </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="pending-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Pending Ads
                  </p>
                </a>
              </li>
            </ul>
          </li>
                   
          <!-- MY RATINGS -->
          <li class="nav-item">
            <a href="my-ratings.html" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                My Ratings
              </p>
            </a>
          </li>

          <!-- CAR INSURANCE REQUESTS -->
          <li class="nav-item">
            <a href="{{ route('insurance-requests-list') }}" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Car Insurance Requests
              </p>
            </a>
          </li>

          <!-- VEHICLE TRANSFER REQUESTS -->
          <li class="nav-item">
            <a href="{{ route('vehicle-transfers-list') }}" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Vehicle Transfer Requests
              </p>
            </a>
          </li>

          <!-- LOGBOOK CAR SEARCH REQUESTS -->
          <li class="nav-item">
            <a href="{{ route('logbook-car-search-list') }}" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Logbook Car Search Requests
              </p>
            </a>
          </li>

          <!-- MILEAGE VERIFICATION REQUESTS -->
          <li class="nav-item">
            <a href="{{ route('mileage-verification-list') }}" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Mileage Verification Requests
              </p>
            </a>
          </li>

          <!-- SETTINGS -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                My Requests
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <!-- CAR INSURANCE REQUESTS -->
              <li class="nav-item">
                <a href="{{ route('insurance-requests-list') }}" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Car Insurance Requests
                  </p>
                </a>
              </li>

              <!-- VEHICLE TRANSFER REQUESTS -->
              <li class="nav-item">
                <a href="expire-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Vehicle Transfer Requests
                  </p>
                </a>
              </li>
             
              
              <li class="nav-item">
                <a href="sold-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Logbook Car Search Requests
                  </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="pending-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Mileage Verification Requests
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <!-- SETTINGS -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="published-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Published Ads
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="expire-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Expire Ads
                  </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="sold-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Sold Ads
                  </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="pending-ads.html" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Pending Ads
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a onclick="document.getElementById('customer-logout-form').submit()">
              <i class="nav-icon fas fa-user"></i>
              Sign Out
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <main>
        @yield('content')
    </main>

  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
