	@extends('layout')
	@section('content')
	<div class="px-3 text fs-5 pb-5 mb-3">
		<div class="navbar navbar-expand-sm navbar-dark bg-white">
			<a href="#" class="nav-item link-dark text-center small text-decoration-none border-bottom border-3 border-dark pt-2 mx-2">
				<img src="/images/earth-homes.png">
				<div class="text-dark small">Earth homes</div>
			</a>
			<a href="#" class="nav-item text-muted text-center small text-decoration-none py-2 mx-2">
				<img src="/images/national-park.png">
				<div class="small">National parks</div>
			</a>
		</div>
		
		<div class="body p-2">
			<div class="row p-2">
				
				<!-- slide 1 -->
				@foreach($hosts as $host)
				<div class="col-sm-3">
					<div id="slide{{$loop->iteration}}" class="carousel slide">
					<div class="carousel-inner overflow-hidden" style="border-radius: 1rem;">
					 
							<div class="d-none d-md-block float-end position-absolute w-100 p-3" style="z-index: 999;">
								<i class="fa fa-heart text-dark shadow-lg float-end" style="text-shadow: 0px 0px 2px white;"></i>
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
					    <span class="carousel-control-prev-icon rounded-circle shadow bg-white text-dark" aria-hidden="true"><i class="fa fa-chevron-left fa-sm"></i></span>
					    <span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#slide{{$loop->iteration}}" data-bs-slide="next">
					    <span class="carousel-control-next-icon rounded-circle shadow bg-white text-dark" aria-hidden="true">
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
						<div class="place-regdate text-muted small">apr -04</div>
						<div class="place-price small"><span class="fw-bold">$ {{$host->price}}</span> night</div>
					</a>
				</div>
				@if($loop->iteration % 4 == 0)
			</div>
			<div class="row p-2">
				@endif
				@endforeach
				<!-- slide 2 -->
				
			</div>
		</div>
		</div>
	@endsection
