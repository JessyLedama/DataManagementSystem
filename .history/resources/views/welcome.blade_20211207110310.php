@extends('layouts.app')
 
@section('content')

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

	<!-- Latest Blog Start -->
	<section class="latest-blog pt-5">
		<div class="container">
			<div class="featured-title text-center pb-5 pt-5">
				<h1 class="devider-shape">Latest <span style="color: #00BF8F"> News </span>Posts</h1>
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

@endsection

	