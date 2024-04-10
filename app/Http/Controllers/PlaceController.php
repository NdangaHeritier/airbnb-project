<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Place;
use App\Models\Wishlist;
use App\Models\User;
use Hash;
use Session;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hosts=Place::all();
        return view('index')-> with('hosts',$hosts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hosting.home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts=Place::find($id);
        $userid=$posts->hosted_by;
        $user=User::find($userid);
        $posts['profile_pic']=$user->profile_pic;
        $posts['fullname']=ucwords($user->fullname);
        if(Session::has('LoginId')){
            $wishlist=Wishlist::where('user','=',Session::get('LoginId')->id)->where('place',$id)->first();
            session()->put('wishlist',$wishlist);
        }
        session()->put('place', $posts);
        return view('show')->with('posts',$posts);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
