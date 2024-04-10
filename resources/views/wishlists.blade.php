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
<div class="p-2 m-0">
    <i class="fa fa-star px-3 text-danger"></i>
    <span class="text-dark fs-5">Your Wishlist.</span>
</div>
@if(Session::has('success'))
<div class="alert alert-success mx-2">
    <i class="fa fa-check mx-3"></i>
    {{Session::get('success')}}
</div>
@endif

<div class="p-3 px-5 row">
    @if(count($places)==0)
        <div class="p-5 text-muted h5" style="height:350px">
           <i class="fa fa-warning px-3 fs-2"></i> There's no any place of your wishes saved.
        </div>
    @endif
    @foreach($places as $host)
        <div class="col-sm-3">
            <div id="slide{{$loop->iteration}}" class="carousel slide">
                <div class="carousel-inner overflow-hidden" style="border-radius: 1rem;">
                    
                        <div class="d-none d-md-block float-end position-absolute w-100 p-3" style="z-index: 999;">	
                        @if($host->price>=100)
                        <span class="btn btn-light btn-sm shadow rounded-pill">
                            <i class="fa fa-star px-2"></i>Guests favorite
                        </span>	
                        @endif						
                            <i class="fa fa-heart text-light shadow-lg float-end" style="text-shadow: 0px 0px 2px grey;"></i>
                            
                        </div>
                        <a href="{{url('/view/' . $host->id)}}" class="">
                        <div class="carousel-item active">
                        <img src="/place-cover/{{$host->cover_photo}}" height="290" width="100%" class="m-0">
                        
                        </div>
                        @foreach($host->photos as $photo)
                        <div class="carousel-item">
                        <img src="/place_photos/{{$photo->filename}}" height="290" width="100%" class="m-0">
                        
                        </div>
                        @endforeach
                    
                    </a>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slide{{$loop->iteration}}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rounded-circle shadow bg-white text-dark pt-1" aria-hidden="true"><i class="fa fa-chevron-left fa-sm"></i></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slide{{$loop->iteration}}" data-bs-slide="next">
                    <span class="carousel-control-next-icon rounded-circle shadow bg-white text-dark pt-1" aria-hidden="true">
                        <i class="fa fa-chevron-right fa-sm"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                    <a href="{{url('/show/'.$host->id)}}" class="pt-2 text-body small text-decoration-none">
                        <div class="place-name text-dark fw-bold small pt-2">
                            {{$host->place_name}}
                            <span class="text-end float-end"><i class="fa fa-star mx-2"></i>4.5</span>
                        </div>
                        <div class="place-address text-muted small">{{$host->city}} - {{$host->place_region}}/ {{$host->province}} {{$host->street}}</div>
                        <div class="place-regdate text-muted small">{{date_format(date_create($host->created_at),'d M y')}}</div>
                        <div class="place-price small"><span class="fw-bold">$ {{$host->price}}</span> night</div>
                    </a>
                            <form action="{{url('/add-wish-place/' . $host->wish)}}" method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-sm btn-danger my-2 small rounded-pill">
                                <i class="fa fa-heart mx-1 "></i>
                                <span class="pe-1">Remove</span>
                            </button>
					        </form>
                </div>
        @if($loop->iteration % 4 == 0)
    </div>
    <div class="row p-2">
        @endif
        @endforeach
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

</body>
</html>
