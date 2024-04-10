@extends('host.layout')

@section('body')
    <div class="container">
        @if(Session::has('message'))
        <div class="alert alert-success"><i class="fa fa-check me-3"></i>{{Session::get('message')}}</div>
        @endif
        <div class="h3 p-2">
            Welcome, {{Session::get('LoginId')->fullname}}.
        </div>
        <div class="position-absolute d-sm-flex w-100">
            <div class="rounded-top border border-bottom-0 w-25 d-sm-flex bg-light mb-1">
            <img src="/place-cover/{{Session::get('place')->cover_photo}}" height="30" width="30" class="ms-3 mt-3 rounded-circle" alt="...">
            <div class="h5 text-muted p-3 sl text-center">{{Session::get('place')->place_name}}</div>
            </div>
            <div class="text-muted small pt-5 bg-white px-2"><i class="fa small fa-warning me-2"></i>please make sure the client has payed you for trip before rejection or acception.</div>
        </div>
        
        <div class="" style="padding-top: 0.9rem">
            <div class="row border rounded p-2 mt-5">
            @if(count(Session::get('reservations'))==0)
                <div class="fs-1 p-2 ps-5 w-25"><i class="fa fa-triangle-exclamation py-2 text-muted"></i></div>
                <div class="alert alert-light w-50 text-cener fs-2">No reservations found!</div>
            @endif
                @foreach(Session::get('reservations') as $reservation)
                <div class="card m-4 ms-5 p-3 shadow" style="width: 18rem;border-radius: 1rem">
               @foreach(Session::get('users') as $user)
                    @if($user->id == $reservation->user)
                    <img src="/profiles/{{$user->profile_pic}}" height="100" width="100" class="offset-4 mt-4 rounded-circle" alt=".hey.">
                    <div class="text-muted fw-bold fs-5 pt-2 text-center">{{$user->fullname}}</div>
                    @endif
                @endforeach
                    <div class="card-body">
                        <div class="card-text pt-2 small">
                            <i class="fa fa-plane-arrival me-2 small text-muted"></i>
                            checkin date is {{date_format(date_create($reservation->checkin_date), 'd M Y')}}.
                        </div>
                        <div class="card-text small">
                            <i class="fa fa-plane-departure me-2 small text-muted"></i>
                            checkout date is {{date_format(date_create($reservation->checkout_date), 'd M Y')}}.
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-coins me-2 small text-danger"></i>${{Session::get('place')->price}} x {{date_diff(date_create($reservation->checkout_date), date_create($reservation->checkin_date))->days}} nights</li>
                        <li class="list-group-item"><i class="fa fa-coins me-2 small text-danger"></i>Total price: ${{$reservation->amount}}</li>
                        <li class="list-group-item"><i class="fa fa-clock me-2 small text-muted"></i>Provided {{date_format(date_create($reservation->created_at), 'M d Y')}}</li>
                    </ul>
                        @if($reservation->status=='pending')
                        <div class="card-body d-sm-flex">
                        <form action="{{url('/host/reservations/' . $reservation->id)}}" method="post">
                        {!! csrf_field() !!}
                        @method("PATCH")
                            <input type="hidden" name="status" value="rejected">
                            <button name="reject" type="submit" class="card-link btn rounded-pill btn-sm btn-dark px-4 shadow">reject</button>
                        </form>
                       
                        <form action="{{url('/host/reservations/' . $reservation->id)}}" method="post">
                        {!! csrf_field() !!}
                        @method("PATCH")
                            <input type="hidden" name="status" value="accepted">
                            <button name="accept" type="submit" class="card-link btn rounded-pill btn-sm btn-danger ms-4 px-4 shadow">accept</button>
                        </form> 
                        </div>                       
                        @else
                        <div class="card-body d-sm-flex small">
                        This reservation has <b class="ms-1">{{$reservation->status}}</b>.
                        <form action="{{url('/host/reservations/' . $reservation->id)}}" method="post" accept-charset="UTF-8" style="display:inline">
                        
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn p-0 ps-3 text-danger float-end btn-sm" title="Delete Reservation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-can" aria-hidden="true"></i></button>
                                
                        </form>
                        </div>
                        @endif
                </div>
            @endforeach
        </div>
        <div>
    </div>
@endsection