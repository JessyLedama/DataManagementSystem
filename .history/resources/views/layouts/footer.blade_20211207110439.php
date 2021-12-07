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
							<li><a href="{{route('sell-car')}}">Sell Your Car</a></li>
							<li><a href="{{route('register')}}">Register</a></li>
							<li><a href="{{route('login')}}">Login</a></li>
							<li><a href="{{route('contact-us')}}">Contact Us</a></li>
							<li><a href="{{route('about-us')}} ">About Us</a></li>
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
						<p class="copyright">Copyright 2021 © Azimio. All Rights Reserved.</p>
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

$(".alert").delay(4000).slideUp(200, function() {
    $(this).alert('close');
});
</script>
</body>
</html>
