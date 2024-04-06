@if(Session::has('LoginId'))
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/top-logo.png">
	<link rel="stylesheet" type="text/css" href="/css/index-styles.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/css/css/fontawesome.min.css">
	<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<style type="text/css">
		.bton{
			border-radius: 1.6rem;
		}
		.bton{
			border: 1px solid rgb(190, 190, 190);
		}
		.bton:hover{
			border: 1px solid rgb(50, 50, 50);
		}
	</style>
	<title>Become host</title>
</head>
<body onload="document.getElementById('notloggedin').style.display='none'">
	<header class="row p-3 pb-5">
		<div class="col-sm-11 p-2 ps-5">
			<img src="../images/airbnb-black.png">
		</div>
		<div class="col-sm-1 pt-4 p-3">
			<a href="#" class="bton p-2 px-4 text-dark text-decoration-none">
			Exit
			</a>
		</div>
	</header>
	<div class="body mt-5 w-50 offset-4 pt-4">
		<h2>Welcome back, {{@session::get('LoginId')->fullname}}</h2>
		<div class="fs-4">Start a new listing</div>
		<div class="border-bottom border-3 py-3 mt-3">
			<a href="structure" class=" text-dark text-decoration-none text-muted">
				<i class="fa fa-house-medical fs-2 text-muted me-2"></i>
				<span class="h6">create a new listing</span>
				<i class="fa fa-chevron-right text-dark float-end"></i>
			</a>
		</div>
	</div>
</body>
</html>
@endif
<div id="notloggedin" style="padding-left: 40%; padding-top: 10rem">
	<img src="/images/airbnb-logo.png" alt="not found" style="margin: 3rem" ><br><br>
	<a href="../login" style="background-color: rgba(220, 20, 20, 0.8);color: white; padding: 1rem 6rem 1rem 6rem;text-decoration:none; font: 18px arial black,sans-serif;border-radius: 1rem">Login</a>
</div>
