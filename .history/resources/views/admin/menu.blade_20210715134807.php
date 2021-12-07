
<aside class="card pull-left">
    <ul>
        <li>
            <a href="{{ route('settings') }}">
                Settings
            </a>
        </li> 

        

        <!-- My Account -->
        <li>
            <a href="{{ route('profile') }}">
                My Account
            </a>
        </li> 
        
        <!-- Car Insurance Requests -->
        <li>
            <div data-toggle="categories-sub-menu" class="toggle-sub-menu clearfix">
                <span class="pull-left">
                    Car Insurance Requests
                </span>

                <span class="pull-right toggle-icon">
                    <i class="lni-chevron-down"></i>
                </span>
            </div>

            <ul id="categories-sub-menu" class="sub-menu">
                <li>
                    <a href="{{ route('insurance-requests-list') }}">
                        All Car Insurance Requests
                    </a>
                </li>
            </ul>
        </li>

        <!-- Vehicle Transfer -->
        <li>
            <a href="{{ route('vehicle-transfer-create') }}">
                Vehicle Transfer
            </a>
        </li>
        
        <!-- Logbook Car Search -->
        <li>
            <a href="{{ route('logbook-car-search-create') }}">
                Logbook Car Search
            </a>
        </li>

        <!-- Mileage Verification -->
        <li>
            <a href="{{ route('mileage-verification-create') }}">
                Mileage Verification
            </a>
        </li>
        
        <li id="dashboard-sign-out">
            <a onclick="document.getElementById('customer-logout-form').submit()">
                Sign out
            </a>
        </li>
    </ul>

    <!-- logout form -->
    <form id="customer-logout-form" action="{{ route('logout') }}" method="POST">

        @csrf

    </form>
</aside>

<script>
    jQuery(document).ready(function ($) {

        // Toggle drop down sub-menu
        $('.toggle-sub-menu').click(function () {

            $(`*[data-toggle="${$(this).attr('data-toggle')}"] .toggle-icon`).toggleClass('drop');

            $('#' + $(this).attr('data-toggle')).fadeToggle();
        });

        // Show dropdown with current page link
        switch ('{{ url()->current() }}') {

            case "{{ route('all-users') }}":
            case "{{ route('create-user') }}":

                $('#categories-sub-menu').css('display', 'block');
                $('*[data-toggle="categories-sub-menu"], #categories-sub-menu').addClass('link-active');
                break;

            case "{{ route('profile') }}":

                $('#subcategories-sub-menu').css('display', 'block');
                $('*[data-toggle="subcategories-sub-menu"], #subcategories-sub-menu').addClass('link-active');
                break;

            
        }

        // Highlight cuurent page link
        $(`a[href="{{ url()->current() }}"]`).addClass('link-active');

        // Invert drop-down icon for active link
        $('.toggle-sub-menu.link-active .toggle-icon').toggleClass('drop')
    });
</script>


















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
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="dist/css/style.css">
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
        <a href="../sell-your-car.html" class="nav-link btn btn-success" style="color: white; text-transform: uppercase;">Sell your car</a>
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
      <img src="../img/carbazaar.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Carbazaar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="../index.html" class="nav-link">
              <i class="nav-icon fas fa-long-arrow-alt-left"></i>
              <p>
                Back to Home
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="edit-profile.html" class="nav-link">
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Edit Profile
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="my-message.html" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                My Messages
              </p>
            </a>
          </li>

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
                   
          <li class="nav-item">
            <a href="my-ratings.html" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                My Ratings
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-5 p-md-3">
    <!-- Main content -->
      <section class="content">
        <div class="dashboard-overview">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>150</h3>
                    <p>Featured Posts</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-server"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>53</h3>

                    <p>Active</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>44</h3>

                    <p>Expire</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-exclamation-triangle"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>65</h3>

                    <p>Sold</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->

          </div><!-- /.container-fluid -->
        </div>
      </section>
    <!-- /.content -->

    <!-- most-viewed-posts -->
    <div class="most-viewed-posts mt-4">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-8">
              <div class="dashboard-overview p-4">
                <div class="row">
                  <div class="col-lg-6">
                    <h4>Most Viewed Posts</h4>
                  </div>
                  <div class="col-lg-6 text-lg-right">
                    <a href="#">View All Posts</a>
                  </div>
                  <div class="col-lg-12 post-view-content bg-light pt-3 pb-3">
                    <p class="text-gray">No Inventory Found</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    </div>
    <!-- /.content -->

    <!-- most-viewed-posts -->
    <div class="most-recent-reviews mt-4">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-8">
              <div class="dashboard-overview p-4">
                <div class="row">
                  <div class="col-lg-6">
                    <h4>Most Viewed Posts</h4>
                  </div>
                  <div class="col-lg-6 text-lg-right">
                    <a href="#">Most Recent Reviews</a>
                  </div>
                  <div class="col-lg-12 post-view-content">
                    <div class="no-review">
                      <i class="fas fa-exclamation-circle"></i>
                      <h4>Most Recent Reviews</h4>
                      <p>Be the first one to post a review.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    </div>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; CarBazaar Kenya Limited. All Rights Reserved. Compare Ads
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
