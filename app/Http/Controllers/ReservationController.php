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
            $ress=Reservation::where('host','=',$host)->count();
            session()->put('reservations',$ress);
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
        $request->validate([
            'checkin_date'=>'required',
            'checkout_date'=>'required'
        ]);
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
            $lastday=Reservation::where('place','=',$place)->max('checkout_date');
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
            if($request->checkin_date>date('Y-m-d') ){
                if($lastday<=$request->checkin_date){
                    $reservation->save();
                    $hostd=User::find($host);
                    $reservation['nights']=$days->days;
                    $reservation['email']=$hostd->email;
                    $reservation['phone']=$hostd->phone_number;
                    return back()->with('reservation',$reservation);
                }else{
                    $till=date_create($lastday);
                    return back()->with('message','The place is booked till '. date_format($till,'d M Y').'. Please try picking another arrival date that is free to book place in time.');
                }
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
        $place=Place::find($id);
        $users=array();
        foreach($reservations as $reserve){
            $users[]=User::find($reserve->user);
        }
        session()->put('reservations',$reservations);
        session()->put('users',$users);
        session()->put('place',$place);
        return view('host.reservations');
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reservation=Reservation::find($id);
        $reservation->update($request->all());
        return back()->with('message','Reservation status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reservation::destroy($id);
        return back()->with('message', 'Reservation deleted successfully');
    }
   
}
