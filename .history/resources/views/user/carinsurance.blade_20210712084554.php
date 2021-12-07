@extends('layouts.app')

@section('title', 'Car Insurance | ' . config('app.name'))

@section('content')

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
<form id="msform" method="POST" action="{{ route('cities-store') }}">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Get Started</li>
    <li>About Your Vehicle</li>
    <li>List of you like</li>
  </ul>
  <!-- fieldsets -->
<!-- Step 1 -->
  <fieldset>
    <h2 class="fs-title">Select Your Vehicle Category</h2>
    <div class="row">
	    <div class="col-md-4">
	    	<div class="vaicle-select">
		    	<input type="radio" checked="" name="vehicle" id="private">
					<label for="private">
					    <i class="fas fa-car" aria-hidden="true"></i>
					    <a>Private</a>
					</label>
				</div>
			</div>
			
	    <div class="col-md-4">
	    	<div class="vaicle-select">
		    	<input type="radio" name="vehicle" id="commercial">
					<label for="commercial">
					    <i class="fas fa-truck" aria-hidden="true"></i>
					    <a>Commercial</a>
					</label> 
				</div>
			</div>
			
	    <div class="col-md-4">
	    	<div class="vaicle-select">
		    	<input type="radio" name="vehicle" id="publicService">
					<label for="publicService">
					    <i class="fas fa-bus" aria-hidden="true"></i>
					    <a>Public Service Vehicle</a>
					</label> 
				</div>
			</div>
	  </div>
	  <br>
	  <br>
	  	<label style="float: left; padding-bottom: 10px;">Enter your mobile No</label>
    	<input type="text" name="pnoneNo" placeholder="+254 0722 123 456" required/>

	    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
<!-- Step 2 -->
  <fieldset>
    <h2 class="fs-title">Tell Us About Your Vehicle</h2>
    <input type="email" placeholder="Your Email" />
    <select name="" >
    	<option selected >Vehicle Type</option>
    	<option>Saloon</option>
    	<option>Pickup (Double Cabin)</option>
    	<option>Station Wagon</option>
    	<option>Hatchback</option>
    </select>

    <select name="" >
    	<option selected >Cover Type</option>
    	<option>Comprehensive</option>
    	<option>Third Party</option>
    	<option>Third Party Fire & Theft</option>	
    </select>
    <input type="text" placeholder="Vehicle Value" />
    <input type="text" placeholder="Registration" />

    <input type="button" class="previous action-button" value="Previous" />
    <input type="button" class="next action-button" value="Get Quote" />
  </fieldset>
<!-- Step 3 -->
  <fieldset>
    <table>
    	
    </table>

    <table class="table table-striped border table-responsive">
		  <thead class="" style="background: #007EE5; color: #fff;">
		    <tr>
		    	<th>INSURANCE COMPANY</th>
		    	<th>RATE</th>
		    	<th>BENEFITS</th>
		    	<th>PREMIUM (KSH)</th>
		    	<th>BUY</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    	<td>Company 1</td>
		    	<td>3.6</td>
		    	<td><a href="#">ADD/VIEW</a></td>
		    	<td>Ksh. 20,130</td>
		    	<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
		    </tr>
		    <tr>
		    	<td>Company 2</td>
		    	<td>5.0</td>
		    	<td><a href="#">ADD/VIEW</a></td>
		    	<td>Ksh. 20,130</td>
		    	<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
		    </tr>
		    <tr>
		    	<td>Company 3</td>
		    	<td>5.6</td>
		    	<td><a href="#">ADD/VIEW</a></td>
		    	<td>Ksh. 20,130</td>
		    	<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
		    </tr>
		    <tr>
		    	<td>Company 4</td>
		    	<td>4.5</td>
		    	<td><a href="#">ADD/VIEW</a></td>
		    	<td>Ksh. 20,130</td>
		    	<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
		    </tr>
		    <tr>
		    	<td>Company 5</td>
		    	<td>3.2</td>
		    	<td><a href="#">ADD/VIEW</a></td>
		    	<td>Ksh. 20,130</td>
		    	<td><button>BUY NOW <i class="fas fa-cart-plus"></i></button></td>
		    </tr>
		  </tbody>
		</table>


    <input type="button" name="previous" class="previous action-button" value="Previous" />
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
</script>

@endsection