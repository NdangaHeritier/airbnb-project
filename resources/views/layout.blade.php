<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>@yield('title','AirBnB')</title>
	<link rel="shortcut icon" href="/images/top-logo.png">
	<link rel="stylesheet" type="text/css" href="/css/index.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/css/css/fontawesome.min.css">
    <script src="/js/index.js" type="text/javascript"></script>
	<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>
<body>
	<header class="p-3 border-bottom m-1">
		<div class="row">
			<div class="img col-sm-4 px-5">
				<a href="/"><img src="/images/airbnb-logo.png"></a>
			</div>
			<div class="col-sm-5">
				<a href="{{url('/')}}" class="btn text-dark fw-bold">Stays</a>
				<a href="{{url('/')}}" class="btn text-muted hover rounded-pill">Experiences</a>
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
							<a href="wishlists" class="px-2 text-decoration-none p-2 text-dark w-100">WishLists</a>
						</div>
						<div class="sub-menu mt-2 w-100">
							<a href="host" class="px-2 text-decoration-none p-2 text-dark w-100">Manage Listings</a>
						</div>
						<div class="sub-menu mt-2 w-10 pb-2 border-bottom">
							<a href="account" class="px-2 text-decoration-none p-2 text-dark w-100">Account</a>
						</div>
						<div class="sub-menu mt-2 w-100">
							<a href="logout" class="px-2 text-decoration-none p-2 text-dark w-100">Logout</a>
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
		<div class="p-2 offset-2">
			<form method="POST" class="border border-1 rounded-pill w-75 d-sm-flex small hover">
				<div class="form-floating hover rounded-pill" onclick="document.getElementById('regions').style.display='block'">
					<!-- <i class="fa fa-search"></i> -->
					<input type="search" name="search-place" class="form-control border-0 rounded-pill px-4" placeholder="search destination">
					<label class="form-check-label text-body px-4">where</label>
				</div>
				<div class="btn d-sm-flex p-2 hover rounded-pill" onmousedown="document.getElementById('checkin').style.display='block'">
					<div class="mx-4 py-2 border-start"></div>
					<div class="font text small text-start">
					<div class="text-body">check in</div>
					<div class="text-muted" id="checkin-date">Add dates</div>
					</div>
				</div>
				<div class="btn d-sm-flex p-2 hover rounded-pill" onmousedown="document.getElementById('checkout').style.display='block'">
					<div class="mx-4 py-2 border-start"></div>
					<div class="font text small text-start">
					<div class="text-body">check out</div>
					<div class="text-muted" id="checkout-date">Add dates</div>
					</div>
				</div>
				<div class="btn d-sm-flex p-2 hover rounded-pill" onclick="show_div('guests')">
					<div class="mx-4 py-2 border-start"></div>
					<div class="font text small me-4" onclick="show_div('guests')">
					<div class="text-body text-start" onclick="show_div('guests')">Who</div>
					<div class="text-muted text-start" onclick="show_div('guests')">Add guests</div>
					</div>
					<button class="btn btn-danger rounded-pill ms-4 px-3" name="search">
						<i class="fa fa-search"></i>
						<span class="fw-bold text px-2" style="font-size: 16px">search</span>
					</button>
				</div>
			</form>
			<div class="hiddens">
				<div id="regions" style="border-radius: 2rem; width: 450px; position: absolute;display: none; z-index: 9999" class="border shadow shadow-md p-4 mt-3 bg-white">
					<div class="title row p-2 fw-bold mt-1rem">
						<span class="col">search by region</span>
						<button class="text-end border-0 bg-white col">
							<i class="fa fa-close py-2 mb-2 btn btn-outline-dark rounded-circle" onclick="document.getElementById('regions').style.display='none'"></i>
						</button>
					</div>
					<div class="p-2">
						<div class="regs-1 row">
							<a class="col-sm-4 text-decoration-none text-muted" href="#">
								<img src="/images/region-all.png">
								<div>
									A'm flexible
								</div>
							</a>
							<a class="col-sm-4 text-decoration-none text-muted" href="#">
								<img src="/images/region-europe.png">
								<div>
									Europe
								</div>
							</a>
							<a class="col-sm-4 text-decoration-none text-muted" href="#">
								<img src="/images/region-south-africa.png">
								<div>
									South Africa
								</div>
							</a>
						</div>
						<div class="regs-1 row">
							<a class="col-sm-4 text-decoration-none text-muted" href="#">
								<img src="/images/region-middle-east.png">
								<div>
									Middle East
								</div>
							</a>
							<a class="col-sm-4 text-decoration-none text-muted" href="#">
								<img src="/images/region-arab-emirates.png">
								<div>
									United Arab Emirates
								</div>
							</a>
							<a class="col-sm-4 text-decoration-none text-muted" href="#">
								<img src="/images/region-united-states.png">
								<div>
									United States
								</div>
							</a>
						</div>
				</div>
				</div>


				<!-- second hidden header division of dates pickup -->

				<div style="border-radius: 2rem; position: absolute;display: none; z-index: 9999" class="shadow shadow-md p-4 mt-3 bg-white w-50" id="checkin">
				<div class="title row p-2 fw-bold mt-1rem">
						<span class="col">Add your trip date:</span>
						<button class="text-end border-0 bg-white col">
							<i class="fa fa-close py-2 mb-2 btn btn-outline-dark rounded-circle" onclick="document.getElementById('checkin').style.display='none'"></i>
						</button>
					<form method="POST" class="p-3 d-sm-flex">
						<div class="form-floating m-2">
							<select name="month" class="form-select rounded-pill px-5">
								<?php 
								$cyear=date('Y');
								$cmonth=date('m');
								$cday=date('d');
								$year=intval(date('Y'));
								while($year<=intval($cyear)+10){
									?>
									<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
								<?php	
								$year++;
								}
								?>
							</select>
							<label class="ps-5 text-muted">Year</label>
						</div>
						<div class="form-floating m-2">
							<select name="month" class="form-select rounded-pill px-5">
								<?php 
								$month=1;
								while($month<=12){
									if ($month<10) {
										$month="0$month";
									}
									?>
									<option value="<?php echo $month; ?>"><?php echo $month; ?></option>
								<?php	
								$month++;
								}
								?>
							</select>
							<label class="ps-5 text-muted">Month</label>
						</div>
						<div class="form-floating m-2">
							<select name="day" class="form-select rounded-pill px-5">
								<?php 
								$day=1;
								while($day<=31){
									if ($day<10) {
										$day="0$day";
									}
									?>
									<option value="<?php echo $day; ?>"><?php echo $day; ?></option>
								<?php	
								$day++;
								}
								?>
							</select>
							<label class="ps-5 text-muted">Day</label>
						</div>
						<button type="submit" name="save" class="btn btn-danger w-25 fw-bold rounded-pill">
							<i class="fa fa-calendar pe-2"></i>
							pick date
						</button>
					</form>
				</div>
							</div>
                <!-- third hidden header division of dates pickup -->

				<div  style="border-radius: 2rem; position: absolute;display: none; z-index: 9999" class="shadow shadow-md p-4 mt-3 bg-white w-50" id="checkout">
					<div class="title p-2 text-muted fw-bold row">
					<span class="col">Add your trip date:</span>
						<button class="text-end border-0 bg-white col">
							<i class="fa fa-close py-2 mb-2 btn btn-outline-dark rounded-circle" onclick="document.getElementById('checkout').style.display='none'"></i>
						</button>
					</div>
					<form method="POST" class="p-3 d-sm-flex">
						<div class="form-floating m-2">
							<select name="month" class="form-select rounded-pill px-5">
								<?php 
								$cyear=date('Y');
								$cmonth=date('m');
								$cday=date('d');
								$year=intval(date('Y'));
								while($year<=intval($cyear)+10){
									?>
									<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
								<?php	
								$year++;
								}
								?>
							</select>
							<label class="ps-5 text-muted">Year</label>
						</div>
						<div class="form-floating m-2">
							<select name="month" class="form-select rounded-pill px-5">
								<?php 
								$month=1;
								while($month<=12){
									if ($month<10) {
										$month="0$month";
									}
									?>
									<option value="<?php echo $month; ?>"><?php echo $month; ?></option>
								<?php	
								$month++;
								}
								?>
							</select>
							<label class="ps-5 text-muted">Month</label>
						</div>
						<div class="form-floating m-2">
							<select name="day" class="form-select rounded-pill px-5">
								<?php 
								$day=1;
								while($day<=31){
									if ($day<10) {
										$day="0$day";
									}
									?>
									<option value="<?php echo $day; ?>"><?php echo $day; ?></option>
								<?php	
								$day++;
								}
								?>
							</select>
							<label class="ps-5 text-muted">Day</label>
						</div>
						<button type="submit" name="save" class="btn btn-danger w-25 fw-bold rounded-pill">
							<i class="fa fa-calendar pe-2"></i>
							pick date
						</button>
					</form>
				</div>
			</div>
		</div>
	</header>
    <div class="body">
    @yield('content')
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