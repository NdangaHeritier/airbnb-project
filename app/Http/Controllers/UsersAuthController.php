<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\User;
use Hash;
use Session;

class UsersAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('Auth.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $user=$request->all();
        User::create($user);
        return redirect('/login')->with('message',"Account created successfully, now you can login!");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
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
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'fullname'=>'required'
        ]);
        $inputs=$request->all();
        $user=User::find($id);
        if($request->profile_pic == null){
           $request['profile_pic']=Session::get('LoginId')->profile_pic;
        }else{
            $file=$request->file('profile_pic');
            $image=$file-> getClientOriginalName();
            $file->move(\public_path('profiles/'),$image);
            $user['profile_pic']=$image;
        }
        $user['fullname']=$request->fullname;
        $user->save();
        $request->session()->put('LoginId',$user);
        return back()->with('message','Account details edited successfully!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * login function for users
     */
    public function UserLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email'=> 'required',
            'password'=>'required'
        ]);
        $user= User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request -> password, $user -> password)){
                $request->session()->put('LoginId', $user);
                return redirect('/dashboard');
            }else{
                return back()-> with('fail message','Your password not match with email!');
            }
        }else{
            return back()-> with('fail message','No user found with this email!');
        }
    }
    public function dashboard()
    {
        $data=array();
        if(Session::has('LoginId')){
            $data=User::where('id','=',Session::get('LoginId')) -> first();
        }
        return redirect('/')->with('data',$data);

    }
    public function logout()
    {
        if(Session::has('LoginId')){
            Session::pull('LoginId');
            return redirect('login');
        }
    }
}
