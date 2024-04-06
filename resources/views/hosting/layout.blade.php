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
		.bton-div{
			border-radius: 0.6rem;
			border: 1px solid rgb(190, 190, 190);
		}
		.bton{
			border: 1px solid rgb(190, 190, 190);
		}
		.bton:hover, .bton-div:hover{
			border: 1px solid rgb(50, 50, 50);
		}
		.check1 .label{
			background-color: white;
			border-radius: 0.6rem;
			border: 2px solid rgb(190, 190, 190);
			height: 100px;
			display: inline-block;
            cursor: pointer;
		}
		.check1 .upload{
			height: 149px;
		}
		.check1 .label:hover, .check1 .label:focus{
			border: 2px solid rgb(50, 50, 50);
		}
		.check1 input[type=radio]{
			display: block;
		}
		.check1 input[type=radio]:check+.check1 .label{
			background-color: green;
		}
		input[type=number]{
			outline-width: 0;
			border: none;
		}

	</style>
	<title>Become Host</title>
</head>
<body>
	<header class="row p-3 border-bottom sticky-top bg-white">
		<div class="col-sm-10 p-2 ps-5">
			<img src="../images/airbnb-black.png">
		</div>
		<div class="col-sm-2 pt-4 p-3">
			<a href="#" class="bton p-2 px-4 text-dark text-decoration-none">
			Save & Exit
			</a>
		</div>
	</header>
    @yield('contents')
<body>
</html>