@extends('layouts.app')
 
@section('content')
<style>
	.featured-item{margin: 0 !important;}
	.featured-item .featured-desc ul li {padding-bottom: 3px;font-size: 13px;}
	.featured-item .featured-desc p{margin: 0;}
	.featured-item .featured-footer p {padding: 10px;font-size: 13px;}
	.featured-item .featured-footer ul li {padding: 14px 19px 6px 14px;}
	.featured-item .f-image .price-tag span{font-size: 12px;}
	.featured-item .f-image .price-tag{font-size: 14px;}
	.featured-item {margin-bottom: 25px !important;}
	.accordion-item input, .select2-container--default .select2-selection--single {background: #fff;outline: none;}
	.pagination {justify-content: center;}
</style>

<!-- breadcrumb Start-->
<div class="breadcrumb-area bg-light p-5">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	        <ol class="breadcrumb">
	          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
	          <li class="breadcrumb-item active" aria-current="page">Search</li>
	        </ol>
	      </nav>
	      <h3>Search</h3>
	    </div>
	  </div>
	</div>
</div>
<!-- breadcrumb End-->

@if (session()->has('success'))
	<span class="alert alert-success">
	{{ session('success') }}
	</span>
@endif

<!-- Search car Srart -->
<div class="search-car bg-light">
	<div class="container">
		<div class="row">
			<!-- Search car filter Start -->
			<div class="col-md-3">
				<!-- search-car-filter for desktop Start -->
				<div class="search-car-filter filter-for-pc mb-5">
					<div class="accordion accordion-flush" id="accordionFlushExample">

						<!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingOne">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
					        Search By Keyword
					      </button>
					    </h2>
					    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
					      		<div class="search-box">
									<input class="" placeholder="Search" type="text" name="">
									<button type="submit"><i class="fas fa-search"></i></button>
								</div>	
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
					        Select Make
					      </button>
					    </h2>
					    
						<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
			              	<form method="POST" action="{{ route('search-cars-post') }}">
			              		<label class="pb-2">Select Make</label><br>
								
								  <select name="makeId" required>
								  	<option>Select</option>
									@foreach ($carMakes as $make)
										
										<option value="{{ $make->id }}" {{ $make->id == old('makeId') ? 'selected' : ''}}>
												{{ ucwords($make->name) }}
										</option>
									@endforeach
								</select>

								@error('makeId')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror <br>
				                
								<button type="submit">Search</button>
			              	</form>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
					        Ads by location
					      </button>
					    </h2>
					    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
							  @foreach($cities as $city)
					      	<ul>
					      		<li>
									<a href="#">Eldoret <span>(0)</span></a>
								</li>

					      		<li>
									<a href="#">Kisumu <span>(1)</span></a>
								</li>

					      		<li>
									<a href="#">Mombasa <span>(86)</span></a>
								</li>

					      		<li>
									<a href="#">Nairobi  <span>(392)</span></a>
								</li>
								
					      		<li><a href="#">Nakuru  <span>(25)</span></a></li>
					      		<li><a href="#">Rest of Kenya  <span>(99)</span></a></li>
					      	</ul>
							  @endforeach
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading4">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
					        Price
					      </button>
					    </h2>
					    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
					      	<form>
					      		<label class="form-label">Price <span>(Kshs. ) 500 - 100000</span></label>
								<div id="slider-range"></div>
								<input type="text" id="amount" readonly style="border:0;color:#f6931f; background: transparent !important;"/>
								
								<button type="submit">Search</button>
					      	</form>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading5">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
					        Ad Mileage (Km)
					      </button>
					    </h2>
					    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
					      	<form>
					      		<div class="input-group mb-3">
								  <input style="border: 1px solid #ddd; border-radius: 0px;" type="text" class="form-control" placeholder="From" aria-label="Username">
								  <span class="input-group-text">-</span>
								  <input style="border: 1px solid #ddd; border-radius: 0px;" type="text" class="form-control" placeholder="To" aria-label="Server">
								</div>
					      	</form>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading6">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
					        Year
					      </button>
					    </h2>
					    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
					      	<form>
			              		<label class="pb-2">From</label><br>
				                <select class="form-control select2 " name="yearFrom">
				                   <option>1990</option>
				                   <option>1991</option>
				                   <option>1992</option>
				                   <option>1993</option>
				                   <option>1994</option>
				                   <option>1995</option>
				                   <option>1996</option>
				                   <option>1997</option>
				                   <option>1998</option>
				                   <option>1999</option>
				                   <option>2000</option>
				                   <option>2001</option>
				                   <option>2002</option>
				                   <option>2003</option>
				                   <option>2004</option>
				                   <option>2005</option>
				                   <option>2006</option>
				                   <option>2007</option>
				                   <option>2008</option>
				                   <option>2009</option>
				                   <option>2010</option>
				                   <option>2011</option>
				                   <option>2012</option>
				                   <option>2013</option>
				                   <option>2014</option>
				                   <option>2015</option>
				                   <option>2016</option>
				                   <option>2017</option>
				                   <option>2018</option>
				                   <option>2019</option>
				                   <option>2020</option>
				                </select> <br>

			              		<label class="pb-2 pt-3">To</label><br>
				                <select class="form-control select2" name="yearTo">
				                   <option>1990</option>
				                   <option>1991</option>
				                   <option>1992</option>
				                   <option>1993</option>
				                   <option>1994</option>
				                   <option>1995</option>
				                   <option>1996</option>
				                   <option>1997</option>
				                   <option>1998</option>
				                   <option>1999</option>
				                   <option>2000</option>
				                   <option>2001</option>
				                   <option>2002</option>
				                   <option>2003</option>
				                   <option>2004</option>
				                   <option>2005</option>
				                   <option>2006</option>
				                   <option>2007</option>
				                   <option>2008</option>
				                   <option>2009</option>
				                   <option>2010</option>
				                   <option>2011</option>
				                   <option>2012</option>
				                   <option>2013</option>
				                   <option>2014</option>
				                   <option>2015</option>
				                   <option>2016</option>
				                   <option>2017</option>
				                   <option>2018</option>
				                   <option>2019</option>
				                   <option>2020</option>
				                </select> <br>
				                <button type="submit">Search</button>
			              	</form>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading7">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps7" aria-expanded="false" aria-controls="collaps7">
					        Transmission
					      </button>
					    </h2>
					    <div id="collaps7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="automatic-trans" class="form-check-input" type="radio" name="transmission">
				      			<label for="automatic-trans"> Automatic</label>
				      		</p>
				      		<p>
				      			<input id="manual-trans" class="form-check-input" type="radio" name="transmission">
				      			<label for="manual-trans"> Manual</label>
				      		</p>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading8">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps8" aria-expanded="false" aria-controls="collaps8">
					        Engine Type
					      </button>
					    </h2>
					    <div id="collaps8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="cng" class="form-check-input" type="radio" name="engineType">
				      			<label for="cng"> CNG</label>
				      		</p>
				      		<p>
				      			<input id="diesel" class="form-check-input" type="radio" name="engineType">
				      			<label for="diesel"> Diesel</label>
				      		</p>
				      		<p>
				      			<input id="hybrid" class="form-check-input" type="radio" name="engineType">
				      			<label for="hybrid"> Hybrid</label>
				      		</p>
				      		<p>
				      			<input id="petrol" class="form-check-input" type="radio" name="engineType">
				      			<label for="petrol"> Petrol</label>
				      		</p>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading9">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps9" aria-expanded="false" aria-controls="collaps9">
					        Engine Capacity (CC)
					      </button>
					    </h2>
					    <div id="collaps9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="1000cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="1000cc"> 1000 cc</label>
				      		</p>
				      		<p>
				      			<input id="1200cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="1200cc"> 1200 cc</label>
				      		</p>
				      		<p>
				      			<input id="1300cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="1300cc"> 1300 cc</label>
				      		</p>
				      		<p>
				      			<input id="1400cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="1400cc"> 1400 cc</label>
				      		</p>
				      		<p>
				      			<input id="1500cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="1500cc"> 1500 cc</label>
				      		</p>
				      		<p>
				      			<input id="1800cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="1800cc"> 1800 cc</label>
				      		</p>
				      		<p>
				      			<input id="2000cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="2000cc"> 2000 cc</label>
				      		</p>
				      		<p>
				      			<input id="2400cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="2400cc"> 2400 cc</label>
				      		</p>
				      		<p>
				      			<input id="2500cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="2500cc"> 2500 cc</label>
				      		</p>
				      		<p>
				      			<input id="3000cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="3000cc"> 3000 cc</label>
				      		</p>
				      		<p>
				      			<input id="3500cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="3500cc"> 3500 cc</label>
				      		</p>
				      		<p>
				      			<input id="4500cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="4500cc"> 4500 cc</label>
				      		</p>
				      		<p>
				      			<input id="4700cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="4700cc"> 4700 cc</label>
				      		</p>
				      		<p>
				      			<input id="5500cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="5500cc"> 5500 cc</label>
				      		</p>
				      		<p>
				      			<input id="800cc" class="form-check-input" type="radio" name="engineCapacity">
				      			<label for="800cc"> 800 cc</label>
				      		</p>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading10">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps10" aria-expanded="false" aria-controls="collaps10">
					        Body Type
					      </button>
					    </h2>
					    <div id="collaps10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="type1" class="form-check-input" type="radio" name="bodyType">
				      			<label for="type1"> type 1</label>
				      		</p>
				      		<p>
				      			<input id="type2" class="form-check-input" type="radio" name="bodyType">
				      			<label for="type2"> type 2</label>
				      		</p>
				      		<p>
				      			<input id="type3" class="form-check-input" type="radio" name="bodyType">
				      			<label for="type3"> type 3</label>
				      		</p>
				      		<p>
				      			<input id="type4" class="form-check-input" type="radio" name="bodyType">
				      			<label for="type4"> type 4</label>
				      		</p>
				      		<p>
				      			<input id="type5" class="form-check-input" type="radio" name="bodyType">
				      			<label for="type5"> type 5</label>
				      		</p>
				      		<p>
				      			<input id="type6" class="form-check-input" type="radio" name="bodyType">
				      			<label for="type6"> type 6</label>
				      		</p>

					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading11">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps11" aria-expanded="false" aria-controls="collaps11">
					        Color Family
					      </button>
					    </h2>
					    <div id="collaps11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="Black" class="form-check-input" type="radio" name="color">
				      			<label for="Black"> Black</label>
				      		</p>
				      		<p>
				      			<input id="Blue" class="form-check-input" type="radio" name="color">
				      			<label for="Blue"> Blue</label>
				      		</p>
				      		<p>
				      			<input id="Bronze" class="form-check-input" type="radio" name="color">
				      			<label for="Bronze"> Bronze</label>
				      		</p>
				      		<p>
				      			<input id="Gold" class="form-check-input" type="radio" name="color">
				      			<label for="Gold"> Gold</label>
				      		</p>
				      		<p>
				      			<input id="Green" class="form-check-input" type="radio" name="color">
				      			<label for="Green"> Green</label>
				      		</p>
				      		<p>
				      			<input id="Grey" class="form-check-input" type="radio" name="color">
				      			<label for="Grey"> Grey</label>
				      		</p>
				      		<p>
				      			<input id="Red" class="form-check-input" type="radio" name="color">
				      			<label for="Red"> Red</label>
				      		</p>
				      		<p>
				      			<input id="Silver" class="form-check-input" type="radio" name="color">
				      			<label for="Silver"> Silver</label>
				      		</p>
				      		<p>
				      			<input id="White" class="form-check-input" type="radio" name="color">
				      			<label for="White"> White</label>
				      		</p>

					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading12">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps13" aria-expanded="false" aria-controls="collaps13">
					        Car Type
					      </button>
					    </h2>
					    <div id="collaps13" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="sell" class="form-check-input" type="radio" name="carType">
				      			<label for="sell"> Sell</label>
				      		</p>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading16">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps16" aria-expanded="false" aria-controls="collaps16">
					        Car Insurance
					      </button>
					    </h2>
					    <div id="collaps16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="no" class="form-check-input" type="radio" name="carInsurance">
				      			<label for="no"> No</label>
				      		</p>
				      		<p>
				      			<input id="yes" class="form-check-input" type="radio" name="carInsurance">
				      			<label for="yes"> Yes</label>
				      		</p>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading14">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps14" aria-expanded="false" aria-controls="collaps14">
					        Car Assembly
					      </button>
					    </h2>
					    <div id="collaps14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="Imported" class="form-check-input" type="radio" name="carAssembly">
				      			<label for="Imported"> Imported</label>
				      		</p>
				      		<p>
				      			<input id="Local" class="form-check-input" type="radio" name="carAssembly">
				      			<label for="Local"> Local</label>
				      		</p>
					      </div>
					    </div>
					  </div>

					  <!-- accordion-item -->
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="heading15">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps15" aria-expanded="false" aria-controls="collaps15">
					        Condition
					      </button>
					    </h2>
					    <div id="collaps15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
				      		<p>
				      			<input id="New" class="form-check-input" type="radio" name="carAssembly">
				      			<label for="New"> New</label>
				      		</p>
				      		<p>
				      			<input id="Used" class="form-check-input" type="radio" name="carAssembly">
				      			<label for="Used"> Used</label>
				      		</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>					
				<!-- search-car-filter for desktop End -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mobile-filter-btn mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Filter
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filter Cars</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      	<!-- search-car-filter for Mobile Start -->
		<div class="search-car-filter mb-5">
			<div class="accordion accordion-flush" id="accordionFlushExample">
			
				<!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingOne">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
			        Search By Keyword
			      </button>
			    </h2>
			    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
			      		<div class="search-box">
							<input class="" placeholder="Search" type="text" name="">
							<button type="submit"><i class="fas fa-search"></i></button>
						</div>	
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingTwo">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
			        Select Make
			      </button>
			    </h2>
			    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
	              	<form>
	              		<label class="pb-2">Select Make</label><br>
		                <select class="form-control">
		                   <option>Select</option> 
		                   <option>Alfa Romeo</option> 
		                   <option>Audi</option>
		                   <option>Austin</option>
		                   <option>Austin Healey</option>
		                   <option>Aveo</option>
		                   <option>Bedford</option>
		                   <option>Bentley</option>
		                </select> <br>
		                <button type="submit">Search</button>
	              	</form>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingThree">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
			        Ads by location
			      </button>
			    </h2>
			    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
			      	<ul>
			      		<li><a href="#">Eldoret <span>(0)</span></a></li>
			      		<li><a href="#">Kisumu <span>(1)</span></a></li>
			      		<li><a href="#">Mombasa <span>(86)</span></a></li>
			      		<li><a href="#">Nairobi  <span>(392)</span></a></li>
			      		<li><a href="#">Nakuru  <span>(25)</span></a></li>
			      		<li><a href="#">Rest of Kenya  <span>(99)</span></a></li>
			      	</ul>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item mobile-filter-btn">
			    <h2 class="accordion-header" id="heading4">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
			        Price
			      </button>
			    </h2>
			    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
			      	<form>
			      		<label class="form-label">Price <span>(Kshs. ) 500 - 100000</span></label>
						<div id="slider-range2"></div>
						<input type="text" id="amount2" readonly style="border:0;color:#f6931f; background: transparent !important;"/>
						
						<button type="submit">Search</button>
			      	</form>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading5">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
			        Ad Mileage (Km)
			      </button>
			    </h2>
			    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
			      	<form>
			      		<div class="input-group mb-3">
						  <input style="border: 1px solid #ddd; border-radius: 0px;" type="text" class="form-control" placeholder="From" aria-label="Username">
						  <span class="input-group-text">-</span>
						  <input style="border: 1px solid #ddd; border-radius: 0px;" type="text" class="form-control" placeholder="To" aria-label="Server">
						</div>
			      	</form>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading6">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
			        Year
			      </button>
			    </h2>
			    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
			      	<form>
	              		<label class="pb-2">From</label><br>
		                <select class="form-control" name="yearFrom">
		                   <option>1990</option>
		                   <option>1991</option>
		                   <option>1992</option>
		                   <option>1993</option>
		                   <option>1994</option>
		                   <option>1995</option>
		                   <option>1996</option>
		                   <option>1997</option>
		                   <option>1998</option>
		                   <option>1999</option>
		                   <option>2000</option>
		                   <option>2001</option>
		                   <option>2002</option>
		                   <option>2003</option>
		                   <option>2004</option>
		                   <option>2005</option>
		                   <option>2006</option>
		                   <option>2007</option>
		                   <option>2008</option>
		                   <option>2009</option>
		                   <option>2010</option>
		                   <option>2011</option>
		                   <option>2012</option>
		                   <option>2013</option>
		                   <option>2014</option>
		                   <option>2015</option>
		                   <option>2016</option>
		                   <option>2017</option>
		                   <option>2018</option>
		                   <option>2019</option>
		                   <option>2020</option>
		                </select> <br>

	              		<label class="pb-2 pt-3">To</label><br>
		                <select class="form-control" name="yearTo">
		                   <option>1990</option>
		                   <option>1991</option>
		                   <option>1992</option>
		                   <option>1993</option>
		                   <option>1994</option>
		                   <option>1995</option>
		                   <option>1996</option>
		                   <option>1997</option>
		                   <option>1998</option>
		                   <option>1999</option>
		                   <option>2000</option>
		                   <option>2001</option>
		                   <option>2002</option>
		                   <option>2003</option>
		                   <option>2004</option>
		                   <option>2005</option>
		                   <option>2006</option>
		                   <option>2007</option>
		                   <option>2008</option>
		                   <option>2009</option>
		                   <option>2010</option>
		                   <option>2011</option>
		                   <option>2012</option>
		                   <option>2013</option>
		                   <option>2014</option>
		                   <option>2015</option>
		                   <option>2016</option>
		                   <option>2017</option>
		                   <option>2018</option>
		                   <option>2019</option>
		                   <option>2020</option>
		                </select> <br>
		                <button type="submit">Search</button>
	              	</form>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading7">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps7" aria-expanded="false" aria-controls="collaps7">
			        Transmission
			      </button>
			    </h2>
			    <div id="collaps7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="automatic-trans" class="form-check-input" type="radio" name="transmission">
		      			<label for="automatic-trans"> Automatic</label>
		      		</p>
		      		<p>
		      			<input id="manual-trans" class="form-check-input" type="radio" name="transmission">
		      			<label for="manual-trans"> Manual</label>
		      		</p>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading8">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps8" aria-expanded="false" aria-controls="collaps8">
			        Engine Type
			      </button>
			    </h2>
			    <div id="collaps8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="cng" class="form-check-input" type="radio" name="engineType">
		      			<label for="cng"> CNG</label>
		      		</p>
		      		<p>
		      			<input id="diesel" class="form-check-input" type="radio" name="engineType">
		      			<label for="diesel"> Diesel</label>
		      		</p>
		      		<p>
		      			<input id="hybrid" class="form-check-input" type="radio" name="engineType">
		      			<label for="hybrid"> Hybrid</label>
		      		</p>
		      		<p>
		      			<input id="petrol" class="form-check-input" type="radio" name="engineType">
		      			<label for="petrol"> Petrol</label>
		      		</p>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading9">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps9" aria-expanded="false" aria-controls="collaps9">
			        Engine Capacity (CC)
			      </button>
			    </h2>
			    <div id="collaps9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="1000cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="1000cc"> 1000 cc</label>
		      		</p>
		      		<p>
		      			<input id="1200cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="1200cc"> 1200 cc</label>
		      		</p>
		      		<p>
		      			<input id="1300cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="1300cc"> 1300 cc</label>
		      		</p>
		      		<p>
		      			<input id="1400cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="1400cc"> 1400 cc</label>
		      		</p>
		      		<p>
		      			<input id="1500cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="1500cc"> 1500 cc</label>
		      		</p>
		      		<p>
		      			<input id="1800cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="1800cc"> 1800 cc</label>
		      		</p>
		      		<p>
		      			<input id="2000cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="2000cc"> 2000 cc</label>
		      		</p>
		      		<p>
		      			<input id="2400cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="2400cc"> 2400 cc</label>
		      		</p>
		      		<p>
		      			<input id="2500cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="2500cc"> 2500 cc</label>
		      		</p>
		      		<p>
		      			<input id="3000cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="3000cc"> 3000 cc</label>
		      		</p>
		      		<p>
		      			<input id="3500cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="3500cc"> 3500 cc</label>
		      		</p>
		      		<p>
		      			<input id="4500cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="4500cc"> 4500 cc</label>
		      		</p>
		      		<p>
		      			<input id="4700cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="4700cc"> 4700 cc</label>
		      		</p>
		      		<p>
		      			<input id="5500cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="5500cc"> 5500 cc</label>
		      		</p>
		      		<p>
		      			<input id="800cc" class="form-check-input" type="radio" name="engineCapacity">
		      			<label for="800cc"> 800 cc</label>
		      		</p>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading10">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps10" aria-expanded="false" aria-controls="collaps10">
			        Body Type
			      </button>
			    </h2>
			    <div id="collaps10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="type1" class="form-check-input" type="radio" name="bodyType">
		      			<label for="type1"> type 1</label>
		      		</p>
		      		<p>
		      			<input id="type2" class="form-check-input" type="radio" name="bodyType">
		      			<label for="type2"> type 2</label>
		      		</p>
		      		<p>
		      			<input id="type3" class="form-check-input" type="radio" name="bodyType">
		      			<label for="type3"> type 3</label>
		      		</p>
		      		<p>
		      			<input id="type4" class="form-check-input" type="radio" name="bodyType">
		      			<label for="type4"> type 4</label>
		      		</p>
		      		<p>
		      			<input id="type5" class="form-check-input" type="radio" name="bodyType">
		      			<label for="type5"> type 5</label>
		      		</p>
		      		<p>
		      			<input id="type6" class="form-check-input" type="radio" name="bodyType">
		      			<label for="type6"> type 6</label>
		      		</p>

			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading11">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps11" aria-expanded="false" aria-controls="collaps11">
			        Color Family
			      </button>
			    </h2>
			    <div id="collaps11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="Black" class="form-check-input" type="radio" name="color">
		      			<label for="Black"> Black</label>
		      		</p>
		      		<p>
		      			<input id="Blue" class="form-check-input" type="radio" name="color">
		      			<label for="Blue"> Blue</label>
		      		</p>
		      		<p>
		      			<input id="Bronze" class="form-check-input" type="radio" name="color">
		      			<label for="Bronze"> Bronze</label>
		      		</p>
		      		<p>
		      			<input id="Gold" class="form-check-input" type="radio" name="color">
		      			<label for="Gold"> Gold</label>
		      		</p>
		      		<p>
		      			<input id="Green" class="form-check-input" type="radio" name="color">
		      			<label for="Green"> Green</label>
		      		</p>
		      		<p>
		      			<input id="Grey" class="form-check-input" type="radio" name="color">
		      			<label for="Grey"> Grey</label>
		      		</p>
		      		<p>
		      			<input id="Red" class="form-check-input" type="radio" name="color">
		      			<label for="Red"> Red</label>
		      		</p>
		      		<p>
		      			<input id="Silver" class="form-check-input" type="radio" name="color">
		      			<label for="Silver"> Silver</label>
		      		</p>
		      		<p>
		      			<input id="White" class="form-check-input" type="radio" name="color">
		      			<label for="White"> White</label>
		      		</p>

			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading12">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps13" aria-expanded="false" aria-controls="collaps13">
			        Car Type
			      </button>
			    </h2>
			    <div id="collaps13" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="sell" class="form-check-input" type="radio" name="carType">
		      			<label for="sell"> Sell</label>
		      		</p>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading16">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps16" aria-expanded="false" aria-controls="collaps16">
			        Car Insurance
			      </button>
			    </h2>
			    <div id="collaps16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="no" class="form-check-input" type="radio" name="carInsurance">
		      			<label for="no"> No</label>
		      		</p>
		      		<p>
		      			<input id="yes" class="form-check-input" type="radio" name="carInsurance">
		      			<label for="yes"> Yes</label>
		      		</p>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading14">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps14" aria-expanded="false" aria-controls="collaps14">
			        Car Assembly
			      </button>
			    </h2>
			    <div id="collaps14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="Imported" class="form-check-input" type="radio" name="carAssembly">
		      			<label for="Imported"> Imported</label>
		      		</p>
		      		<p>
		      			<input id="Local" class="form-check-input" type="radio" name="carAssembly">
		      			<label for="Local"> Local</label>
		      		</p>
			      </div>
			    </div>
			  </div>

			  <!-- accordion-item -->
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="heading15">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps15" aria-expanded="false" aria-controls="collaps15">
			        Condition
			      </button>
			    </h2>
			    <div id="collaps15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
		      		<p>
		      			<input id="New" class="form-check-input" type="radio" name="carAssembly">
		      			<label for="New"> New</label>
		      		</p>
		      		<p>
		      			<input id="Used" class="form-check-input" type="radio" name="carAssembly">
		      			<label for="Used"> Used</label>
		      		</p>
			      </div>
			    </div>
			  </div>


				<!-- search-car-topbar For Mobile Start-->
				<div class="search-car-topbar mt-4">
					<div class="row">
						<div class="col-md-6">
							<div class="car-top-bar-left">
								<h3>Found Ads <span>({{ $carsCount }})</span></h3>
							</div>
						</div>

						<div class="col-md-6">
							<div class="car-top-bar-right">
								<h3>Sort By:</h3>
								<form>
					                <select class="form-control">
					                   <option>Newest To Oldest</option> 
					                   <option>Oldest To New</option>
					                   <option>Alphabetically [a-z]</option>
					                   <option>Alphabetically [z-a]</option>
					                   <option>Highest price</option>
					                   <option>Lowest price</option>
					                </select>
				              	</form>
							</div>
						</div>
					</div>
				</div>
				<!-- search-car-topbar For Mobile End-->

			</div>
		</div>	
		<!-- search-car-filter for Mobile End -->



      </div>
      
	  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>


				

			
			</div>
<!-- +++++++++++++++++++++++++++Search car filter End++++++++++++++++++++++++++++ -->

<!-- +++++++++++++++++++++++Search car content Start +++++++++++++++++++++++++++++-->
			<div class="col-md-9">
				<div class="search-car-content">
					
					<!-- search-car-topbar Start-->
					<div class="search-car-topbar filter-for-pc">
						<div class="row">
							<div class="col-md-6">
								<div class="car-top-bar-left">
									<h3>Found Ads <span>({{ $carsCount }})</span></h3>
								</div>
							</div>

							<div class="col-md-6">
								<div class="car-top-bar-right">
									<h3>Sort By:</h3>
									<form>
						                <select class="form-control select2">
						                   <option>Newest To Oldest</option> 
						                   <option>Oldest To New</option>
						                   <option>Alphabetically [a-z]</option>
						                   <option>Alphabetically [z-a]</option>
						                   <option>Highest price</option>
						                   <option>Lowest price</option>
						                </select>
					              	</form>
								</div>
							</div>
						</div>
					</div>
					<!-- search-car-topbar End-->

					<!-- car-listing Start -->
					<div class="car-listing">
						<div class="row">
							<!-- featured-item -->
							@foreach($cars as $car)
							<div class="col-md-4">
								<div class="featured-item">
						    		<div class="f-image">
						    			<img src="{{ asset('/storage/'.$car->image) }}">
						    			@foreach($carPrices as $carPrice)
											@if($car->priceType == $carPrice->id)
												<div class="price-tag">
													<span>Kshs. {{ ucwords($car->price) }}<span style="font-size: 14px;font-weight: 400">({{ $carPrice->name }})</span></span>
												</div>
											@endif
										@endforeach
							    	</div>
							    	
									@foreach($carMakes as $carMake)
										@if($car->makeId == $carMake->id)
											<div class="featured-content">
												<div class="category-title">
													<a href="#" class="padding-cats txt-hover">
														{{ $carMake->name }}
													</a>
													@foreach($carModels as $carModel)
														@if($car->modelId == $carModel->id)
														<a href="#" class="padding-cats txt-hover">{{ $carModel->name }}</a>
														@endif
													@endforeach
												</div>
												
												<div class="featured-desc">
													<h3>
														<a class="txt-hover" href="#">{{ ucwords($car->name) }}</a>
													</h3>
													<p class="location">
														<i class="flaticon-maps-and-flags"></i> 
														<a class="txt-hover" href="#">
															{{ ucwords($car->selleraddress) }}
														</a>
													</p>

													<ul>
														@foreach($engineTypes as $engineType)
															@if($car->enginetypeId == $engineType->id)
															<li>
																<i class="flaticon-petrol"></i> 
																{{ ucwords($engineType->name) }}
															</li>
															@endif
														@endforeach
														
														<li>
															<i class="flaticon-dashboard"></i> 
															{{ ucwords($car->mileage) }} KM
														</li>
														
														@foreach($engineSizes as $engineSize)
															@if($car->enginetypeId == $engineSize->id)
																<li>
																	<i class="flaticon-engineering"></i> {{ ucwords($engineSize->name) }}
																</li>
															@endif
														@endforeach
														
														@foreach($carBodies as $carBody)
															@if($car->enginetypeId == $carBody->id)
																<li>
																	<i class="flaticon-car"></i> {{ ucwords($carBody->name) }}	
																</li>
															@endif	
														@endforeach
														
														@foreach($carColors as $carColor)
															@if($car->enginetypeId == $carColor->id)
																<li>
																	<i class="flaticon-gear"></i> 
																	{{ ucwords($carColor->name) }}
																</li>
															@endif
														@endforeach	
													</ul>
												</div>
											</div>
										@endif
									@endforeach
						    		
									<div class="featured-footer">
						    			<p><i class="flaticon-calendar"></i> <span>{{ ucwords($car->created_at) }}</span></p>
						    			<ul>
						    				<li><a href="#"><i class="flaticon-like"></i></a></li>
						    				<li><a href="#"><i class="flaticon-send"></i></a></li>
						    			</ul>
						    		</div>
						    	</div>
							</div>
							@endforeach




							<!-- featured-item -->
							<div class="col-md-4">
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
							</div>
							<!-- featured-item -->
							<div class="col-md-4">
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
							</div>
							<!-- featured-item -->
							<div class="col-md-4">
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
							</div>
							<!-- featured-item -->
							<div class="col-md-4">
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
							</div>
							<!-- featured-item -->
							<div class="col-md-4">
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
							</div>
							<!-- featured-item -->
							<div class="col-md-4">
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
							</div>
							<!-- featured-item -->
							<div class="col-md-4">
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
							</div>
							<!-- featured-item -->
							<div class="col-md-4">
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
							</div>




						</div>
					</div>
					<!-- car-listing Start -->

					<!-- Pagination -->
					<div class="pagination-area mb-5 pt-3">
						<nav aria-label="...">
						  <ul class="pagination">
						    <li class="page-item disabled">
						      <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><< Previous</a>
						    </li>
						    <li class="page-item active"><a class="page-link" href="#">1</a></li>
						    <li class="page-item" aria-current="page">
						      <a class="page-link" href="#">2</a>
						    </li>
						    <li class="page-item" aria-current="page">
						      <a class="page-link" href="#">3</a>
						    </li>
						    <li class="page-item" aria-current="page">
						      <a class="page-link" href="#">...</a>
						    </li>
						    <li class="page-item" aria-current="page">
						      <a class="page-link" href="#">50</a>
						    </li>
						    <li class="page-item">
						      <a class="page-link" href="#">Next >></a>
						    </li>
						  </ul>
						</nav>
					</div>
					<!-- Pagination End. -->

				</div>
			</div>
			<!-- Search car content End -->


		</div>
	</div>
</div>
<!-- Search car End -->

@endsection

