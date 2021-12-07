<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DMS | Dashboard</title>

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

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon"/>
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../img/logo.png" alt="Logo">
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('products-create') }}" class="nav-link btn btn-success" style="color: white; text-transform: uppercase;">New Product</a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
          <img src="../img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">DMS</span>
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
                  <i class="nav-icon fas fa-pencil-square-o "></i>
                  <p>
                    Edit Profile
                  </p>
                </a>
              </li>

              <!-- MY INVENTORY -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-server"></i>
                  <p>
                    Inventory
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <!-- PRODUCTS -->
                  <li class="nav-item">
                    <a href="{{ route('products-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Produts
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('products-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Produts
                      </p>
                    </a>
                  </li> <hr />

                </ul>
              </li>

              <!-- MY REQUESTS -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-bell"></i>
                  <p>
                    Requests
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
                    <a href="{{ route('vehicle-transfers-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Vehicle Transfer Requests
                      </p>
                    </a>
                  </li>
                
                  <!-- LOGBOOK CAR SEARCH REQUESTS -->
                  <li class="nav-item">
                    <a href="{{ route('logbook-car-search-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Logbook Car Search Requests
                      </p>
                    </a>
                  </li>
                
                  <!-- MILEAGE VERIFICATION REQUESTS -->
                  <li class="nav-item">
                    <a href="{{ route('mileage-verification-list') }}" class="nav-link">
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
                  <i class="nav-icon fas fa-cog"></i>
                  <p>
                    Settings
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <!-- CAR MODELS -->
                  <li class="nav-item">
                    <a href="{{ route('car-models-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Car Models
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('car-models-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Car Model
                      </p>
                    </a>
                  </li> <hr />

                  <!-- CAR PRICE TYPES -->
                  <li class="nav-item">
                    <a href="{{ route('car-price-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Car Price Types
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('car-price-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Car Price Type
                      </p>
                    </a>
                  </li> <hr />

                  <!-- CAR CONDITIONS -->
                  <li class="nav-item">
                    <a href="{{ route('car-conditions-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Car Conditions
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('car-conditions-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Car Condition
                      </p>
                    </a>
                  </li> <hr />

                  <!-- CAR BODY TYPES -->
                  <li class="nav-item">
                    <a href="{{ route('car-body-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Car Body Types
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('car-body-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Car Body Type
                      </p>
                    </a>
                  </li> <hr />
                
                  <!-- CAR ENGINE TYPES -->
                  <li class="nav-item">
                    <a href="{{ route('car-engine-types-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Car Engine Types
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('car-engine-types-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Car Engine Type
                      </p>
                    </a>
                  </li> <hr />

                  <!-- CAR ENGINE SIZES -->
                  <li class="nav-item">
                    <a href="{{ route('car-engine-sizes-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Car Engine Sizes
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('car-engine-sizes-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Car Engine Size
                      </p>
                    </a>
                  </li> <hr />

                  <!-- CAR TRANSMISSIONS -->
                  <li class="nav-item">
                    <a href="{{ route('car-transmission-types-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Car Transmissions
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('car-transmission-types-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Car Transmission
                      </p>
                    </a>
                  </li> <hr />

                  <!-- CAR COLORS -->
                  <li class="nav-item">
                    <a href="{{ route('car-colors-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Car Colors
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('car-colors-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Car Color
                      </p>
                    </a>
                  </li> <hr />

                  <!-- CITIES -->
                  <li class="nav-item">
                    <a href="{{ route('cities-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Cities
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('cities-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add City
                      </p>
                    </a>
                  </li> <hr />

                  <!-- INSURANCE COVER TYPES -->
                  <li class="nav-item">
                    <a href="{{ route('cover-types-list') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Insurance Cover Types
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('cover-types-create') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add Insurance Cover Type
                      </p>
                    </a>
                  </li> <hr />

                  <!-- USERS -->
                  <li class="nav-item">
                    <a href="{{ route('all-users') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        All Users
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('create-user') }}" class="nav-link">
                      <i class="nav-icon fas fa-chevron-right"></i>
                      <p>
                        Add User
                      </p>
                    </a>
                  </li> <hr />
                </ul>
              </li>

              <!-- Log Out -->
              <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"><i class="nav-icon fas fa-user"></i> Log Out</a>
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
