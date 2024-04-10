<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb</title>
    <link rel="shortcut icon" href="/images/top-logo.png">
	<link rel="stylesheet" type="text/css" href="/css/index.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/css/css/fontawesome.min.css">
    <script src="/js/index.js" type="text/javascript"></script>
	<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<style>
		.bton{
			border: 1px solid rgb(190, 190, 190);
		}
		.bton:hover, .bton-div:hover{
			border: 1px solid rgb(50, 50, 50);
		}
		input[type=number]{outline:none;}
	</style>
</head>
<body>
	<header class="p-3 border-bottom m-1">
		<div class="row">
			<div class="img col-sm-9 px-5">
				<a href="/"><img src="/images/airbnb-logo.png"></a>
			</div>
            <div class="col-sm-3 d-sm-flex">
				<a href="/become-a-host" class="btn text-dark hover rounded-pill">Airbnb Your Home</a>
				<a href="#" class="btn text-dark hover rounded-pill" onclick="show_div('language')"><img src="/images/language.png"></a>
				@if(Session::has('LoginId'))
				<div class="btn rounded-pill border" onclick="document.getElementById('menu-loggedin').style.display='block'">
					<img src="/images/menu.png">
					<img src="/profiles/{{Session::get('LoginId')->profile_pic}}" alt="" class="rounded-circle p-1 border" height="30" width="30">
				</div>
				@else
				<div class="btn rounded-pill border" onclick="document.getElementById('menu-notloggedin').style.display='block'">
					<img src="/images/menu.png">
					<img src="/images/user.png">
				</div>
				@endif
				<div id="menu-loggedin" class="pb-4 border bg-white p-2 shadow position-absolute ms-5" style="width: 270px;border-radius: 1rem;margin-top: 4rem;display:none; z-index: 9999">
					<div class="title row ms-2 me-1">
						<button class="text-end border-0 col bg-white w-100">
							<i class="fa fa-close py-1 mb-1 btn btn-sm btn-light rounded-circle" onclick="document.getElementById('menu-loggedin').style.display='none'"></i>
						</button>
					</div>
					<div class="menu w-100  text-muted">
						<div class="sub-menu pb-2 mt-2 w-100 border-bottom">
							<a href="../wishlists" class="px-2 text-decoration-none p-2 text-dark w-100">WishLists</a>
						</div>
						<div class="sub-menu mt-2 w-100">
							<a href="../host" class="px-2 text-decoration-none p-2 text-dark w-100">Manage Listings</a>
						</div>
						<div class="sub-menu mt-2 w-10 pb-2 border-bottom">
							<a href="../account" class="px-2 text-decoration-none p-2 text-dark w-100">Account</a>
						</div>
						<div class="sub-menu mt-2 w-100">
							<a href="../logout" class="px-2 text-decoration-none p-2 text-dark w-100">Logout</a>
						</div>
						
					</div>
				</div>
				<div id="menu-notloggedin" class="pb-4 border bg-white p-2 shadow position-absolute ms-5" style="width: 270px;border-radius: 1rem;margin-top: 4rem;display:none; z-index: 9999">
					<div class="title row ms-2 me-1">
						<button class="text-end border-0 col bg-white w-100">
							<i class="fa fa-close py-1 mb-1 btn btn-sm btn-light rounded-circle" onclick="document.getElementById('menu-notloggedin').style.display='none'"></i>
						</button>
					</div>
					<div class="menu w-100  text-muted">
						<div class="sub-menu pb-2 mt-2 w-100 border-bottom">
							<a href="/login" class="px-2 text-decoration-none p-2 text-dark w-100">Login</a>
						</div>
						<div class="sub-menu mt-2 w-100">
							<a href="/login" class="px-2 text-decoration-none p-2 text-dark w-100">WishLists</a>
						</div>
						<div class="sub-menu mt-2 w-10 pb-2 border-bottom">
							<a href="/" class="px-2 text-decoration-none p-2 text-dark w-100">Airbnb Home</a>
						</div>
						<div class="sub-menu mt-2 w-100">
							<a href="/become-a-host" class="px-2 text-decoration-none p-2 text-dark w-100">Airbnb it</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
</header>
@if(Session::has('message'))
	<div class="alert alert-danger"><i class="fa fa-circle-info mx-4"></i>{{Session::get('message')}}</div>
@endif
@if(Session::has('success'))
	<div class="alert alert-success"><i class="fa fa-heart mx-4"></i>{{Session::get('success')}} <a href="{{url('/wishlists')}}" class="alert-link small text-decoration-none">Open wishlist.</a></div>
@endif
@if(Session::has('reservation'))
	<div class="alert alert-success"><i class="fa fa-check mx-4"></i>Reservation provided successfully! check in place of the form you'll see full details.</div>
@endif
<div class="p-3">
<div class="text-dark title h4 p-3 ps-0 ms-5">{{$posts->place_name}} <i class="fa fa-circle-check text-dark small"></i></div>
    <div class="d-sm-flex bg-dark ms-5" style="overflow: hidden; height: 350px ;border-radius:1rem">
        <div class="col-sm-5">
            <img src="/place-cover/{{$posts->cover_photo}}" width="100%" alt="" height="350" >
        </div>
        <div class="col-sm-7 row">
            @foreach($posts->photos as $photo)
            <div class="col-sm-6 d-inline-block">
                <img src="/place_photos/{{$photo->filename}}" alt="{{$photo->filename}}" class="border-5 border border-top-0 border-white " width="375" height="200">
            </div>
            @endforeach
        </div>
    </div>
    <div class="p-3 ps-0 row ms-5">
		<div class="col-sm-7">
			<div class="text-dark title h5">Entire {{$posts->place_category}} in {{$posts->province}} province, {{$posts->city}}, {{$posts->place_region}} </div>
			<div class="text-body title">
				{{$posts->number_of_guests}} guests. {{$posts->number_of_bedrooms}} bedrooms. {{$posts->number_of_beds}} beds
			</div>
			<div class="fw-bold py-2 d-sm-flex">
				<div class="pe-3 pt-2"><i class="fa fa-star fa-sm"></i> 4.5</div>
					@if(Session::has('wishlist'))
					<form action="{{url('/add-wish-place/' . Session::get('wishlist')->id)}}" method="post">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<button class="btn btn-danger px-2 small rounded-pill">
							<i class="fa fa-heart mx-2 "></i>
							<span class="pe-2">Remove from favorites</span>
						</button>
					</form>
					@else
					<form action="{{url('/add-wish-place/' . $posts->id)}}" method="post">
						{!! csrf_field() !!}
						@method('PATCH')
						<button class="btn btn-light border border-dark px-2 rounded-pill">
							<i class="fa fa-heart me-2 text-dark"></i>
							Add to your favorites
						</button>
					</form>
					@endif
			</div>
			<div class="d-sm-flex py-3 my-2 border-top border-bottom">
				<div class="img">
					<img src="/profiles/{{$posts->profile_pic}}" alt="" class="rounded-circle border-success border border-2" height="50" width="50">
				</div>
				<div class="px-3">
					<div class="text-dark fs-5 fw-bold">{{$posts->fullname}} <i class="fa fa-circle-check h6 text-success"></i></div>
					<div class="text-muted small">Meet host.</div>
				</div>
			</div>
			<div class="py-3 border-bottom">
				<div class="p-2 h5">
					<i class="fa fa-gifts text-muted me-3"></i>
					Emenities offered in this place. 
				</div>
				@foreach($posts->emenities as $emenity)
				<div class="ps-5 h6 text-muted">
					<i class="fa fa-check-square me-2"></i>
					{{$y=str_replace(',',', ',$emenity->emenities_list)}}
					
				</div>
				@endforeach
			</div>
			<div class="py-3 border-bottom">
				<div class="p-2 fs-5 small d-sm-flex">
					<div class="py-2 pe-3">
					<i class="fa fa-message text-muted me-3"></i>
					</div>
					{{$posts->place_description}}
				</div>
				<div class="ps-5 text-muted">
					<i class="fa fa-share-nodes me-2"></i>
					Message from host.
				</div>
			</div>
			<div class="py-3 border-bottom">
				<div class="p-2 h5">
					<i class="fa fa-soap text-muted me-3"></i>
					Bathrooms. 
				</div>
				@foreach($posts->bathrooms as $baths)
				<div class="ms-4 ps-2 d-sm-flex border-start rounded bg-light border-5">
					<div class="pe-2 p-3 fs-3 fw-bold">
						<i class="fa text-muted fa-house-user me-2"></i> {{$baths->private}} 
					</div>
					<div class="ps-3">
						<div class="text-dark pt-2 fs-5">Private</div>
						<div class="text-muted">Are attached on guest's room.</div>
					</div>
					
				</div>
				<div class="ms-4 ps-2 d-sm-flex border-start rounded bg-light border-5 mt-2">
					<div class="pe-2 p-3 fs-3 fw-bold">
						<i class="fa text-muted fa-door-closed me-2"></i> {{$baths->dedicated}} 
					</div>
					<div class="ps-3">
						<div class="text-dark pt-2 fs-5">Dedicated</div>
						<div class="text-muted">Are private but, accessed in public space.</div>
					</div>
					
				</div>
				<div class="ms-4 ps-2 d-sm-flex border-start rounded bg-light border-5 mt-2">
					<div class="pe-2 p-3 fs-3 fw-bold">
						<i class="fa text-muted fa-people-line me-2"></i> {{$baths->shared}} 
					</div>
					<div class="ps-3">
						<div class="text-dark pt-2 fs-5">Shared</div>
						<div class="text-muted">Are bathrooms that are shared to all guests in a place.</div>
					</div>
					
				</div>
				@endforeach
			</div>
			<div class="ps-3 pt-3 text-muted">
				<i class="fa fa-info-circle me-3"></i>Also this place offers {{$posts->place_type}} for any guests who stayed with it.
			</div>
		</div>
		<div class="col-sm-5 pt-5 ps-4">
			@if(Session::has('reservation'))
			<div style="border-radius: 1rem" class="ms-3 p-5 shadow bg-white sticky-top">
				<div class="alert alert-dark h6">Reservation provided successfully with:</div>
				<div class="border rounded fs-5">
					<div class=" p-3 text-muted small border-bottom d-sm-flex">
						<div class="py-2">
							<i class="fa fa-calendar-days text-muted me-2"></i>
						</div>
						<span class="ms-2 small">Your trip will start on {{date_format(Session::get('reservation')->checkin_date,'d M Y')}} and end on
						{{date_format(Session::get('reservation')->checkout_date,'d M Y')}}</span>
					</div>
					<div class="p-3 border-bottom small d-sm-flex">
						<div class="py-2">
							<i class="fa fa-coins text-muted me-2"></i>
						</div>
						<div class="py-2">1 night: <b>${{$posts->price}}</b></div>
					</div>
					<div class="small p-3 bg-light border-bottom d-sm-flex">
						<div class="">
							<i class="fa fa-coins text-muted me-2"></i>
						</div>
						<div>Amount: <b>${{$posts->price}} x {{Session::get('reservation')->nights}} nights= ${{Session::get('reservation')->amount}}</b></div>
					</div>
					<div class="text-body small text-start p-3 d-sm-flex">
						<div class="py-2"><i class="fa fa-clock text-muted me-2"></i></div>
						<span class="small py-2">{{date('d M Y')}}</span>
					</div>
					<div class="text-body small text-center p-3 border-top d-sm-flex">
						<div class="py-2"><i class="fa fa-rotate-right text-muted me-2"></i></div>
						<span class="small py-2">
							Your reservation is not yet provided. it will require a host permission to be accepted.
						</span>
					</div>
					<div class="text-body small text-center border-top px-3 d-sm-flex">
						<div class="py-2"><i class="fa fa-phone text-muted me-2"></i></div>
						<span class="small py-2">
							Contact host on <a class="small" href="#">{{Session::get('reservation')->phone}}</a> or 
							<a class="small" href="#">{{Session::get('reservation')->email}}</a> to confirm you.
						</span>
					</div>
				</div>
				<div class="p-2">
					<a href="/" class="btn btn-sm btn-danger float-end mt-2">ok</a>
				</div>
			</div>
			@else
			<form action="{{route('reserve')}}" method="post" style="border-radius: 1rem" class="mt-5 ms-3 p-5 shadow bg-white sticky-top">
				@csrf 
				<div class="title h5 fw-bold py-3">
					<i class="fa fa-calendar-days fa-lg me-3 text-danger"></i>
					Reserve this place
				</div>
				<div class="py-3 border-top border-bottom h6 mx-2"><i class="fa fa-coins mx-2 text-muted small"></i> 1 night: ${{$posts->price}}</div>
				<div class="input-group p-2">
					<label for="indater" class="input-group-text text-dark p-3">
						<i class="fa-calendar-plus fa h6"></i>
					</label>
					<div class="ps-2 ms-5 position-absolute text-dark small pt-1" style="z-index: 999">
						<i class="fa fa-plane-arrival text-muted"></i> check-in
					</div>
					<input type="date" name="checkin_date" id="indater" class="form-control pt-4 text-muted">
				</div>
				<span class="text-danger">@error('checkin_date')<i class="small fa fa-warning m-2"></i>{{$message}} @enderror</span>
				<div class="input-group p-2">
					<label for="outdater" class="input-group-text text-dark p-3">
						<i class="fa-calendar-plus fa h6"></i>
					</label>
					<div class="ps-2 ms-5 position-absolute text-dark small pt-1" style="z-index: 999">
						<i class="fa fa-plane-departure text-muted"></i> check-out
					</div>
					<input type="date" name="checkout_date" id="outdater" class="form-control pt-4 text-muted">
				</div>
				<span class="text-danger">@error('checkout_date')<i class="small fa fa-warning m-2"></i>{{$message}} @enderror</span>
				<div class="px-3">
					<div class="check2 border-top border-bottom text-end p-2">
							<div for="pt1" class="label text-dark text-start d-sm-flex">
								<div class=" ">
									<div class="label-content ">Guests</div>
									<div class="label-content  text-muted">
										Adults 18+
									</div>
								</div>
								<div class=" offset-3 ps-3">
									<input type="number" name="guests" readonly class="border-0 text-end fw-bold" value="1" max="16" min="0" id="guests">
									<button onclick="decrement(this, 'guests', 'add2')" type="button" class="bton rounded-circle " id="remove2"><i class="fa fa-minus"></i></button>
									<button onclick="increment(this, 'guests', 'remove2')" type="button" class="bton rounded-circle" id="add2"><i class="fa fa-add"></i></button>
								</div>
							</div>
					</div>
					<div class="check3 border-top text-end p-2">
							<div for="pt1" class="label text-dark text-start d-sm-flex">
								<div class="w-50">
									<div class="label-content ">Infants</div>
									<div class="label-content  text-muted">
										Under 15 years of old.
									</div>
								</div>
								<div class=" ps-3">
								<input type="number" name="infants" readonly class="border-0 text-end fw-bold" value="1" max="16" min="0" id="infants">
									<button onclick="decrement(this, 'infants', 'add3')" type="button" class="bton rounded-circle" id="remove3"><i class="fa fa-minus"></i></button>
									<button onclick="increment(this, 'infants', 'remove3')" type="button" class="bton rounded-circle" id="add3"><i class="fa fa-add"></i></button>
								</div>
							</div>
					</div>
					<button type="submit" class="btn btn-danger btn-lg rounded-pill w-100 my-3">
						<i class="fa fa-arrow-right px-2"></i>
						reserve
					</button>
					<div class="border-top small text-center text-muted">Reservations require to be logged in to Airbnb.</div>
				</div>
			</form>
			@endif
		</div>
    </div>
</div>
<footer class="p-3 bg-light border-top mt-3 row">
        <div class="col">
        © 2024 <a href="index.php" class="link-dark text-decoration-none px-1">Airbnb, Inc.</a> · 
        <a href="#" class="link-dark text-decoration-none px-1"> Terms .</a>
        <a href="#" class="link-dark text-decoration-none px-1"> Sitemap</a> . 
        <a href="#" class="link-dark text-decoration-none px-1">Privacy</a> . 
        <a href="#" class="link-dark text-decoration-none px-1">Your Privacy Choices <i class="fa fa-eye-low-vision ps-3 text-primary"></i></a>
        </div>
        <div class="col text-end">
            <i class="fa fa-language"></i><a class="link-dark text-decoration-none px-2" href="#">English(US)</a>
            <i class="fa fa-dollar fw-bold ps-3"></i><a class="link-dark text-decoration-none pe-3" href="#">USD</a>
            <a class="btn-sm btn-dark text-decoration-none px-2" href="#"><i class="fa-brands fa-facebook"></i></a>
            <a class="btn-sm btn-dark text-decoration-none px-2" href="#"><i class="fa-brands fa-instagram"></i></a>
            <a class="btn-sm btn-dark text-decoration-none px-2" href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </footer>
<script type="text/javascript">
		function increment(buton, inputId, otherB){
			var input=document.getElementById(inputId);
			var other=document.getElementById(otherB);
			var value=parseInt(input.value);
			if(inputId=="guests"){
				if(value>={{$posts->number_of_guests}}){
				buton.disabled=true;
				other.disabled=false;
			}
			else{
				buton.disabled=false;
				other.disabled=false;
				input.value=value+1;
			}
			}else{
				if(value>=5){
				buton.disabled=true;
				other.disabled=false;
			}
			else{
				buton.disabled=false;
				other.disabled=false;
				input.value=value+1;
			}
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
</body>
</html>