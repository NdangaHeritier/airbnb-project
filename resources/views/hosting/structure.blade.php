@extends('hosting.layout')

@section('contents')

		<div class="h2 fs-2 container pt-5">
			Step 1: Hosting your place
		</div>
		<form action="{{route('post.structure')}}" method="POST" class="">
			@csrf
			<div class="p-3 offset-2 w-75 ps-5 pb-5 mb-2">
				<label class="text-body py-3 h5 text-muted">
					<i class="fa fa-chevron-right me-3 text-dark"></i>
				Choose or set the title for your place to help custome explore it easily.
				</label>
				<input type="text" name="place_name" class="form-control p-3 w-75">
				<span class="text-danger">@error('place_name')<i class="fa fa-warning text-danger me-2"></i> {{$message}} @enderror</span>
			</div>
			<div class="category offset-1 w-75">
				<label class="text-body py-3 h5 text-muted offset-2">
					<i class="fa fa-chevron-right me-3 text-dark"></i>
				Which of these discribes your place?
				</label>
				<div class="row offset-2 w-75">
				<span class="text-danger pb-3">@error('place_category')<i class="fa fa-warning text-danger me-2"></i> {{$message}} @enderror</span>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc1" class="form-check-input float-end" value="house">
						</div>
						<label for="pc1" class="label pt-3 w-100 p-2 text-dark text-center">
							<img src="../images/house.png" class="ms-3">
							<div class="label-content mx-2">house</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc2" class="form-check-input float-end" value="apartment">
						</div>
						<label for="pc2" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/apartment.png" class="ms-3">
							<div class="label-content mx-2">apartment</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc3" class="form-check-input float-end" value="hotel">
						</div>
						<label for="pc3" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/hotel.png" class="ms-3">
							<div class="label-content mx-2">hotel</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc4" class="form-check-input float-end" value="cabin">
						</div>
						<label for="pc4" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/cabin.png" class="ms-3">
							<div class="label-content mx-2">cabin</div>
						</label>
					</div>
				</div>
				<div class="row offset-2 w-75 mt-3">
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc5" class="form-check-input float-end" value="castle">
						</div>
						<label for="pc5" class="label pt-3 w-100 p-2 text-dark text-center">
							<img src="../images/castle.png" class="ms-3">
							<div class="label-content mx-2">castle</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc6" class="form-check-input float-end" value="dome">
						</div>
						<label for="pc6" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/dome.png" class="ms-3">
							<div class="label-content mx-2">Dome</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc7" class="form-check-input float-end" value="boat">
						</div>
						<label for="pc7" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/boat.png" class="ms-3">
							<div class="label-content mx-2">Boat</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc8" class="form-check-input float-end" value="Bed & breakfast">
						</div>
						<label for="pc8" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/bed.png" class="ms-3">
							<div class="label-content mx-2">Bed & breakfast</div>
						</label>
					</div>
				</div>
				<div class="row offset-2 w-75 mt-3">
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc9" class="form-check-input float-end" value="casa particular">
						</div>
						<label for="pc9" class="label pt-3 w-100 p-2 text-dark text-center">
							<img src="../images/casa.png" class="ms-3">
							<div class="label-content mx-2">Casa particular</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc10" class="form-check-input float-end" value="farm">
						</div>
						<label for="pc10" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/farm.png" class="ms-3">
							<div class="label-content mx-2">Farm</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc11" class="form-check-input float-end" value="barn">
						</div>
						<label for="pc11" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/barn.png" class="ms-3">
							<div class="label-content mx-2">barn</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc12" class="form-check-input float-end" value="earth homes">
						</div>
						<label for="pc12" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/earth-homes.png" class="ms-3">
							<div class="label-content mx-2">Earth homes</div>
						</label>
					</div>
				</div>
				<div class="row offset-2 w-75 mt-3 mb-5 pb-5">
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc13" class="form-check-input float-end" value="GuestHouse">
						</div>
						<label for="pc13" class="label pt-3 w-100 p-2 text-dark text-center">
							<img src="../images/guesthouse.png" class="ms-3">
							<div class="label-content mx-2">GuestHouse</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc14" class="form-check-input float-end" value="container">
						</div>
						<label for="pc14" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/container.png" class="ms-3">
							<div class="label-content mx-2">Container</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc15" class="form-check-input float-end" value="cave">
						</div>
						<label for="pc15" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/cave.png" class="ms-3">
							<div class="label-content mx-2">Cave</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="place_category" id="pc16" class="form-check-input float-end" value="Camper">
						</div>
						<label for="pc16" class="label pt-3 p-2 text-dark text-center w-100">
							<img src="../images/camper.png" class="ms-3">
							<div class="label-content mx-2">Camper</div>
						</label>
					</div>
				</div>

			</div>
			<div class="fotter fixed-bottom bg-light">
				<div class="progress d-sm-flex  row">
					<div class="col-sm-1" style="background-color: rgba(0, 0, 0, 0.2);">
						
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

@endsection