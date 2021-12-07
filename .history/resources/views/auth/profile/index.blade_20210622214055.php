<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CarBazaar | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') ">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') ">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') ">
  <!-- style css -->
  <link rel="stylesheet" href="{{ asset('dist/css/style.css') ">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../img/carbazaar.png" alt="">
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
            <!-- Edit profile title -->
            <div class="edit-profile-title">
              <div class="row">
                <div class="col-lg-6">
                  <h4>Edit Profile</h4>
                  <p class="text-gray">Last logged in 3 hours Ago</p>
                </div>
                <div class="col-lg-6 text-lg-right">
                  <a style="cursor: pointer;" class="text-gray" data-toggle="modal" data-target="#exampleModal">Change Password</a>

                  <!-- Change password modal -->
              <div class="change-password">
                 <!-- Modal -->
                  <div class="modal fade text-lg-left" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Password Change</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="mb-3">
                              <label for="cpass">Current Password</label>
                              <input type="password" id="cpass" class="form-control" placeholder="Current Password" name="">
                            </div>
                            
                            <div class="mb-3">
                              <label for="npass">New Password</label>
                              <input type="password" id="npass" class="form-control" placeholder="New Password" name="">
                            </div>
                            
                            <div class="mb-3">
                              <label for="cnpass">Confirm New Password</label>
                              <input type="password" id="cnpass" class="form-control" placeholder="Confirm New Password" name="">
                            </div>
                            <span>
                              <button type="submit">Rest My Password</button>
                            </span>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
                  

                </div>
              </div>
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- Edit profile Left -->
              <div class="col-lg-4">
                <div class="profile-left mt-4 card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle" src="../img/avatar.png" alt="User profile picture"> 
                      <p class="mt-4" style="font-weight: 500;">My Name</p>

                      <p><input type="file" name="" id="photo"> <label class="photo-label" for="photo">Change Photo</label></p>
                    </div>
                  </div>
                </div>
                  <!-- /.card-body -->
                <div class="profile-left mt-4 card card-primary card-outline">
                  <div class="card-body profile-details">
                    <div style="height:50px;">
                      <i class="fas fa-user mr-1"></i> 
                      <p>Full Name <br>
                      <span>JH Seam</span></p>
                    </div>
                    
                    <div style="height:50px;">
                      <i class="far fa-envelope mr-1"></i> 
                      <p>Email<br>
                      <span>bpi.cmt.seam@gmail.com</span></p>
                    </div>

                    <div style="height:50px;">
                      <i class="fas fa-mobile-alt mr-1"></i> 
                      <p>Phone number<br>
                      <span>01632001289</span></p>
                    </div>

                    <div style="height:50px;">
                      <i class="fas fa-globe-europe mr-1"></i> 
                      <p>Website Address<br>
                      <span> </span></p>
                    </div>

                    <div style="height:50px;">
                      <i class="fas fa-map-marker-alt mr-1"></i> 
                      <p>Location<br>
                      <span></span></p>
                    </div>

                    <div style="height:50px;">
                      <i class="fas fa-user-friends mr-1"></i> 
                      <p>Account Type<br>
                      <span>Dealer</span></p>
                    </div>

                  </div>

                </div>
            
              </div>
              <!-- Edit profile Right -->
              <div class="col-lg-8">
                <div class="edit-profile-right p-3">

                  <div class="row">
                    <div class="col-lg-6">
                      
                      <div class="mb-4">
                        <label class="form-label" for="fname">Full Name</label>
                        <input type="text" name="" class="form-control" id="fname">
                      </div>
                      
                      <div class="mb-4">
                        <label class="form-label" for="mobile">Mobile No</label>
                        <input type="text" name="" class="form-control" id="mobile">
                      </div>

                    </div>
                    <div class="col-lg-6">

                      <div class="mb-4">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="text" name="" class="form-control" id="email">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <h5>Dealers Detail</h5>
                      <hr>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      
                      <div class="mb-4">
                        <label class="form-label" for="cname">Company Name</label>
                        <input type="text" name="" class="form-control" id="cname">
                      </div>
                      
                      <div class="mb-4">
                        <label class="form-label" for="License">License No.</label>
                        <input type="text" name="" class="form-control" id="License">
                      </div>

                      
                      <div class="mb-4">
                        <p>
                          <label>Store Front Image</label> <br>
                          <input type="file" name="" id="photo"> 
                          <label class="photo-label" for="photo">Change Photo</label>
                        </p>
                      </div>


                    </div>
                    <div class="col-lg-6">

                      <div class="mb-4">
                        <label class="form-label" for="url">Website URL</label>
                        <input type="text" name="" class="form-control" id="url">
                      </div>

                      <div class="mb-4">
                        <label class="form-label" for="Opening">Opening Hours</label>
                        <input type="text" placeholder="e.g Monday - Friday 8am to 6pm" name="" class="form-control" id="Opening">
                      </div>

                      <div class="mb-4">
                        <label class="form-label" for="address">Address</label>
                        <input placeholder="Enter a location" type="text" name="" class="form-control" id="address">
                      </div>

                    </div>

                    <div class="col-lg-12">
                      <label class="form-label" for="address">About Yourself</label>
                      <textarea class="form-control" rows="7"></textarea>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <h5 class="mt-4">Dealers Detail</h5>
                      <hr>
                    </div>

                    <div class="col-lg-6">

                      <div class="mb-4">
                        <label class="form-label" for="fb">Facebook Link</label>
                        <input type="text" name="" class="form-control" id="fb">
                      </div>

                      <div class="mb-4">
                        <label class="form-label" for="ln">LinkedIn Profile</label>
                        <input type="text" name="" class="form-control" id="ln">
                      </div>

                    </div>

                    <div class="col-lg-6">

                      <div class="mb-4">
                        <label class="form-label" for="tw">Twitter Link</label>
                        <input type="text" name="" class="form-control" id="tw">
                      </div>

                      <div class="mb-4">
                        <label class="form-label" for="youtube">Youtube Channel</label>
                        <input type="text" name="" class="form-control" id="youtube">
                      </div>

                    </div>

                  </div>

                  <div class="row">
                    <div class="col-lg-6 text-lg-left">
                      <button type="submit" class="delete-btn">delete account</button>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                      <button type="submit" class="update-btn">update profile</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div><!-- /.container-fluid -->
        </div>
      </section>
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
