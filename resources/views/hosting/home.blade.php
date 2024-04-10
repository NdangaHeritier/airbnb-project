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
	<title>Become Host</title>
	<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<style type="text/css">
		.bton{
			border-radius: 0.6rem;
		}
	</style>

</head>
<body>
	<header class="row p-2 pb-5">
		<div class="col-sm-8 p-2 ps-5">
			<a href="{{url('/')}}"><img src="/images/airbnb1.png"></a>
		</div>
		<div class="col-sm-4 p-2 px-3">
			<span class="p-3 h5">Ready to Airbnb it?</span>
			<a href="{{route('setup')}}" class="bton btn btn-danger  fs-5">
				<i class="fa fa-house-medical p-2"></i>
			Airbnb setup
			</a>
		</div>
	</header>
	<div class="body row p-2 mt-5">
		<div class="nights col text-center pt-5 mt-3">
			<h2 class="text-danger" style="font-size: 50px;">Airbnb it.</h2>
			<h2 class="text-body" style="font-size: 50px;">You could earn</h2>
			<h2 class="text-body fw-bold" style="font-size: 60px;">$ 399</h2>
			<div class="p-2">
				<u class="h6">7 nights</u> at an estimated <b>$ 59</b> a night.
			</div>
			<img class="my-3" src="/images/range.png">
		</div>
		<div class="col">
			<img src="/images/explore.png">
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
</body>
</html>