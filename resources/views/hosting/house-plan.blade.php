@extends('hosting.layout')

@section('contents')

		<form method="POST" action="{{route('post.HousePlan')}}" class="">
			@csrf
			<div class="category offset-1 w-75 mb-5 pb-5">
				<label class="text-body py-5 h2 offset-2">
					<i class="fa fa-chevron-right me-3 text-dark"></i>
				How your place is planned?
				</label>
				<div class="row offset-2 w-75">
					<div class="check1">
						<div for="pt1" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">Guests</div>
								<div class="label-content  text-muted">
									Number of peoples can stay in your place.
								</div>
							</div>
							<div class="w-25 p-3">
								<button onclick="decrement(this, 'guests', 'add1')" type="button" class="bton rounded-circle" id="remove1"><i class="fa fa-minus"></i></button>
								<input type="number" name="number_of_guests" readonly class="border-0 fw-bold text-center w-25" value="1" max="16" min="0" id="guests">
								<button onclick="increment(this, 'guests', 'remove1')" type="button" class="bton rounded-circle" id="add1"><i class="fa fa-add"></i></button>
							</div>
						</div>
						<div class="check2 mt-3">
						<div for="pt1" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">Bedrooms</div>
								<div class="label-content  text-muted">
									Number of bedrooms that guests will have at your place.
								</div>
							</div>
							<div class="w-25 p-3">
								<button onclick="decrement(this, 'bedrooms', 'add2')" type="button" class="bton rounded-circle" id="remove2"><i class="fa fa-minus"></i></button>
								<input type="number" name="number_of_bedrooms" readonly class="border-0 fw-bold text-center w-25" value="1" max="16" min="0" id="bedrooms">
								<button onclick="increment(this, 'bedrooms', 'remove2')" type="button" class="bton rounded-circle" id="add2"><i class="fa fa-add"></i></button>
							</div>
						</div>
						<div class="check2 mt-3">
						<div for="pt1" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">Beds</div>
								<div class="label-content  text-muted">
									Number of beds that guests will have at your place.
								</div>
							</div>
							<div class="w-25 p-3">
								<button onclick="decrement(this, 'beds', 'add3')" type="button" class="bton rounded-circle" id="remove3"><i class="fa fa-minus"></i></button>
								<input type="number" name="number_of_beds" readonly class="border-0 fw-bold text-center w-25" value="1" max="16" min="0" id="beds">
								<button onclick="increment(this, 'beds', 'remove3')" type="button" class="bton rounded-circle" id="add3"><i class="fa fa-add"></i></button>
							</div>
						</div>
					</div>

					<label class="text-body py-5 h2">
						<i class="fa fa-chevron-right me-3 text-dark"></i>
						Does every bedroom has a lock?
					</label>
					<div class="row offset-1 w-50">
						<div class="check1 col px-3">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="all_bedroom_has_bedroom_lock" id="pc3" class="form-check-input float-end" value="Yes" checked>
						</div>
						<label for="pc3" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-lock fs-2 ms-2"></i>
							<div class="label-content fs-5 pt-2 mx-2">Yes</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="all_bedroom_has_bedroom_lock" id="pc4" class="form-check-input float-end" value="cabin">
						</div>
						<label for="pc4" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-lock-open fs-2 ms-2"></i>
							<div class="label-content fs-5 mx-2 pt-2">No</div>
						</label>
					</div>
					</div>
					<label class="text-body py-5 h2">
						<i class="fa fa-chevron-right me-3 text-dark"></i>
						How many bathrooms does your place have?
					</label>
					<div class="check1">
						<div for="pt1" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">Private and Attached</div>
								<div class="label-content  text-muted">
									Connected to guest's room and only for them.
								</div>
							</div>
							<div class="w-25 p-3">
								<button onclick="decrement(this, 'privates', 'add4')" type="button" class="bton rounded-circle" id="remove4"><i class="fa fa-minus"></i></button>
								<input type="number" name="private" readonly class="border-0 fw-bold text-center w-25" value="1" max="16" min="0" id="privates">
								<button onclick="increment(this, 'privates', 'remove4')" type="button" class="bton rounded-circle" id="add4"><i class="fa fa-add"></i></button>
							</div>
						</div>
						<div class="check2 mt-3">
						<div for="pt1" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">Dedicated</div>
								<div class="label-content  text-muted">
									Private but accessed via a shared space.
								</div>
							</div>
							<div class="w-25 p-3">
								<button onclick="decrement(this, 'dedicated', 'add5')" type="button" class="bton rounded-circle" id="remove5"><i class="fa fa-minus"></i></button>
								<input type="number" name="dedicated" readonly class="border-0 fw-bold text-center w-25" value="1" max="16" min="0" id="dedicated">
								<button onclick="increment(this, 'dedicated', 'remove5')" type="button" class="bton rounded-circle" id="add5"><i class="fa fa-add"></i></button>
							</div>
						</div>
						<div class="check2 mt-3">
						<div for="pt1" class="label pt-3 w-100 p-3 text-dark text-start d-sm-flex">
							<div class="w-75">
								<div class="label-content  h5">Shared</div>
								<div class="label-content  text-muted">
									Are shared/public to all peoples/guests visit your place.
								</div>
							</div>
							<div class="w-25 p-3">
								<button onclick="decrement(this, 'shared', 'add6')" type="button" class="bton rounded-circle" id="remove6"><i class="fa fa-minus"></i></button>
								<input type="number" name="shared" readonly class="border-0 fw-bold text-center w-25" value="1" max="16" min="0" id="shared">
								<button onclick="increment(this, 'shared', 'remove6')" type="button" class="bton rounded-circle" id="add6"><i class="fa fa-add"></i></button>
							</div>
						</div>
					</div>
					<label class="text-body pt-5 h2">
						<i class="fa fa-chevron-right me-3 text-dark"></i>
						Who else might be there?
					</label>
					<div class="text-muted my-3 small py-3 bg-light border px-2 fs-5">
							<i class="fa fa-info-circle p-2"></i>
							Help customers know what kind of people to stay in your place.
						</div>
					<div class="row">
						<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input checked type="radio" name="guests_to_accept" id="p1" class="form-check-input float-end" value="Me">
						</div>
						<label for="p1" class="label pt-3 w-100 p-2 text-dark text-center">
							<i class="fa fa-user fs-3 p-2"></i>
							<div class="label-content mx-2">Me</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="guests_to_accept" id="p2" class="form-check-input float-end" value="My family">
						</div>
						<label for="p2" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-users fs-3 p-2"></i>
							<div class="label-content mx-2">My family</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="guests_to_accept" id="p3" class="form-check-input float-end" value="other guests">
						</div>
						<label for="p3" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-people-group fs-3 p-2"></i>
							<div class="label-content mx-2">Other guests</div>
						</label>
					</div>
					<div class="check1 col">
						<div class="position-absolute text-right bg-light">
							<input type="radio" name="guests_to_accept" id="p4" class="form-check-input float-end" value="room mates">
						</div>
						<label for="p4" class="label pt-3 p-2 text-dark text-center w-100">
							<i class="fa fa-user-friends fs-3 p-2"></i>
							<div class="label-content mx-2">Room mates</div>
						</label>
					</div>
					</div>
				</div>	

			</div>
			<div class="fotter fixed-bottom bg-light">
				<div class="progress d-sm-flex  row">
					<div class="col-sm-1" style="background-color: rgba(0, 0, 0, 0.9);">
						
					</div>
					<div class="col-sm-2" style="background-color: rgba(0, 0, 0, 0.9);">
						
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
	<script type="text/javascript">
		function increment(buton, inputId, otherB){
			var input=document.getElementById(inputId);
			var other=document.getElementById(otherB);
			var value=parseInt(input.value);
			if(value>=16){
				buton.disabled=true;
				other.disabled=false;
			}
			else{
				buton.disabled=false;
				other.disabled=false;
				input.value=value+1;
			}
		}

		function decrement(buton, inputId, otherB){
			var input=document.getElementById(inputId);
			var value=parseInt(input.value);
			var other=document.getElementById(otherB);
			if(value<=0){
				buton.disabled=true;
				other.disabled=false;
			}
			else{
				buton.disabled=false;
				other.disabled=false;
				input.value=value-1;
			}
		}
	</script>
@endsection