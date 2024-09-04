<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Place;
use Illuminate\Http\Request;
use Session;
class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Session::has('LoginId')){
            $user=Session::get('LoginId')->id;
            $wishes=Wishlist::where('user','=',$user)->get();
            $places=array();
            foreach($wishes as $wish){
                $place=Place::find($wish->place);
                $place['wish']=$wish->id;
                $places[]=$place;
            }
            session()->put('wishlist',$wishes);
            return view('wishlists')->with('places',$places);
        }else{
            return redirect('/login')->with('fail message','Please login to check your wishlist.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       if(Session::has('LoginId'))
       {
            $request['user']=Session::get('LoginId')->id;
            $request['place']=$id;
            Wishlist::create($request->all());
            return back()->with('success','This place is added to your wishlist.');
       }
       else{
        return redirect('/login')->with('fail message','Login first to add this place to your wishlist.');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Wishlist::destroy($id);
        return back()->with('success','The place is removed from your wishlist.');
    }
}
