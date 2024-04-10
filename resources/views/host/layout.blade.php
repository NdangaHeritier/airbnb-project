<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host</title>
    <link rel="shortcut icon" href="/images/top-logo.png">
	<link rel="stylesheet" type="text/css" href="/css/index.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/css/css/fontawesome.min.css">
    <script src="/js/index.js" type="text/javascript"></script>
	<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>
<body>
<header class="p-3 border-bottom m-1 sticky-top bg-white">
		<div class="row">
			<div class="img col-sm-4 px-5">
				<a href="/"><img src="/images/airbnb1.png"></a>
			</div>
			<div class="col-sm-5">
				<a href="{{url('/host')}}" class="btn text-dark fw-bold">Listings</a>
				<a href="{{url('/host')}}" class="btn text-muted hover rounded-pill">Reservations</a>
				<a href="{{url('/account')}}" class="btn text-muted hover rounded-pill">Account</a>
			</div>
			<div class="col-sm-3 d-sm-flex">
				<a href="{{url('/become-a-host')}}" class="btn text-dark hover rounded-pill">Airbnb Your Home</a>
				<a href="#" class="btn text-dark hover rounded-pill" onclick="show_div('language')"><img src="/images/language.png"></a>
				<div class="btn rounded-pill border" onclick="document.getElementById('menu-loggedin').style.display='block'">
					<img src="/images/menu.png">
					<img src="/profiles/{{Session::get('LoginId')->profile_pic}}" alt="" class="rounded-circle p-1 border" height="30" width="30">
				</div>
				<div id="menu-loggedin" class="pb-4 border bg-white p-2 shadow position-absolute ms-5" style="width: 270px;border-radius: 1rem;margin-top: 4rem;display:none; z-index: 9999">
					<div class="title row ms-2 me-1">
						<button class="text-end border-0 col bg-white w-100">
							<i class="fa fa-close py-1 mb-1 btn btn-sm btn-light rounded-circle" onclick="document.getElementById('menu-loggedin').style.display='none'"></i>
						</button>
					</div>
					<div class="menu w-100  text-muted">
						<div class="sub-menu pb-2 mt-2 w-100 border-bottom">
							<a href="{{url('/wishlists')}}" class="px-2 text-decoration-none p-2 text-dark w-100">WishLists</a>
						</div>
						<div class="sub-menu mt-2 w-100">
							<a href="{{url('/host')}}" class="px-2 text-decoration-none p-2 text-dark w-100">Manage Listings</a>
						</div>
						<div class="sub-menu mt-2 w-10 pb-2 border-bottom">
							<a href="{{url('/account')}}" class="px-2 text-decoration-none p-2 text-dark w-100">Account</a>
						</div>
						<div class="sub-menu mt-2 w-100">
							<a href="{{url('/logout')}}" class="px-2 text-decoration-none p-2 text-dark w-100">Logout</a>
						</div>
						
					</div>
				</div>
</header>
    <div class="admin p-3">
        @yield('body')
    </div>
</body>
</html>