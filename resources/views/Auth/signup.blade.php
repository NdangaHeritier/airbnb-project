@extends('layout')
@section('content')
<div class="container d-sm-flex mt-3">
    <form action="{{route('signup')}}" method='post' class="p-5 border rounded-3 shadow bg-light w-50">
    {!! csrf_field() !!}
        <div class="b-4 text-muted fw-bold h4 text-center border-bottom pb-3 mb-2">
            Signup to Airbnb for free
        </div>
        <div class="mb-3">
        <label for="fullname" class="form-label text-dark">First Name</label>
        <input type="text" class="form-control p-2" name="fullname" id="fullname" placeholder="John Doe">
        </div>
        <div class="mb-3">
        <label for="identity_card_number" class="form-label text-dark">Identity card Number</label>
        <input type="text" class="form-control p-2" name="identity_card_number" id="identity_card_number" placeholder="0000000000000000" minlength="16" maxlength="16">
        </div>
        <div class="mb-3">
        <label for="phone_number" class="form-label text-dark">Phone Number</label>
        <div class="input-group">
        <span class="input-group-text">RW +250</span>
        <input type="tel" class="form-control p-2" name="phone_number" id="phone_number">
        </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">Email address</label>
            <input type="email" class="form-control p-2" name="email" placeholder="example@company.com">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-dark">Password</label>
            <input type="password" class="form-control p-2" name="password" placeholder="* * * * * *">
        </div>
        <button type="submit" class="btn btn-danger w-100 p-2 rounded-pill">Signup</button>
        <div class="p-3 border-top mt-3">
            <i class="fa fa-circle-question px-2"></i>Have account? <a href="{{url('/login')}}" class="text-dark">Sign in.</a>
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
                    Host more than 100 places on Airbnb for free
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
                   Check Host contacts information for booking
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
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    Publish your contacts to help customers easirly reach you 
                </div>
            </div>
            <div class="p-2 d-sm-flex">
                <i class="fa fa-check text-success m-2"></i>
                <div class="p-1 ">
                    Manage your Airbnb profiles and account
                </div>
            </div>
        </div>
    </div>
</div>

@endsection