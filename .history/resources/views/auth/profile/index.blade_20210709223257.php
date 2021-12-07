

@extends('layouts.app')
 
@section('content')
<!-- breadcrumb Start-->
<div class="breadcrumb-area bg-light p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>

                <h3>Update Profile</h3>
            </div>

            <!-- <div class="col-md-4">
                <img src="{{ asset('/storage/'.$user->profile) }}">
            </div> -->
        </div>
    </div>
</div>
<!-- ****** Breadcrumb end ****** -->

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
@if (session()->has('success'))
    <span class="alert alert-success">
        {{ session()->get('success') }}
    </span>
@endif 
    <div class="login-area register-area bg-light pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                
                    <div class="login-form myForm register-form mb-5">
                        <form action="{{ route('profileUpdate') }}" method="post" id="edit-profile-form" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                
                                <!-- <div class="col-md-12">
                                    <h4>Profile Picture</h4>

                                    <input type="file" name="profile" accept="image/*" required>
                                </div> -->
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="mb-3">
                                        
                                            <label for="name" class="form-label" :value="__('Name')">Name</label>
                                            <input type="text" name="name" placeholder="Your Name" class="form-control" id="name" value="{{ old('name', $user->name) }}" required autofocus>
                                        </div>
                                        
                                        <label for="email" class="form-label" :value="__('Email')">Email</label>
                                        <input type="email" name="email" placeholder="Your Email" class="form-control" id="email" value="{{ old('email', $user->email) }}" required>

                                        <label for="phone" class="form-label" :value="__('phone')">Contact Number</label>
                                        <input type="text" name="phone" placeholder="Your Contact Number" class="form-control" id="number" value="{{ old('phone', $user->phone) }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    
                                    <div class="mb-3">
                                        <label for="password" class="form-label" :value="__('password')">Password</label>
                                        <input type="password" name="password" placeholder="Your Password" class="form-control" id="password" :value="{{ old('password', $user->password) }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
                                        <input type="password" name="password_confirmation" placeholder="Your Password" class="form-control" id="password" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit">Update Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
<script type="text/javascript">
	// owl-carousel
$('.owl-carousel').owlCarousel({
    stagePadding: 15,
    loop:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        }
    },
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
</script>
</body>
</html>


@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/profile.css') }}">
@endsection