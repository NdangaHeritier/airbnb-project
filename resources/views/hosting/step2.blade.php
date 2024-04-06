@extends('hosting.layout')

@section('contents')

<div class="h2 fs-2 container pt-5">
			Step 2: Photos and emenities of your place
		</div>
		<form method="POST" action="{{route('post.step2')}}" class="" enctype="multipart/form-data">
			@csrf
			<div class="p-3 offset-2 w-75 ps-5 pb-5 mb-5">
				<label class="text-body py-3 h5 text-muted">
					<i class="fa fa-chevron-right me-3 text-dark"></i>
				What your place offer
				</label>
				<div class="row">
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="checkbox" name="emenities[]" id="ec1" class="form-check-input float-end" value="wifi">
						</div>
						<label for="ec1" class="label pt-3 w-100 p-2 text-dark text-center">
							<i class="fa fa-wifi fs-3 ms-3 mb-3"></i>
							<div class="label-content mx-2">WIFI</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="checkbox" name="emenities[]" id="ec2" class="form-check-input float-end" value="tv">
						</div>
						<label for="ec2" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-television fs-3 ms-3 mb-3"></i>
							<div class="label-content mx-2">TV</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="checkbox" name="emenities[]" id="ec3" class="form-check-input float-end" value="kitchen">
						</div>
						<label for="ec3" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-kitchen-set fs-3 ms-2 mb-3"></i>
							<div class="label-content mx-2">Kitchen</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="checkbox" name="emenities[]" id="ec4" class="form-check-input float-end" value="washer">
						</div>
						<label for="ec4" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-air-freshener fs-3 ms-2 mb-3"></i>
							<div class="label-content mx-2">Washer</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="checkbox" name="emenities[]" id="ec5" class="form-check-input float-end" value="air conditioning">
						</div>
						<label for="ec5" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-cloud-showers-water fs-3 ms-2 mb-1"></i>
							<div class="label-content mx-2">Air conditioning</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="checkbox" name="emenities[]" id="ec6" class="form-check-input float-end" value="Free Parking">
						</div>
						<label for="ec6" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-parking fs-3 ms-2 mb-3"></i>
							<div class="label-content mx-2">Free parking</div>
						</label>
					</div>
				</div>
			</div>
			<div class="category offset-1 w-75">
				<label class="text-body py-3 h5 text-muted offset-2">
					<i class="fa fa-chevron-right me-3 text-dark"></i>
				Set atleast 5 photos of your place?
				</label>
				<div class="row offset-2 w-75 mb-5 pb-5">
					<div class="check1 col w-100">
						<div class="position-absolute overflow-hidden border-bottom border-end text-right bg-dark p-2 fw-bold text-light">
							Cover photo(1)
							<input type="file" accept=".jpg,.png" name="cover" id="pc1" class="d-none form-control border-none" oninput="document.getElementById('filename').innerHTML=this.value">
						</div>
						<label for="pc1" class="label upload pt-3 w-100 p-2 text-dark text-center">
							<i class=" fa fa-cloud-upload fs-1 m-3"></i>
							<div id="filename" class="label-content text-success sticky-bottom  mt-3 text-center w-100 p-2  alert-success rounded-bottom">No image selected!</div>
						</label>
					</div>
					<div class="check1 col w-100">
						<div class="position-absolute overflow-hidden border-bottom border-end text-right bg-dark fw-bold p-2 text-light">
							other photos(4+)
							<input type="file" name="photos[]" id="pc2" class="d-none form-control border-none" accept=".jpg,.png" oninput="document.getElementById('filenames').innerHTML='images selected!'" multiple>
						</div>
						<label for="pc2" class="label upload pt-3 w-100 text-dark text-center">
							<i class=" fa fa-cloud-upload fs-1 m-3"></i>
							<div id="filenames" class="label-content text-success sticky-bottom  mt-2 text-center w-100  alert-success rounded-bottom">Make sure you select 4 or more images within same folder</div>
						</label>
					</div>
					<label class="text-body py-3 h5 text-muted">
						<i class="fa fa-chevron-right me-3 text-dark"></i>
						Describe what makes your place so special?
					</label>
					<div class="">
						<textarea name="place_description" class="form-control w-100 p-3 fs-5 bg-light" rows="10" onmousedown="this.innerHTML='My place is very peaceful and so amazing! I hope you will enjoy it.'">
							
						</textarea>
					</div>
				</div>

			</div>
			<div class="fotter fixed-bottom bg-light">
				<div class="progress d-sm-flex  row">
					<div class="col-sm-1" style="background-color: rgba(0, 0, 0, 0.9);">
						
					</div>
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.9);">
						
					</div>
					<div class="col-sm-1  border-end border-white border-4" style="background-color: rgba(0, 0, 0, 0.9);">
						
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