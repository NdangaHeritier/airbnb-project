@extends("hosting.layout")

@section("contents")

<div class="h2 fs-2 container pt-5">
			Step 3: Finish and publish.
		</div>
		<form method="POST" action="{{route('post.finish')}}" class="" enctype="multipart/form-data">
            @csrf
			<div class="p-3 offset-2 w-75 ps-5 pb-5 mb-5">
				<label class="text-body py-3 h5 text-muted">
					<i class="fa fa-1 me-3 text-dark">.</i>
				Set a price for your place booking per one night.
				</label>
				<div class="row w-50 fw-bold" style="font-size: 50px;">
					<span class="col-sm-1 text-center">$</span>
					<div class="col-sm-3">
						<input type="number" name="price" class="border-0 fw-bold w-100 text-center" value="24" style="font-size: 50px;outline: none;">
					</div>
					<span class="col-sm-5 fs-5 pt-4">per night</span>
				</div>
				<label class="text-body py-3 h5 text-muted">
					<i class="fa fa-2 me-3 text-dark">.</i>
				Set a discount to your clients reservations to increase up your place bookings.
				</label>
				<div class="pt-2 px-4">
					<div class="row bg-light border rounded-3 p-3 mb-3" style="cursor: pointer;">
						<div class="col-sm-1">
							<input id="3book" type="radio" name="discount" checked class="form-check-input" value="30">
						</div>
						<label class="col-sm-11 text-dark h6" for="3book">
							<b>30%</b> Guests first 3 bookings.
						</label>
					</div>
					<div class="row bg-light border rounded-3 p-3 mb-3" style="cursor: pointer;">
						<div class="col-sm-1">
							<input id="week" type="radio" name="discount" class="form-check-input" value="10">
						</div>
						<label class="col-sm-11 text-dark h6" for="week">
							<b>10%</b> Guests stays of 7 nights or more (1week+).
						</label>
					</div>
					<div class="row bg-light border rounded-3 p-3 mb-3" style="cursor: pointer;">
						<div class="col-sm-1">
							<input id="month" type="radio" name="discount" class="form-check-input" value="15">
						</div>
						<label class="col-sm-11 text-dark h6" for="month">
							<b>15%</b> Guests stays of 28 nights or more( 1month+).
						</label>
					</div>
				</div>
				<label class="text-body py-3 h5 text-muted">
					<i class="fa fa-3 me-3 text-dark">.</i>
				Choose type of hosting.
				</label>
				<div class="pt-2 px-4">
					<div class="row bg-light border rounded-3 p-3 mb-3" style="cursor: pointer;">
						<div class="col-sm-1">
							<input id="in" type="radio" name="hosting_type" checked class="form-check-input" value="30% guests first three bookings">
						</div>
						<label class="col-sm-11 text-dark h6" for="in">
							Individual.
						</label>
					</div>
					<div class="row bg-light border rounded-3 p-3 mb-3" style="cursor: pointer;">
						<div class="col-sm-1">
							<input id="business" type="radio" name="hosting_type" class="form-check-input" value="business">
						</div>
						<label class="col-sm-11 text-dark h6" for="business">
							For business.
						</label>
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
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.9);">
							
					</div>
					<div class="col-sm-2 border-end border-white border-4" style="background-color: rgba(0, 0, 0, 0.9);">
							
					</div>
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.2);">
						
					</div>
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.2);">
						
					</div>
				</div>
				<div class="p-2">
					<button class="btn btn-dark bton-div float-end">
						<i class="fa fa-arrow-right me-2"></i>
						Finish
					</button>
				</div>
			</div>
		</form>
	</div>

@endsection