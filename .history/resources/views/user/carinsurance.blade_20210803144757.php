<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Carbazaar | Car Isurance </title> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" href="{{ asset('img/carbazaar.png') }}" type="image/x-icon"/>
        <!-- All css file -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('webfonts/flaticon/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>	
<style>
/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	/*Image only BG fallback*/
	
	/*background = gradient + image pattern combo*/
	background: 
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
}

body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
  width: 90%;
  margin: 0px auto 50px;
  text-align: center;
  position: relative;
  padding-top: 100px;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea, select {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
	outline: none;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #007EE5;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #007EE5;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
    list-style-type: none;
    color: #007ee5;
    text-transform: uppercase;
    font-size: 10px;
    width: 33.33%;
    float: left;
    position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #007ee5;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 80%;
	height: 2px;
	background: white;
	position: absolute;
	left: -40%;
	top: 9px;
	z-index: 0; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #007EE5;
	color: white;
}
.vaicle-select input[type="radio"]{
    -webkit-appearance: none;
    border: none !important;
    padding: 0 !important;
}
.vaicle-select label{
   height: 110px;
   width: 260px;
   border: 1px solid #007EE5;
   margin: auto;
   border-radius: 10px;
   position: relative;
   color: #007EE5;
   transition: 0.5s;
}
.vaicle-select .fas {
    font-size: 60px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -80%);
}
.vaicle-select label>a {
    font-size: 16px;
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    margin-top: 70px;
    display: inline-block;
}
.vaicle-select input[type="radio"]:checked + label {
	background-color: #007EE5;
	color: #ffffff;
	box-shadow: 0 15px 45px rgb(24,249,141,0.2);
}
.vaicle-select input[type="radio"]:checked a {
	color: #ffffff;
}

</style>
</head>
<body>
	<!-- ****** Header start ****** -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light ">
					<div class="container-fluid">
						<a class="navbar-brand" href="/"><img src="img/carbazaar.png"></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
							<a class="nav-link"href="{{ route('search-cars') }}">Search Cars</a>
							</li>
							<li class="nav-item">
							<a class="nav-link"href="{{ route('sell-car') }}">Sell your car</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="{{ route('car-insurance') }}">Car insurance</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="{{ route('about-us') }}">About us</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="{{ route('contact-us') }}">Contact us</a>
							</li>
						</ul>
						
						<div class="d-flex">
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-user"></i>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								@php()
									$isAdmin = User::where('role', 'admin');
								@endphp

								
								@guest()
									<li><a class="dropdown-item" href="{{ route('login')}}">Login</a></li>
									<li><a class="dropdown-item" href="{{ route('register')}}">Register</a></li>
								@else
									
									<li><a class="dropdown-item" href="profile">Account</a></li>
									<li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
								@endguest
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
				<li class="breadcrumb-item active" aria-current="page">Car Insurance</li>
				</ol>
			</nav>
			<h3>Car Insurance</h3>
			</div>
		</div>
		</div>
	</div>
	<!-- breadcrumb End-->

	<section class="insurance-heading">
		<img class="w-100" src="img/insurance-image-6d81299a0e.jpg">
	</section>

	<!-- multistep form -->
	<div class="multi-step-form bg-light">
		<form id="msform" method="POST" action="{{ route('sell-insurance-store') }}">
			@csrf
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active">Get Started</li>
				<li>About Your Vehicle</li>
				<li>Your Vehicle's Details</li>
			</ul>


			<!-- fieldsets -->

			<!-- STEP 1 -->
			<fieldset>
				
				<!-- VEHICLE CATEGORY -->
				<h2 class="fs-title">Select Your Vehicle Category</h2>
				<div class="row">
					<!-- Private Vehicle -->
					<div class="col-md-4">
						<div class="vaicle-select">
							<input type="radio" checked="" name="vehicle_category" id="private" value="Private Vehicle" class="vehicle-category">
							
							<label for="private">
								<i class="fas fa-car" aria-hidden="true"></i>
								<a>Private</a>
							</label>
						</div>
					</div>
						
					<!-- Commercial Vehicle -->
					<div class="col-md-4">
						<div class="vaicle-select">
							<input type="radio" name="vehicle_category" id="commercial" value="Commercial Vehicle" class="vehicle-category">
							
							<label for="commercial">
								<i class="fas fa-truck" aria-hidden="true"></i>
								<a>Commercial</a>
							</label> 
						</div>
					</div>
						
					<!-- Public Service Vehicle -->
					<div class="col-md-4">
						<div class="vaicle-select">
							<input type="radio" name="vehicle_category" id="publicService" value="Public Service Vehicle" class="vehicle-category">

							<label for="publicService">
								<i class="fas fa-bus" aria-hidden="true"></i>
								<a>Public Service Vehicle</a>
							</label> 
						</div>
					</div>
				</div>
				<br>
				<br>

				<!-- Phone -->
				<label style="float: left; padding-bottom: 10px;">Enter your mobile No</label>
				<input type="text" id="phone" name="mobile" placeholder="+254 0722 123 456" />

				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>

			<!-- STEP 2 -->
			<fieldset>
				<h2 class="fs-title">Tell Us About Your Vehicle</h2>
				
				<!-- Email -->
				<input type="email" id="email" name="email" placeholder="Your Email" />
				
				<!-- Vehicle Type -->
				<select name="vehicle_type" required>
					<option selected >Vehicle Type</option>
					@foreach ($carBodies as $body)
						<option id="vehicle-type" value="{{ $body->id }}" {{ $body->id == old('bodyId') ? 'selected' : ''}}>
								{{ ucwords($body->name) }}
						</option>
					@endforeach
				</select>

				@error('bodyId')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror

				<!-- Cover Type -->
				<select name="cover_type" required>
					<option selected >Cover Type</option>
					@foreach ($coverTypes as $cover)
						<option id="cover-type" value="{{ $cover->id }}" {{ $cover->id == old('coverId') ? 'selected' : ''}}>
								{{ ucwords($cover->name) }}
						</option>
					@endforeach
				</select>

				@error('coverId')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror

				<!-- Vehicle Value -->
				<input type="text" id="vehicle-value" name="vehicle_value" placeholder="Vehicle Value" />

				<!-- Reg No -->
				<input type="text" id="reg-no" name="vehicle_registration" placeholder="Registration" />

				<input type="button" class="previous action-button" value="Previous" />
				<input type="button" class="next action-button" value="Get Quote" />
			</fieldset>

			<!-- STEP 3 -->
			<fieldset>
				<table class="table table-striped border table-responsive">
					<thead class="" style="background: #007EE5; color: #fff;">
						<tr>
							<th>REGISTRATION NO.</th>
							<th>VEHICLE TYPE</th>
							<th>YOUR PHONE</th>
							<th>COVER TYPE</th>
							<th>VEHICLE CATEGORY</th>
							<th>VEHICLE VALUE</th>
							<th>YOUR EMAIL</th>
						</tr>
					</thead>

					<tbody>
						<!-- VEHICLE DETAILS -->
						<tr>
							<!-- Registration Number -->
							<td>
								<span id="reg-no-out"></span>
							</td>

							<!-- Vehicle Type -->
							<td>
								<span id="vehicle-type-out"></span>
							</td>

							<!-- Your Phone -->
							<td>
								<span id="phone-out"></span>
							</td>

							<!-- Cover Type -->
							<td>
								<span id="cover-type-out"></span>
							</td>

							<!-- Vehicle Category -->
							<td>
								<span id="vehicle-category-out"></span>
							</td>

							<!-- Vehicle Value -->
							<td>
								<span id="vehicle-value-out"></span>
							</td>

							<!-- Your Email -->
							<td>
								<span id="email-out"></span>
							</td>
						</tr>

						<!-- Vehicle 2 -->
						<tr>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" id="" value="">
							</td>
							<td>3.6</td>
							<td><a href="#">ADD/VIEW</a></td>
							<td>Ksh. 20,130</td>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" value="">
							</td>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" value="">
							</td>
							<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
						</tr>
						
						<!-- Vehicle 3 -->
						<tr>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" id="" value="">
							</td>
							<td>3.6</td>
							<td><a href="#">ADD/VIEW</a></td>
							<td>Ksh. 20,130</td>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" value="">
							</td>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" value="">
							</td>
							<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
						</tr>
						
						<!-- Vehicle 4 -->
						<tr>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" id="" value="">
							</td>
							<td>3.6</td>
							<td><a href="#">ADD/VIEW</a></td>
							<td>Ksh. 20,130</td>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" value="">
							</td>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" value="">
							</td>
							<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
						</tr>
						
						<!-- Vehicle 5 -->
						<tr>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" id="" value="">
							</td>
							<td>3.6</td>
							<td><a href="#">ADD/VIEW</a></td>
							<td>Ksh. 20,130</td>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" value="">
							</td>
							<td>
								<input type="text" class="form-control" name="vehicle_registration" value="">
							</td>
							<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
						</tr>
					</tbody>
					</table>


				<input type="button" name="previous" class="previous action-button" value="Previous" />

				<button type="submit" class="action-button">Submit</button>
			</fieldset>
		</form>
	</div>

	<!-- five-reasons Start-->
	<div class="five-reasons pt-5 pb-5">
		<div class="container-fluid">
			<h2 class="text-center pb-5 pt-4">5 Reasons to insure your car via Cheki</h2>
			<div class="row offset-md-1">
				<div class="col-md-2 text-center">
					<div class="c-icon">
						<i class="fas fa-dollar-sign"></i>
					</div>
					<p>Quick low cost comprehensive Kenyan car insurance</p>
				</div>
				<div class="col-md-2 text-center">
					<div class="c-icon">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<p>Choose from a range of motor insurance providers and policies</p>
				</div>
				<div class="col-md-2 text-center">
					<div class="c-icon">
						<i class="far fa-smile"></i>
					</div>
					<p>Our car insurers are selected for fast and friendly claims processes</p>
				</div>
				<div class="col-md-2 text-center">
					<div class="c-icon">
						<i class="bi bi-cloud-sun"></i>
					</div>
					<p>Get your Kenyan Compulsory Third Party the same day you buy your car and drive away</p>
				</div>
				<div class="col-md-2 text-center">
					<div class="c-icon">
						<i class="far fa-thumbs-up"></i>
					</div>
					<p>Hassle-free Kenyan comprehensive car insurance</p>
				</div>
			</div>
		</div>
	</div>
	<!-- five-reasons End-->

	<!-- Social Share button Start-->
	<div class="a2a_kit a2a_kit_size_32 a2a_default_style pb-4" data-a2a-url="https://carbazaar.co.ke/">
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
	<script>

	//jQuery time
	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches

	$(".next").click(function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		next_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
			'transform': 'scale('+scale+')',
			'position': 'absolute'
		});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".previous").click(function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		
		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		
		//show the previous fieldset
		previous_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'left': left});
				previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".submit").click(function(){
		return false;
	})


	//display insurance data before submit
		//phone
	$( "#phone" ).keyup(function() {
		var value = $( this ).val();
		$( "#phone-out" ).text( value );
	}).keyup();
  
		//reg no
	$( "#reg-no" ).keyup(function() {
		var value = $( this ).val();
		$( "#reg-no-out" ).text( value );
	}).keyup();

		//vehicle type
	$( "#vehicle-type" ).keyup(function() {
		var value = $( this ).val();
		$( "#vehicle-type-out" ).text( value );
	}).keyup();

		//email
	$( "#email" ).keyup(function() {
		var value = $( this ).val();
		$( "#email-out" ).text( value );
	}).keyup();

		//cover type
	$( "#cover-type" ).keyup(function() {
		var value = $( this ).val();
		$( "#cover-type-out" ).text( value );
	}).keyup();

		//vehicle value
	$( "#vehicle-value" ).keyup(function() {
		var value = $( this ).val();
		$( "#vehicle-value-out" ).text( value );
	}).keyup();

		//vehicle category
	$( ".vehicle-category" ).keyup(function() {
		var value = $( this ).val();
		$( "#vehicle-category-out" ).text( value );
	}).keyup();
	</script>
</body>
</html>