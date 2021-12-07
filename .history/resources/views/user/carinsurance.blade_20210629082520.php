@extends('layouts.app')
 
@section('content')
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
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Get Start</li>
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
    	<input type="text" name="pnoneNo" placeholder="+254 0722 123 456" />

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



