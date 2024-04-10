@extends('host.layout')

@section('body')

<div class="row ">
    @if(Session::has('message'))
        <div class="alert alert-success"><i class="fa fa-exclamation-circle me-3"></i>{{Session::get('message')}}</div>
    @endif
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><i class="fa fa-list-squares me-2"></i> Listings <span class="badge text-white float-end bg-dark rounded-pill">{{count(Session::get('places'))}}</span></a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fa fa-circle-check fa-sm me-2"></i> Reservations <span class="badge text-white float-end bg-dark rounded-pill py-1">{{Session::get('reservations')}}</span></a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i class="fa fa-user-edit fa-sm me-2"></i> Account</a>
                <a class="list-group-item list-group-item-action" href="{{url('/become-a-host/setup')}}"  role="tab"><i class="fa fa-pen-to-square fa-sm me-2"></i> New listing</a>
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                @if(count(Session::get('places'))==0)
                <div class="fs-1 p-2 ps-5 w-25"><i class="fa fa-triangle-exclamation py-2 text-muted"></i></div>
                <div class="alert alert-light w-50 text-cener fs-2">No Listings found!</div>
                @endif
                @if(Session::has('places'))
                    <div class="row px-3">
                        @foreach(Session::get('places') as $host)
                        <div class="card w-25 m-2">
                        <img src="/place-cover/{{$host->cover_photo}}" height="200" class="card-img-bottom w-100" alt="...">

                        <div class="card-body small">
                            <h5 class="card-title">{{$host->place_name}}</h5>
                            <div class="card-text text-muted">
                                <i class="fa fa-map-location me-2"></i>
                                {{$host->city}}, {{$host->province}}, {{$host->place_region}}
                            </div>
                            <p class="card-text">
                                <i class="fa fa-list fa-sm text-muted small me-2"></i>
                                {{$host->number_of_guests}} guests . {{$host->number_of_bedrooms}} bedrooms . {{$host->number_of_beds}} beds
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="row border rounded-3 p-3">
                    @if(count(Session::get('places'))==0)
                        <div class="fs-1 p-2 ps-5 w-25"><i class="fa fa-triangle-exclamation py-2 text-muted"></i></div>
                        <div class="alert alert-light w-50 text-cener fs-2">No reservations found!</div>
                    @endif
                        @foreach(Session::get('places') as $place)
                            <a href="{{url('host/reservations/'.$place->id)}}" class="btn col-sm-4 d-sm-flex text-decoration-none m-2 w-25 bg-light border rounded" target="_blank" rel="noopener noreferrer">
                                <div class="p-2">
                                    <img src="/place-cover/{{$place->cover_photo}}" alt="{{$place->cover_photo}}" class="rounded-circle border" width="30" height="30">
                                </div>
                                <div class="p-2 text-dark">
                                    <div class="small text-start">
                                        {{$place->place_name}}
                                    </div>
                                    <div class="text-muted small text-start">$ {{$place->price}} per 1 night</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class=" border rounded d-sm-flex">
                        <div class="profile p-3 border-end">
                            <img src="/profiles/{{Session::get('LoginId')->profile_pic}}" alt="" class="ms-2 rounded-circle border" height="80" width="80">
                            <div class="p-3 h6 border-bottom">
                                {{ucwords(Session('LoginId')->fullname)}}
                            </div>
                            <div class="small text-muted text-center">
                                <span class="small">With {{count(Session::get('places'))}} listings.</span>
                            </div>
                        </div>
                        <form action="{{url('/login/' . Session::get('LoginId')->id)}}" enctype="multipart/form-data" method="post" class="p-3 d-sm-flex">
                            {!! csrf_field() !!}
                            @method('PATCH')
                            <div>
                                <input type="text" class="form-control border rounded mx-2" name="fullname" value="{{Session('LoginId')->fullname}}">
                                <span class="text-danger p-2">@error('fullname') {{$message}} @enderror</span>
                                <div class="input-group py-2 px-2">
                                    <label for="pic" class="input-group-text" role="button">
        
                                        <div id="filename" class="p-2 text-center text-muted"><i class="fa fa-cloud-upload fs-1"></i><br>change photo.</div>
                                    </label>
                                    <input type="file" id="pic" class="form-control border rounded d-none" name="profile_pic" value="{{Session('LoginId')->profile_pic}}" oninput="document.getElementById('filename').innerHTML=`<i class='fa fa-check text-success me-2'></i>`+this.value.substr(12)">
                                </div>
                            </div>
                            <div class="px-4 pt-5">
                                <button type="submit" class="btn btn-danger rounded-pill mt-5">
                                    <i class="fa fa-save px-3"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                </div>
            </div>
        </div>

@endsection