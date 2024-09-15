	@extends('layout')
	@section('content')
	<div class="px-3 text fs-5 mb-3 small">
		<div class="navbar navbar-expand-sm navbar-dark bg-white overflow-auto small">
			
		<a href="{{url('/')}}" class=" text-muted text-center small text-decoration-none py-2 mx-3 me-5">
				<i class="fa fa-shuffle fs-5 py-2 text-danger"></i>
				<div class="text-dark small">All</div>
			@if(Session::has('category'))
			 <div class="w-100 pt-1 bg-muted mt-1"></div>
			 @else 
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif
			</a>
		<a href="{{url('/category/'.'earth homes')}}" class=" text-muted text-center small text-decoration-none py-2 mx-1">
				<img src="/images/earth homes.png">
				<div class="text-dark small">Earth homes</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='earth homes')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'national parks')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/national-park.png">
				<div class="small px-2">National parks</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='national parks')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'cabin')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/cabin.png" style="opacity: 0.5" width="25">
				<div class="small px-2">Cabin</div>
				@if(Session::has('category'))
				@if(Session::get('category')=='cabin')
					<div class="w-100 pt-1 bg-danger mt-1"></div>
				@endif 
				@endif
			 
			</a>
			<a href="{{url('/category/'.'boat')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/boat.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Boat</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='boat')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'house')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/house.png" style="opacity: 0.5" width="30">
				<div class="small px-2">House</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='house')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'apartment')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/apartment.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Apartment</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='apartment')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'dome')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/dome.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Dome</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='dome')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'farm')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/farm.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Farm</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='farm')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'hotel')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/hotel.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Hotel</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='hotel')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'bed and breakfast')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/bed.png" style="opacity: 0.5" width="25">
				<div class="small px-2">Bed & Breakfast</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='bed and breakfast')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'barn')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/barn.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Barn</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='barn')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'cave')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/cave.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Cave</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='cave')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'castle')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/castle.png" style="opacity: 0.5" width="25">
				<div class="small px-2">Castle</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='castle')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'guesthouse')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/guesthouse.png" style="opacity: 0.5" width="30">
				<div class="small px-2">GuestHouse</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='guesthouse')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'camper')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/camper.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Camper</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='camper')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'container')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/container.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Container</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='container')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
			<a href="{{url('/category/'.'casa particular')}}" class=" text-muted text-center small text-decoration-none py-1 mx-1">
				<img src="/images/casa.png" style="opacity: 0.5" width="30">
				<div class="small px-2">Casa Particular</div>
			@if(Session::has('category'))
			 @if(Session::get('category')=='casa particular')
			 <div class="w-100 pt-1 bg-danger mt-1"></div>
			 @endif 
			 @endif
			</a>
		</div>
		
		<div class="body p-2">
			@if(count($hosts)==0)
				<div class="fs-1 p-2 ps-5 w-100 text-center"><i class="fa fa-triangle-exclamation py-5 fa-xl text-muted"></i></div>
				<div class="alert alert-light w-100 text-cener fs-2 text-center">No Place found!</div>
			@endif
			<div class="row p-2">
				
				<!-- slide 1 -->
				@foreach($hosts as $host)
				<div class="col-sm-3">
					<div id="slide{{$loop->iteration}}" class="carousel slide">
					<div class="carousel-inner overflow-hidden" style="border-radius: 1rem;">
					 
							<div class="d-none d-md-block float-end position-absolute w-100 p-3" style="z-index: 999;">
							@if($host->price>=100)
							<div class="btn rounded-pill btn-light h6">
								<i class="fa fa-star px-2"></i>Guests favorite
							</div>
							@endif
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
					    
						<div class="w-100 pt-1 bg-danger mt-1"></div>
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
						<div class="place-regdate text-muted small">{{date_format(date_create($host->created_at),'d M y')}}</div>
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
