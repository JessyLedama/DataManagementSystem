@extends('layouts.app')
 
@section('content')
	<!-- Banner Area Start -->
	<section class="banner-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- search-box start -->
					<div class="search-box text-center">
						<h1>Find a great deal near you </h1>


						<div class="search-form">
							<form method="">
								<button type="submit" name="search"><i class="fas fa-search"></i></button>
								<input type="text" name="search" placeholder="Search here...">
							</form>
						</div>
					</div>
					<!-- search-box end -->
				</div>
			</div>
		</div>
		
	</section>
	<!-- Banner Area End -->

	<!-- Slider area Start -->
	<div class="slider-area">
		<div class="flexslider">
		  <ul class="slides">
		    <li data-thumb="{{ asset('img/slide/slide1.jpg') }}">
		      <img src="{{ asset('img/slide/slide1.jpg') }}" />
		      <div class="img-cta">
		      	<p>Photo Sponsored By</p>
		      	<h3>2022 Mitsubishi Outlander</h3>
		      	<a href="#">Learn More ></a>
		      </div>
		    </li>
		    <li data-thumb="{{ asset('img/slide/slide2.jpg') }}">
		      <img src="{{ asset('img/slide/slide2.jpg') }}" />
		      <div class="img-cta">
		      	<p>Photo Sponsored By</p>
		      	<h3>2022 Mitsubishi Outlander</h3>
		      	<a href="#">Learn More ></a>
		      </div>
		    </li>
		    <li data-thumb="{{ asset('img/slide/slide3.jpg') }}">
		      <img src="{{ asset('img/slide/slide3.jpg') }}" />
		      <div class="img-cta">
		      	<p>Photo Sponsored By</p>
		      	<h3>2022 Mitsubishi Outlander</h3>
		      	<a href="#">Learn More ></a>
		      </div>
		    </li>
		    <li data-thumb="{{ asset('img/slide/slide2.jpg') }}">
		      <img src="{{ asset('img/slide/slide2.jpg') }}" />
		      <div class="img-cta">
		      	<p>Photo Sponsored By</p>
		      	<h3>2022 Mitsubishi Outlander</h3>
		      	<a href="#">Learn More ></a>
		      </div>
		    </li>
		  </ul>
		</div>
	</div>
	<!-- Slider area End -->

	@if (session()->has('success'))
		<span class="alert alert-success">
			{{ session('success') }}
		</span>
	@endif
	
	<!-- Featured section start -->
	<section class="featured pb-5 pt-5">
		<div class="featured-title text-center pb-3">
			<h1 class="devider-shape">Latest <span style="color: #00BF8F">Featured</span>  Cars</h1>
			<p class="pt-5">Find latest cars from our trusted sellers.</p>
		</div>
		<div class="owl-carousel owl-theme">
		    <div class="item">
		    	<!-- Featured single item start -->
		    	<div class="featured-item">
		    		<div class="f-image">
		    			<img src="img/featured/IMG-20210417-WA0102-360x270.jpg">
		    			<div class="price-tag">
		    				<span>Kshs. 760,000 <span style="font-size: 14px;font-weight: 400">(Negotiable)</span></span>
		    			</div>
			    	</div>
			    	<div class="featured-content">
			    		<div class="category-title">
			    			<a href="#" class="padding-cats txt-hover">Mercedes</a>
			    			<a href="#" class="padding-cats txt-hover">B-class</a>
			    		</div>
			    		<div class="featured-desc">
			    			<h3><a class="txt-hover" href="#">TOYOTA LANDCRUISER J...</a></h3>
				    		<p class="location"><i class="flaticon-maps-and-flags"></i> <a class="txt-hover" href="#">Mombasa</a></p>
				    		<ul>
				    			<li><i class="flaticon-petrol"></i> Petrol</li>
				    			<li><i class="flaticon-dashboard"></i> 167,000 km</li>
				    			<li><i class="flaticon-engineering"></i> 1300 cc</li>
				    			<li><i class="flaticon-car"></i> Hatchback	</li>
				    			<li><i class="flaticon-gear"></i> Silver</li>
				    		</ul>
			    		</div>
		    		</div>
		    		<div class="featured-footer">
		    			<p><i class="flaticon-calendar"></i> <span>May 25, 2021</span></p>
		    			<ul>
		    				<li><a href="#"><i class="flaticon-like"></i></a></li>
		    				<li><a href="#"><i class="flaticon-send"></i></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<!-- Featured single item End -->
		    </div>

		    <div class="item">
		    	<!-- Featured single item start -->
		    	<div class="featured-item">
		    		<div class="f-image">
		    			<img src="img/featured/IMG-20210417-WA0115-360x270.jpg">
		    			<div class="price-tag">
		    				<span>Kshs. 760,000 <span style="font-size: 14px;font-weight: 400">(Negotiable)</span></span>
		    			</div>
			    	</div>
			    	<div class="featured-content">
			    		<div class="category-title">
			    			<a href="#" class="padding-cats txt-hover">Mercedes</a>
			    			<a href="#" class="padding-cats txt-hover">B-class</a>
			    		</div>
			    		<div class="featured-desc">
			    			<h3><a class="txt-hover" href="#">TOYOTA LANDCRUISER J...</a></h3>
				    		<p class="location"><i class="flaticon-maps-and-flags"></i> <a class="txt-hover" href="#">Mombasa</a></p>
				    		<ul>
				    			<li><i class="flaticon-petrol"></i> Petrol</li>
				    			<li><i class="flaticon-dashboard"></i> 167,000 km</li>
				    			<li><i class="flaticon-engineering"></i> 1300 cc</li>
				    			<li><i class="flaticon-car"></i> Hatchback	</li>
				    			<li><i class="flaticon-gear"></i> Silver</li>
				    		</ul>
			    		</div>
		    		</div>
		    		<div class="featured-footer">
		    			<p><i class="flaticon-calendar"></i> <span>May 25, 2021</span></p>
		    			<ul>
		    				<li><a href="#"><i class="flaticon-like"></i></a></li>
		    				<li><a href="#"><i class="flaticon-send"></i></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<!-- Featured single item End -->
		    </div>

		    <div class="item">
		    	<!-- Featured single item start -->
		    	<div class="featured-item">
		    		<div class="f-image">
		    			<img src="img/featured/IMG_20210518_123535-360x270.jpg">
		    			<div class="price-tag">
		    				<span>Kshs. 760,000 <span style="font-size: 14px;font-weight: 400">(Negotiable)</span></span>
		    			</div>
			    	</div>
			    	<div class="featured-content">
			    		<div class="category-title">
			    			<a href="#" class="padding-cats txt-hover">Mercedes</a>
			    			<a href="#" class="padding-cats txt-hover">B-class</a>
			    		</div>
			    		<div class="featured-desc">
			    			<h3><a class="txt-hover" href="#">TOYOTA LANDCRUISER J...</a></h3>
				    		<p class="location"><i class="flaticon-maps-and-flags"></i> <a class="txt-hover" href="#">Mombasa</a></p>
				    		<ul>
				    			<li><i class="flaticon-petrol"></i> Petrol</li>
				    			<li><i class="flaticon-dashboard"></i> 167,000 km</li>
				    			<li><i class="flaticon-engineering"></i> 1300 cc</li>
				    			<li><i class="flaticon-car"></i> Hatchback	</li>
				    			<li><i class="flaticon-gear"></i> Silver</li>
				    		</ul>
			    		</div>
		    		</div>
		    		<div class="featured-footer">
		    			<p><i class="flaticon-calendar"></i> <span>May 25, 2021</span></p>
		    			<ul>
		    				<li><a href="#"><i class="flaticon-like"></i></a></li>
		    				<li><a href="#"><i class="flaticon-send"></i></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<!-- Featured single item End -->
		    </div>

		    <div class="item">
		    	<!-- Featured single item start -->
		    	<div class="featured-item">
		    		<div class="f-image">
		    			<img src="img/featured/IMG_20210520_170137-360x270.jpg">
		    			<div class="price-tag">
		    				<span>Kshs. 760,000 <span style="font-size: 14px;font-weight: 400">(Negotiable)</span></span>
		    			</div>
			    	</div>
			    	<div class="featured-content">
			    		<div class="category-title">
			    			<a href="#" class="padding-cats txt-hover">Mercedes</a>
			    			<a href="#" class="padding-cats txt-hover">B-class</a>
			    		</div>
			    		<div class="featured-desc">
			    			<h3><a class="txt-hover" href="#">TOYOTA LANDCRUISER J...</a></h3>
				    		<p class="location"><i class="flaticon-maps-and-flags"></i> <a class="txt-hover" href="#">Mombasa</a></p>
				    		<ul>
				    			<li><i class="flaticon-petrol"></i> Petrol</li>
				    			<li><i class="flaticon-dashboard"></i> 167,000 km</li>
				    			<li><i class="flaticon-engineering"></i> 1300 cc</li>
				    			<li><i class="flaticon-car"></i> Hatchback	</li>
				    			<li><i class="flaticon-gear"></i> Silver</li>
				    		</ul>
			    		</div>
		    		</div>
		    		<div class="featured-footer">
		    			<p><i class="flaticon-calendar"></i> <span>May 25, 2021</span></p>
		    			<ul>
		    				<li><a href="#"><i class="flaticon-like"></i></a></li>
		    				<li><a href="#"><i class="flaticon-send"></i></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<!-- Featured single item End -->
		    </div>

		    <div class="item">
		    	<!-- Featured single item start -->
		    	<div class="featured-item">
		    		<div class="f-image">
		    			<img src="img/featured/IMG_20210520_171440-360x270.jpg">
		    			<div class="price-tag">
		    				<span>Kshs. 760,000 <span style="font-size: 14px;font-weight: 400">(Negotiable)</span></span>
		    			</div>
			    	</div>
			    	<div class="featured-content">
			    		<div class="category-title">
			    			<a href="#" class="padding-cats txt-hover">Mercedes</a>
			    			<a href="#" class="padding-cats txt-hover">B-class</a>
			    		</div>
			    		<div class="featured-desc">
			    			<h3><a class="txt-hover" href="#">TOYOTA LANDCRUISER J...</a></h3>
				    		<p class="location"><i class="flaticon-maps-and-flags"></i> <a class="txt-hover" href="#">Mombasa</a></p>
				    		<ul>
				    			<li><i class="flaticon-petrol"></i> Petrol</li>
				    			<li><i class="flaticon-dashboard"></i> 167,000 km</li>
				    			<li><i class="flaticon-engineering"></i> 1300 cc</li>
				    			<li><i class="flaticon-car"></i> Hatchback	</li>
				    			<li><i class="flaticon-gear"></i> Silver</li>
				    		</ul>
			    		</div>
		    		</div>
		    		<div class="featured-footer">
		    			<p><i class="flaticon-calendar"></i> <span>May 25, 2021</span></p>
		    			<ul>
		    				<li><a href="#"><i class="flaticon-like"></i></a></li>
		    				<li><a href="#"><i class="flaticon-send"></i></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<!-- Featured single item End -->

		    </div>

		</div>
	</section>
	<!-- Featured section End -->

	<!-- Buy section End -->
	<section class="buy">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="buy-item">
						<div class="buy-info">
							<h3>Want To Buy a Car ?</h3>
							<h2>Are you looking for a car?</h2>
							<p>Browse cars for sale. Shop the best deals near you on popular brands and body styles.</p>
						</div>
						<img class="wow slideInLeft" data-wow-duration="1.5s" src="img/sell.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="buy-item buy-item2">
						<div class="buy-info buy-info2">
							<h3>Want To Buy a Car ?</h3>
							<h2>Are you looking for a car?</h2>
							<p>Browse cars for sale. Shop the best deals near you on popular brands and body styles.</p>
						</div>
						<img class="wow slideInRight" data-wow-duration="1.5s" src="img/sell-1.png">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Buy section End -->

	<!-- Latest Car section Start -->
	<section class="latest-car pt-5">
		<div class="container">
			<div class="featured-title text-center pb-5 pt-5">
				<h1 class="devider-shape">Latest <span style="color: #00BF8F">Trending </span>Cars For Sale </h1>
			</div>
			
			<!-- latest-car-item -->
			<div class="latest-car-item">
				<div class="row">
					<div class="col-md-3">
						<!-- car-img-box -->
						<div class="car-img-box">
							<img src="img/latest/car1.jpg">
							<div class="car-avatar"><img src="img/avatar.png"></div>
							<div class="featured-search-icon">
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
							<div class="featured-total-img">
								<span>8 Photos</span>
							</div>
							<div class="overlay"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- latest-car-info -->
						<div class="latest-car-info">
							<h3>Nissan X-Trail</h3>
							<ul class="ad-meta-info">
								<li>
									<i class="flaticon-maps-and-flags"></i><a href="#">Nairobi</a>
								</li>
								<li>
									<i class="flaticon-calendar"></i><a href="#">May 28, 2021</a>
								</li>
							</ul>

							<ul class="ad-details">
								<li><i class="flaticon-petrol"></i> <span>Petrol</span></li>
								<li><i class="flaticon-dashboard"></i> <span>56,790 km</span></li>
								<li><i class="flaticon-engineering"></i> <span>2000 cc</span></li>
								<li><i class="flaticon-car"></i> <span>SUV</span></li>
								<li><i class="flaticon-gear"></i> <span>Black</span></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
						<!-- latest-car-right -->
						<div class="latest-car-right">
							<p>Ad Type : <span>Sell</span></p>
							<p>Condition : <span>New</span></p>
							<p>Visits : <span>5</span></p>
							<h3>Kshs. 2,450,000 <span>(Neg</span></h3>
							<a href="#"><i class="fas fa-eye"></i> view ad</a>
						</div>
					</div>
				</div>
			</div>
			
			<!-- latest-car-item -->
			<div class="latest-car-item">
				<div class="row">
					<div class="col-md-3">
						<!-- car-img-box -->
						<div class="car-img-box">
							<img src="img/latest/car1.jpg">
							<div class="car-avatar"><img src="img/avatar.png"></div>
							<div class="featured-search-icon">
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
							<div class="featured-total-img">
								<span>8 Photos</span>
							</div>
							<div class="overlay"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- latest-car-info -->
						<div class="latest-car-info">
							<h3>Nissan X-Trail</h3>
							<ul class="ad-meta-info">
								<li>
									<i class="flaticon-maps-and-flags"></i><a href="#">Nairobi</a>
								</li>
								<li>
									<i class="flaticon-calendar"></i><a href="#">May 28, 2021</a>
								</li>
							</ul>

							<ul class="ad-details">
								<li><i class="flaticon-petrol"></i> <span>Petrol</span></li>
								<li><i class="flaticon-dashboard"></i> <span>56,790 km</span></li>
								<li><i class="flaticon-engineering"></i> <span>2000 cc</span></li>
								<li><i class="flaticon-car"></i> <span>SUV</span></li>
								<li><i class="flaticon-gear"></i> <span>Black</span></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
						<!-- latest-car-right -->
						<div class="latest-car-right">
							<p>Ad Type : <span>Sell</span></p>
							<p>Condition : <span>New</span></p>
							<p>Visits : <span>5</span></p>
							<h3>Kshs. 2,450,000 <span>(Neg</span></h3>
							<a href="#"><i class="fas fa-eye"></i> view ad</a>
						</div>
					</div>
				</div>
			</div>
			
			<!-- latest-car-item -->
			<div class="latest-car-item">
				<div class="row">
					<div class="col-md-3">
						<!-- car-img-box -->
						<div class="car-img-box">
							<img src="img/latest/car1.jpg">
							<div class="car-avatar"><img src="img/avatar.png"></div>
							<div class="featured-search-icon">
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
							<div class="featured-total-img">
								<span>8 Photos</span>
							</div>
							<div class="overlay"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- latest-car-info -->
						<div class="latest-car-info">
							<h3>Nissan X-Trail</h3>
							<ul class="ad-meta-info">
								<li>
									<i class="flaticon-maps-and-flags"></i><a href="#">Nairobi</a>
								</li>
								<li>
									<i class="flaticon-calendar"></i><a href="#">May 28, 2021</a>
								</li>
							</ul>

							<ul class="ad-details">
								<li><i class="flaticon-petrol"></i> <span>Petrol</span></li>
								<li><i class="flaticon-dashboard"></i> <span>56,790 km</span></li>
								<li><i class="flaticon-engineering"></i> <span>2000 cc</span></li>
								<li><i class="flaticon-car"></i> <span>SUV</span></li>
								<li><i class="flaticon-gear"></i> <span>Black</span></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
						<!-- latest-car-right -->
						<div class="latest-car-right">
							<p>Ad Type : <span>Sell</span></p>
							<p>Condition : <span>New</span></p>
							<p>Visits : <span>5</span></p>
							<h3>Kshs. 2,450,000 <span>(Neg</span></h3>
							<a href="#"><i class="fas fa-eye"></i> view ad</a>
						</div>
					</div>
				</div>
			</div>
			
			<!-- latest-car-item -->
			<div class="latest-car-item">
				<div class="row">
					<div class="col-md-3">
						<!-- car-img-box -->
						<div class="car-img-box">
							<img src="img/latest/car1.jpg">
							<div class="car-avatar"><img src="img/avatar.png"></div>
							<div class="featured-search-icon">
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
							<div class="featured-total-img">
								<span>8 Photos</span>
							</div>
							<div class="overlay"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- latest-car-info -->
						<div class="latest-car-info">
							<h3>Nissan X-Trail</h3>
							<ul class="ad-meta-info">
								<li>
									<i class="flaticon-maps-and-flags"></i><a href="#">Nairobi</a>
								</li>
								<li>
									<i class="flaticon-calendar"></i><a href="#">May 28, 2021</a>
								</li>
							</ul>

							<ul class="ad-details">
								<li><i class="flaticon-petrol"></i> <span>Petrol</span></li>
								<li><i class="flaticon-dashboard"></i> <span>56,790 km</span></li>
								<li><i class="flaticon-engineering"></i> <span>2000 cc</span></li>
								<li><i class="flaticon-car"></i> <span>SUV</span></li>
								<li><i class="flaticon-gear"></i> <span>Black</span></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
						<!-- latest-car-right -->
						<div class="latest-car-right">
							<p>Ad Type : <span>Sell</span></p>
							<p>Condition : <span>New</span></p>
							<p>Visits : <span>5</span></p>
							<h3>Kshs. 2,450,000 <span>(Neg</span></h3>
							<a href="#"><i class="fas fa-eye"></i> view ad</a>
						</div>
					</div>
				</div>
			</div>
			
			<!-- latest-car-item -->
			<div class="latest-car-item">
				<div class="row">
					<div class="col-md-3">
						<!-- car-img-box -->
						<div class="car-img-box">
							<img src="img/latest/car1.jpg">
							<div class="car-avatar"><img src="img/avatar.png"></div>
							<div class="featured-search-icon">
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
							<div class="featured-total-img">
								<span>8 Photos</span>
							</div>
							<div class="overlay"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- latest-car-info -->
						<div class="latest-car-info">
							<h3>Nissan X-Trail</h3>
							<ul class="ad-meta-info">
								<li>
									<i class="flaticon-maps-and-flags"></i><a href="#">Nairobi</a>
								</li>
								<li>
									<i class="flaticon-calendar"></i><a href="#">May 28, 2021</a>
								</li>
							</ul>

							<ul class="ad-details">
								<li><i class="flaticon-petrol"></i> <span>Petrol</span></li>
								<li><i class="flaticon-dashboard"></i> <span>56,790 km</span></li>
								<li><i class="flaticon-engineering"></i> <span>2000 cc</span></li>
								<li><i class="flaticon-car"></i> <span>SUV</span></li>
								<li><i class="flaticon-gear"></i> <span>Black</span></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
						<!-- latest-car-right -->
						<div class="latest-car-right">
							<p>Ad Type : <span>Sell</span></p>
							<p>Condition : <span>New</span></p>
							<p>Visits : <span>5</span></p>
							<h3>Kshs. 2,450,000 <span>(Neg</span></h3>
							<a href="#"><i class="fas fa-eye"></i> view ad</a>
						</div>
					</div>
				</div>
			</div>
			<!-- view-all button -->
			<div class="view-all text-center text-uppercase pt-4 pb-5">
				<a href="#">view all cars <i class="fas fa-sync-alt"></i></i></a>
			</div>
		</div>
	</section>
	<!-- Latest Car section End -->


	<!-- Latest Blog Start -->
	<section class="latest-blog pt-5">
		<div class="container">
			<div class="featured-title text-center pb-5 pt-5">
				<h1 class="devider-shape">Latest <span style="color: #00BF8F"> Blog </span>Posts</h1>
			</div>
			<div class="row">
				
				<!-- blog-post -->
				@foreach($blogPosts as $blogPost)
					<div class="col-md-4">
						<div class="blog-item">
							<div class="blog-img">
								<img src="{{ asset('/storage/'.$blogPost->image) }}">
								<img class="avatar" src="img/avatar.png">
							</div>
							<div class="blog-info">
								<ul>
									<li><span>{{ $blogPost->created_at }}</span></li>
									<li><span>0 Comments</span></li>
								</ul>
								<h3>
									<a href="{{ route('blog-show') }}">
										{{ $blogPost->title }}
									</a>
								</h3>
								<p class="redmore">
									{{ $blogPost->content }} <a href="{{ route('blog-show') }}"> Read More</a>
								</p>
							</div>
						</div>
					</div>
				@endforeach

				<!-- blog-item -->
				<div class="col-md-4">
					<div class="blog-item">
						<div class="blog-img">
							<img src="img/blog/blog1.jpg">
							<img class="avatar" src="img/avatar.png">
						</div>
						<div class="blog-info">
							<ul>
								<li><span>June 1, 2019</span></li>
								<li><span>0 Comments</span></li>
							</ul>
							<h3><a href="#">Jamhuri Car Bazaar</a></h3>
							<p class="redmore">
								Go for Shopping at Jamhuri Car Bazaar. This is a car market taking place every Sunday where buyers and sellers meet not just online but phys... <a href="#"> Read More</a>
							</p>
						</div>
					</div>
				</div>
				
				<!-- blog-item -->
				<div class="col-md-4">
					<div class="blog-item">
						<div class="blog-img">
							<img src="img/blog/blog2.jpg">
							<img class="avatar" src="img/avatar.png">
						</div>
						<div class="blog-info">
							<ul>
								<li><span>June 1, 2019</span></li>
								<li><span>0 Comments</span></li>
							</ul>
							<h3><a href="#">Jamhuri Car Bazaar</a></h3>
							<p class="redmore">
								Go for Shopping at Jamhuri Car Bazaar. This is a car market taking place every Sunday where buyers and sellers meet not just online but phys... <a href="#"> Read More</a>
							</p>
						</div>
					</div>
				</div>
				<!-- blog-item -->
				<div class="col-md-4">
					<div class="blog-item">
						<div class="blog-img">
							<img src="img/blog/blog3.jpg">
							<img class="avatar" src="img/avatar.png">
						</div>
						<div class="blog-info">
							<ul>
								<li><span>June 1, 2019</span></li>
								<li><span>0 Comments</span></li>
							</ul>
							<h3><a href="#">Jamhuri Car Bazaar</a></h3>
							<p class="redmore">
								Go for Shopping at Jamhuri Car Bazaar. This is a car market taking place every Sunday where buyers and sellers meet not just online but phys... <a href="#"> Read More</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Latest Blog End --> 

	<!-- Vehicle Types -->
	<div class="vehicle-types text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 pt-5 pb-5">
					<h3>Vehicle Types</h3>
				</div>
				@foreach($vehicleTypes as $vehicleType)
				<div class="col-lg-3 col-4">
					<img src="img/vtype/buses-vans-996d286ff6.svg">
					<p><a href="#">{{ ucwords($vehicleType->name) }}</a></p>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<!-- Popular Brands (Car Makes) -->
	<div class="vehicle-types text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 pt-5 pb-5">
					<h3>Popular Brands</h3>
				</div>
				@foreach($carMakes as $carMake)
				<div class="col-lg-3 col-4">
					<img src="img/brands/brand1.svg">
					<p><a href="#">{{ $carMake->name }}</a></p>
				</div>
				@endforeach
				<div class="col-lg-3 col-4">
					<img src="img/brands/brand2.svg">
					<p><a href="#">Brand</a></p>
				</div>
				<div class="col-lg-3 col-4">
					<img src="img/brands/brand3.svg">
					<p><a href="#">Brand</a></p>
				</div>
				<div class="col-lg-3 col-4">
					<img src="img/brands/brand4.svg">
					<p><a href="#">Brand</a></p>
				</div>
				<div class="col-lg-3 col-4">
					<img src="img/brands/brand5.svg">
					<p><a href="#">Brand</a></p>
				</div>
				<div class="col-lg-3 col-4">
					<img src="img/brands/brand1.svg">
					<p><a href="#">Brand</a></p>
				</div>
				<div class="col-lg-3 col-4">
					<img src="img/brands/brand2.svg">
					<p><a href="#">Brand</a></p>
				</div>
				<div class="col-lg-3 col-4">
					<img src="img/brands/brand3.svg">
					<p><a href="#">Brand</a></p>
				</div>
			</div>
		</div>
	</div>
@endsection

	