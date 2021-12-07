@extends('layouts.app')
 
@section('content')
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
					<form method="POST" action="{{ route('contact-us-store') }}">

					  <div class="mb-4">
					    <label for="name" class="form-label">Name</label>
					    <input type="text" placeholder="Your name" class="form-control" id="name">
					  </div>

					  <div class="mb-4">
					    <label for="email" class="form-label">Email</label>
					    <input type="email" name="email" placeholder="Your Email" class="form-control" id="email">
					  </div>

					  <div class="mb-4">
					    <label for="subject" class="form-label">Subject</label>
					    <input type="text" name="subject" placeholder="Your subject" class="form-control" id="subject">
					  </div>

					  <div class="mb-4">
					    <label for="message" class="form-label">Message</label>
					    <textarea rows="8" name= class="form-control"></textarea>
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