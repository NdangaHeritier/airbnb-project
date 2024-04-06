@extends('hosting.layout')

@section('contents')

		<form method="POST" action="{{route('post.privacyType')}}" class="">
			@csrf
			<div class="category offset-1 w-75 mb-5 pb-5">
				<label class="text-body py-5 h2 offset-2">
					<i class="fa fa-chevron-right me-3 text-dark"></i>
				What type of place will your guests have?
				</label>
				<div class="row offset-2 w-75">
					<div class="check1">
						<div class="position-absolute text-right bg-light">
							<input checked type="radio" name="place_type" id="pt1" class="form-check-input float-end" value="An entire place">
						</div>
						<label for="pt1" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">An entire place</div>
								<div class="label-content  text-muted">
									Guests have the whole place for them selves.
								</div>
							</div>
							<div class="w-25">
								<img src="../images/house.png" class="float-end">
							</div>
						</label>
					</div>
					<div class="check1 mt-3">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_type" id="pt2" class="form-check-input float-end" value="A Room">
						</div>
						<label for="pt2" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">A Room</div>
								<div class="label-content  text-muted">
									Guests have their own room in a home, plus access to shared spaces.
								</div>
							</div>
							<div class="w-25">
								<img src="../images/room.png" class="float-end">
							</div>
						</label>
					</div>
					<div class="check1 mt-3 mb-5">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_type" id="pt3" class="form-check-input float-end" value="A shared room">
						</div>
						<label for="pt3" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">A shared room</div>
								<div class="label-content  text-muted">
									Guests sleep in a room or common area that may be shared with you or others.
								</div>
							</div>
							<div class="w-25">
								<img src="../images/shared-room.png" class="float-end">
							</div>
						</label>
					</div>
					<label class="text-body py-5 h2">
						<i class="fa fa-chevron-right me-3 text-dark"></i>
						Where your place is located have?
					</label>
					<div class="location row g-3">
					  <div class="col-12 row">
					  	<div class="col">
					  	<label for="inputAddress" class="form-label text-dark h5">Region/ country</label>
					    <select class="form-select p-3" name="place_region" id="inputAddress">
					    	<option value="">--select region</option>
					    	<option value="Rwanda">Rwanda</option>
					    	<option value="Burundi">Burundi</option>
					    	<option value="Kenya">Kenya</option>
					    	<option value="Uganda">Uganda</option>
					    	<option value="Tanzania">Tanzania</option>
					    	<option value="South-sudan">South sudan</option>
					    </select>
						<span class="text-danger">@error('place_region')<i class="fa fa-warning text-danger me-2"></i> {{$message}} @enderror</span>
					  	</div>
					  	<div class="col">
					  		<label for="inputprovince" class="form-label h5 text-dark">Province</label>
					    	<input type="text" name="province" class="form-control p-3" id="inputprovince" placeholder="Kigali city">
							<span class="text-danger">@error('province')<i class="fa fa-warning text-danger me-2"></i> {{$message}} @enderror</span>
						</div>
					  </div>
					  <div class="col-12 row p-3">
					  	<div class="col">
					  	<label for="inputCity" class="form-label text-dark h5">City</label>
					    <input type="text" name="city" class="form-control p-3" id="inputCity" placeholder="Kigali">
						<span class="text-danger">@error('city')<i class="fa fa-warning text-danger me-2"></i> {{$message}} @enderror</span>
					  	</div>
					  	<div class="col">
					  		<label for="inputStreet" class="form-label h5 text-dark">street</label>
					    	<input type="text" name="street" class="form-control p-3" id="inputStreet" placeholder="1234 Main St">
							<span class="text-danger">@error('street')<i class="fa fa-warning text-danger me-2"></i> {{$message}} @enderror</span>
						</div>
					  	<div class="col">
					  		<label for="inputPostalCode" class="form-label h5 text-dark">Postal code</label>
					    	<input type="text" name="postal_code" class="form-control p-3" id="inputPostalCode" placeholder="* * * * *">
							<span class="text-danger">@error('postal_code')<i class="fa fa-warning text-danger me-2"></i> {{$message}} @enderror</span>
						</div>
					  </div>
					</div>
				</div>	

			</div>
			<div class="fotter fixed-bottom bg-light">
				<div class="progress d-sm-flex  row">
					<div class="col-sm-1" style="background-color: rgba(0, 0, 0, 0.9);">
						
					</div>
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.2);">
						
					</div>
					<div class="col-sm-1  border-end border-white border-4" style="background-color: rgba(0, 0, 0, 0.2);">
						
					</div>
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.2);">
							
					</div>
					<div class="col-sm-2 border-end border-white border-4" style="background-color: rgba(0, 0, 0, 0.2);">
							
					</div>
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.2);">
						
					</div>
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.2);">
						
					</div>
				</div>
				<div class="p-2">
					<button class="btn btn-dark bton-div float-end">
						<i class="fa fa-arrow-right me-2"></i>
						Next
					</button>
				</div>
			</div>
		</form>
	</div>
@endsection