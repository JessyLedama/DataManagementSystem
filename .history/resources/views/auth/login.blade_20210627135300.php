<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>CarBazaar | Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" href="img/carbazaar.png" type="image/x-icon"/>
	<!-- All css file -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/select2.min.css" />
	<link rel="stylesheet" href="webfonts/flaticon/flaticon.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/dropzone.css" />
	<link rel="stylesheet" href="css/style.css">

</head>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />




<body>
	
    <!-- ****** Header start ****** -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="img/carbazaar.png"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link"href="search-cars.html">Search Cars</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link"href="sell-your-car.html">Sell your car</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="car-insurance.html">Car insurance</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="about-us.html">About us</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="contact-us.html">Contact us</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="dashboard/index.html">Account</a></li>
                                <li><a class="dropdown-item" href="login.html">Log Out</a></li>
                                <li><a class="dropdown-item" href="register.html">Register</a></li>
                            </ul>
                            </li>
                        </div>
                        </div>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header end ****** -->


    <!-- breadcrumb Start-->
    <div class="breadcrumb-area bg-light p-5">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                    </nav>
                    <h3>Login</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcrumb end ****** -->

    <!-- ****** Login start ****** -->
    <div class="login-area bg-light pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="myForm login-form mb-5">
                        
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-5">
                            <label class="form-label" for="email" :value="__('Email')">Email or Phone</label>
                            <input type="text" placeholder="Your Email or Phone" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="password" :value="__('password')">Password</label>
                            <input type="password" placeholder="Your Password" class="form-control" id="password" name="password" :value="old('password')" required>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                
                                <div class="col-md-6 forget-pass">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot password?</a>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                        <button type="submit">Submit</button>
                        </form>
                        
                        <p class="text-center pt-4 mb-0"><a href="{{ route('register') }}">Sign up for an account.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Login End ****** -->






    <!-- Social Share button Start-->
	<div class="a2a_kit a2a_kit_size_32 a2a_default_style pb-4 pt-4" data-a2a-url="https://carbazaar.co.ke/">
		<a class="a2a_button_facebook"></a>
		<a class="a2a_button_twitter"></a>
		<a class="a2a_button_whatsapp"></a>
		<a class="a2a_button_linkedin"></a>
		<a class="a2a_button_email"></a>
		<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
	</div>
	<script>
	var a2a_config = a2a_config || {};
	a2a_config.onclick = 1;
	</script>
	<script async src="https://static.addtoany.com/menu/page.js"></script>

	<!-- Social Share button End-->

	<!-- Footer area Start -->
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="foot-content-1">
						<img src="img/carbazaar.png">
						<p>Discover a wide variety of quality new and used Cars in Kenya. Contact trusted sellers today on Kenya's safest Cars classifieds.</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="foot-content-2">
						<h4>Follow Us</h4>
						<p><i class="fab fa-facebook-f"></i> <span>Facebook</span></p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="foot-content-3">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="#">Sell Your Car</a></li>
							<li><a href="#">Register</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">About Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="foot-content-4">
						<h4>Signup for Weekly Newsletter</h4>
						<p>We may send you information about latest bargains, insurance tips and much more.</p>
						<form action="">
							<input type="email" name="">
							<button type="submit">submit</button>
						</form>
						<p class="copyright">Copyright 2021 © CarBazaar Kenya Limited. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer area End -->

    <!-- All javascript file -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/flexslider-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
