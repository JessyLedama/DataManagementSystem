<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
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
	          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
	        </ol>
	      </nav>
	      <h3>Contact Us</h3>
	    </div>
	  </div>
	</div>
</div>
<!-- breadcrumb End-->

<!-- ****** Contact start ****** -->
<div class="contact-area bg-light pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="myForm contact-form mb-5">
					<form>

					  <div class="mb-4">
					    <label for="name" class="form-label">Name</label>
					    <input type="text" placeholder="Your name" class="form-control" id="name">
					  </div>

					  <div class="mb-4">
					    <label for="email" class="form-label">Email</label>
					    <input type="email" placeholder="Your Email" class="form-control" id="email">
					  </div>

					  <div class="mb-4">
					    <label for="subject" class="form-label">Subject</label>
					    <input type="text" placeholder="Your subject" class="form-control" id="subject">
					  </div>

					  <div class="mb-4">
					    <label for="message" class="form-label">Message</label>
					    <textarea rows="8" class="form-control"></textarea>
					  </div>

					  <button type="submit">Send</button>

					</form>
				</div>
			</div>

			<div class="col-md-6">
				<div class="contact-info">
					<p><i class="fas fa-map-marker-alt"></i> Aqua Plaza, Muranga road, Ngara</i></p>
					<p><i class="fas fa-phone"></i> 0710 88 49 73 - Office</i></p>
					<p><i class="fas fa-envelope"></i> support@carbazaar.co.ke</i></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ****** Contact End ****** -->
@endsection