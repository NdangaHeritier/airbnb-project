@extends('host.layout')

@section('body')

<div class="row ">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><i class="fa fa-list-squares me-2"></i> Listings</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fa fa-circle-check fa-sm me-2"></i> Reservations <span class="badge text-white float-end bg-dark rounded-pill">14</span></a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i class="fa fa-user-edit fa-sm me-2"></i> Account</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><i class="fa fa-tools fa-sm me-2"></i> Settings</a>
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
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
                        @foreach(Session::get('places') as $place)
                            <a href="{{url('host/reservations/'.$place->id)}}" class="btn col-sm-4 d-sm-flex text-decoration-none m-2 w-25 bg-light border rounded" target="_blank" rel="noopener noreferrer">
                                <div class="p-2">
                                    <img src="/place-cover/{{$place->cover_photo}}" alt="{{$place->cover_photo}}" class="rounded-circle border" width="30" height="30">
                                </div>
                                <div class="p-2 text-dark">
                                    <div class="small">
                                        {{$place->place_name}}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                </div>
            </div>
        </div>

@endsection