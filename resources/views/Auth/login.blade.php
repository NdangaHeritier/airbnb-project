@extends('layout')

@section('title','Login')

@section('content')

@if(Session::has('message'))
         <div class="alert alert-success m-3">{{Session::get('message')}}</div>
@endif
@if(Session::has('fail message'))
         <div class="alert alert-danger m-3">{{Session::get('fail message')}}</div>
@endif
<div class="container d-sm-flex mt-3">
    <form action="{{route('UserLogin')}}" method="POST" class="p-5 border rounded-3 shadow bg-light w-50">
    {!! csrf_field() !!}
        <div class="b-4 text-muted fw-bold h4 text-center border-bottom pb-3 mb-2">
            Login to Airbnb
        </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-dark">Email address</label>
        <input type="email" class="form-control p-3" name="email" aria-describedby="emailHelp" placeholder="example@company.com">
        <span class="text-danger">@error('email')<i class="fa fa-warning text-danger me-2"></i> {{$message}} @enderror</span>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-dark">Password</label>
        <input type="password" class="form-control p-3" name="password" placeholder=" * * * * * *">
        <span class="text-danger">@error('password')<i class="fa fa-warning text-danger me-2"></i>  {{$message}} @enderror</span>
    </div>
    <button type="submit" class="btn btn-danger w-100 p-3 rounded-pill">Submit</button>
    <div class="p-3 border-top mt-3">
        <i class="fa fa-circle-question px-2"></i>new? <a href="{{url('/login/create')}}" class="text-dark">register your account.</a>
    </div>
    </form>
    <div class="p-4 w-50 border ms-3 rounded">
        <div class="px-2 pb-3 pt-3 h5 text-dark fw-bold border-bottom">
        <i class="fa fa-list-check px-2"></i>unlocked features after Login
        </div>
        <div>
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    book any place of your Wishes
                </div>
            </div>
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    Become a host
                </div>
            </div>
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    Create your wishlist
                </div>
            </div>
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    Manage your listings
                </div>
            </div>
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    Host contacts information
                </div>
            </div>
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    Track your listing reservations
                </div>
            </div>
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    Manage your clients reservations
                </div>
            </div>
        </div>
    </div>
</div>
@endsection