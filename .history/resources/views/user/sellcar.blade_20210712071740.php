@extends('layouts.app')
 
@section('content')
<!-- breadcrumb Start-->
<div class="breadcrumb-area bg-light p-5">
	<div class="container">
	  	<div class="row">
	    	<div class="col-md-12">
				<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
						<a href="index.html">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Sell Your Car
						</li>
					</ol>
				</nav>
				<h3>Sell Your Car</h3>
	        </div>
	    </div>
	</div>
</div>
<!-- Breadcrumbs end --->

  <div class="myForm sell-your-car bg-light">
    <div class="container">
      <div class="row">
      	<!-- form area start -->
        <div class="col-md-8">
          <div class="sellCar-form mb-5 p-4 bg-white pt-5">
            <form method="POST" action="{{ route('sell-car-store') }}" enctype="multipart/form-data">
				@csrf
                <div class="mb-4">
                  <label for="title" class="form-label">Title</label>
                  
				  <input type="text" name="name" placeholder="Enter Title" class="form-control" id="title">
                </div>

				<!-- Car Make --->
				<div class="mb-4">
	              	<label class="pb-2">Select Make 
	              		<span>Select suitable category for your ad  </span>
					</label>
					
					<select class="form-control select2" name="makeId" required>
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
                    @enderror
              	</div>

				  <!-- Car Model -->
				<div class="mb-4">
	              	<label class="pb-2">Select Model </label>
	                
					<select class="form-control select2" name="modelId" required>
						<option>Select</option>
                        @foreach ($carModels as $model)
                            <option value="{{ $model->id }}" {{ $model->id == old('modelId') ? 'selected' : ''}}>
                                    {{ ucwords($model->name) }}
                            </option>
                        @endforeach
                    </select>

                    @error('modelId')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              	</div>

              	<div class="row">
              		<!-- first column -->
              		<div class="col-md-6">
              			
              			<div class="mb-4">
		                  <label class="form-label">Price <span>Kshs. only</span></label>
		                  <input type="text" name="price" class="form-control">
		                </div>
              			
              			<div class="mb-4">
		                  <label class="form-label">Mileage</label>
		                  <input type="text" name="mileage" class="form-control">
		                </div>


						<div class="mb-4">
			              	<label class="pb-2">Body Type</label>
							<select class="form-control select2" name="bodyId" required>
								<option>Select</option>
								@foreach ($carBodies as $body)
									<option value="{{ $body->id }}" {{ $body->id == old('bodyId') ? 'selected' : ''}}>
											{{ ucwords($body->name) }}
									</option>
								@endforeach
							</select>

							@error('bodyId')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
		              	</div>

						<div class="mb-4">
			              	<label class="pb-2">Engine Size</label>
							
							<select class="form-control select2" name="enginesizeId" required>
								<option>Select</option>
								@foreach ($engineSizes as $engineSize)
									<option value="{{ $engineSize->id }}" {{ $engineSize->id == old('engineSizeId') ? 'selected' : ''}}>
											{{ ucwords($engineSize->name) }}
									</option>
								@endforeach
							</select>

							@error('engineSizeId')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
		              	</div>

						<div class="mb-4">
			              	<label class="form-label pb-2">Color</label>
							
							<select class="form-control select2" name="colorId" required>
								<option>Select</option>
								@foreach ($colorIds as $color)
									<option value="{{ $color->id }}" {{ $color->id == old('colorId') ? 'selected' : ''}}>
											{{ ucwords($color->name) }}
									</option>
								@endforeach
							</select>

							@error('colorId')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
		              	</div>

              		</div>

              		<!-- second column	 -->
              		<div class="col-md-6">

						<!-- <div class="mb-4">
			              	<label class="pb-2">Price Type</label>
			                <select class="form-control select2">
			                   <option>Select</option> 
			                   <option>Price Type  1</option>
			                   <option>Price Type  2</option>
			                   <option>Price Type  3</option>
			                   <option>Price Type  4</option>
			                </select>
		              	</div> -->

						<div class="mb-4">
			              	<label class="pb-2">Condition</label>
							
							<select class="form-control select2" name="conditionId" required>
								<option>Select</option>
								@foreach ($conditionIds as $condition)
									<option value="{{ $condition->id }}" {{ $condition->id == old('conditionId') ? 'selected' : ''}}>
											{{ ucwords($condition->name) }}
									</option>
								@endforeach
							</select>

							@error('conditionId')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
		              	</div>

						<div class="mb-4">
			              	<label class="form-label pb-2">Year</label>
							<input type="text" name="year" class="form-control">
		              	</div>

						  <!-- Trans -->
						<div class="mb-4">
			              	<label class="pb-2">Transmission</label>
							
							<select class="form-control select2" name="transmissionId" required>
								<option>Select</option>
								@foreach ($conditionIds as $condition)
									<option value="{{ $condition->id }}" {{ $condition->id == old('conditionId') ? 'selected' : ''}}>
											{{ ucwords($condition->name) }}
									</option>
								@endforeach
							</select>

							@error('conditionIds')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
		              	</div>

						<div class="mb-4">
			              	<label class="pb-2">Engine Type</label>
							
							<select class="form-control select2" name="enginetypeId" required>
								<option>Select</option>
								@foreach ($engineTypeIds as $engineType)
									<option value="{{ $engineType->id }}" {{ $engineType->id == old('engineTypeId') ? 'selected' : ''}}>
											{{ ucwords($engineType->name) }}
									</option>
								@endforeach
							</select>

							@error('engineTypeIds')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
		              	</div>
              		</div>
              	</div>

              	<!-- Features -->
				<label class="pb-2">Features</label>

              	<div class="row fearturs">

              		<!-- First column -->
              		<div class="col-md-4">

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="ABS">
                   			<label class="form-check-label" for="ABS">ABS</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="Alloy">
                   			<label class="form-check-label" for="Alloy">Alloy Rims</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="CD">
                   			<label class="form-check-label" for="CD">CD Player</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="DVD">
                   			<label class="form-check-label" for="DVD">DVD Player</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="Power">
                   			<label class="form-check-label" for="Power">Power Locks</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="PowerWindows">
                   			<label class="form-check-label" for="PowerWindows">Power Windows</label>
              			</div>

              		</div>

              		<!-- Second column -->
              		<div class="col-md-4">

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="AirBags">
                   			<label class="form-check-label" for="AirBags">Air Bags</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="AMFMRadio">
                   			<label class="form-check-label" for="AMFMRadio">AM/FM Radio</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="CoolBox">
                   			<label class="form-check-label" for="CoolBox">Cool Box</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="ImmobilizerKey">
                   			<label class="form-check-label" for="ImmobilizerKey">Immobilizer Key</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="PowerMirrors">
                   			<label class="form-check-label" for="PowerMirrors">Power Mirrors</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="ReversingCamera">
                   			<label class="form-check-label" for="ReversingCamera">Reversing Camera</label>
              			</div>




              		</div>

              		<!-- Third column -->
              		<div class="col-md-4">

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="AirConditioning">
                   			<label class="form-check-label" for="AirConditioning">Air Conditioning</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="Anti-LockBrakes">
                   			<label class="form-check-label" for="Anti-LockBrakes">Anti-Lock Brakes</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="CruiseControl">
                   			<label class="form-check-label" for="CruiseControl">Cruise Control</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="NavigationSystem">
                   			<label class="form-check-label" for="NavigationSystem">Navigation System</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="PowerSteering">
                   			<label class="form-check-label" for="PowerSteering">Power Steering</label>
              			</div>

              			<div class="mb-3">
              				<input type="checkbox" class="form-check-input" id="TintedWindows">
                   			<label class="form-check-labe" for="">Tinted Windows</label>
              			</div>


              		</div>
              	</div>

              	<!-- 
              	Dropjone Multi file upload 
				tutorial "https://tutorial101.blogspot.com/2020/12/jquery-ajax-drag-and-drop-file-upload.html"
              	-->
                <!-- <div class="photo-uploads mt-4 mb-md-4">
                	<label class="form-check-label" for="NavigationSystem">Photos for your ad <span>Only allowed jpg, png and jpeg and max file will not more than 3MB</span></label>
                	<div class="dropzone mt-3">
				        <div class="dz-message needsclick">
				            <h1>Drop files here or click to upload.</h1>
				        </div>
				    </div>
                </div> -->

				<div class="mb-4">
                  <label class="form-label">Photos for Your Ad</label>
                  <input type="file"  class="form-control" name="image" accept="image/*">
                </div>

                <div class="mb-4">
                  <label class="form-label">Youtube Video Link</label>
                  <input type="text"  name="youtubelink" class="form-control">
                </div>

                <div class="mb-4">
                  <label class="form-label">Tags <span>Comma(,) sepataed</span></label>
                  <textarea rows="3" name="tags" class="form-control"></textarea>
                </div>

                <div class="mb-4">
                  <label class="form-label">Ad Description <span>Enter long description for your project</span></label>
                  <textarea name="editor1" name="description" rows="3" class="form-control"></textarea>
                </div>

                <h3 class="user-info mb-4 mt-5" style="border-bottom: 1px solid #ddd; padding-bottom: 5px;">User Information</h3>

				<div class="mb-4">
	              	<label class="pb-2">City</label>
					
					<select class="form-control select2" name="cityId" required>
						@foreach ($cities as $city)
							<option>Select</option>
							<option value="{{ $city->id }}" {{ $city->id == old('cityId') ? 'selected' : ''}}>
									{{ ucwords($city->name) }}
							</option>
						@endforeach
					</select>

					@error('cities')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
              	</div>

              	<div class="row">
              		<div class="col-md-6">
              			<div class="mb-4">
		                  <label class="form-label">Your Name</label>
		                  <input type="text" name="{{ Auth::id() }}" class="form-control" value="{{ Auth::user()->name }}">
		                </div>
              		</div>

              		<div class="col-md-6">
              			<div class="mb-4">
		                  <label class="form-label">Mobile Number</label>
		                  <input type="text" name="sellermobile" class="form-control">
		                </div>
              		</div>
              	</div>

              	<div class="mb-4">
                  <label class="form-label">Address</label>
                  <input type="text" name="selleraddress" placeholder="Search Location" class="form-control">
                </div>

                <div class="mb-4 pb-4">
                  <button class="post-add" type="submit">POST MY AD</button>
                </div>
              
              
            </form>
          </div>
        </div>
      	<!-- form area End -->

      	<!-- Safety Tips For Buyers -->
      	<div class="col-md-4">
      		<div class="safety-tips">
	      		<h3>Safety Tips For Buyers</h3>
	      		<table>
	      			<tr>
	      				<td>1. </td>
	      				<td>Use a safe location to meet seller</td>
	      			</tr>
	      			<tr>
	      				<td>2. </td>
	      				<td>Avoid cash transactions</td>
	      			</tr>
	      			<tr>
	      				<td>3. </td>
	      				<td>Beware of unrealistic offers</td>
	      			</tr>
	      			<tr>
	      				<td>4. </td>
	      				<td>Check the item before you buy</td>
	      			</tr>
	      			<tr>
	      				<td>5.</td>
	      				<td>Pay only after collecting item</td>
	      			</tr>
	      		</table>
	      	</div>
      	</div>

      </div>
    </div>
  </div>

@endsection

