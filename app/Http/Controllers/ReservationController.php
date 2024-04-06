<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Place;
use Illuminate\Http\Request;
use Session;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Session::has('LoginId')){
            $host=Session::get('LoginId')->id;
            $places=Place::where('hosted_by','=',$host)->get();
            session()->put('places',$places);
            return view('host.home')->with('places',$places);
        }else{
            return redirect('/login')->with('fail message','Login first, to manage your Listings');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $placeInfo=Session::get('place');
        if(Session::has('LoginId')){
            $user=Session::get('LoginId')->id;
            $host=$placeInfo->hosted_by;
            $place=$placeInfo->id;
            $amount=0;
            $checkin=date_create($request->checkin_date);
            $checkout=date_create($request->checkout_date);
            $days=date_diff($checkin, $checkout);
            $amount=$placeInfo->price * $days->days;
            $today=date('Y-m-d');
            $reservation=new Reservation([
                'user'=>$user,
                'host'=>$host,
                'place'=>$place,
                'guests'=>$request->guests,
                'infants'=>$request->infants,
                'amount'=>$amount,
                'checkin_date'=>$checkin,
                'checkout_date'=>$checkout,
                'status'=>'pending'
            ]);
            if($checkin>$today && $checkin<$checkout){
                $reservation->save();
                $hostd=User::find($host);
                $reservation['nights']=$days->days;
                $reservation['email']=$hostd->email;
                $reservation['phone']=$hostd->phone_number;
                return back()->with('reservation',$reservation);
            }else{
                return back()->with('message','Please choose a valid checkin date or book atleast one night!');
            }

        }else{
            return redirect('/login')->with('fail message', 'Login first to make your first reservation at Airbnb.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservations=Reservation::where('place','=',$id)->get();
        $users=array();
        foreach($reservations as $reserve){
            $users[$reserve->host]=User::find($reserve->host)->fullname;
        }
        session()->put('reservations',$reservations);
        session()->put('users',$users);
        session()->put('place',$place);
        return view('host.reservations');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
    public function reserve(string $id)
    {
        
    }
}
