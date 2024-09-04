<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Place;
use App\Models\Photos;
use App\Models\Bathrooms;
use App\Models\Emenities;
use App\Models\User;
use Hash;
use Session;

class BecomeHost extends Controller
{
    public function home(){
        return view('hosting.home');
    }

    public function setup(){
        return view('hosting.setup');
    }
    public function structure(){
        return view('hosting.structure');
    }
    public function storeStructure(Request $request)
    {
        $request->validate([
            'place_name'=> 'required|unique:places',
            'place_category'=> 'required',
        ]);
        $inputs=$request->all();
        $inputs['hosted_by']=Session::get('LoginId')->id;
        Place::create($inputs);
        $request->session()->put('place_name',$request->place_name);
        return redirect('become-a-host/privacy-type');
    }
    public function privacyType(){
        return view('hosting.privacy-type');
    }
    public function storePrivacyType(Request $request){
        $request->validate([
            'region'=> 'required',
            'place_region'=> 'required',
            'province'=> 'required',
            'city'=> 'required',
            'street'=> 'required',
            'postal_code'=> 'required',
            'place_type'=> 'required',
        ]);
        $inputs=$request->all();
        $place_name=Session::get('place_name');
        $place=Place::where('place_name','=',$place_name)->first();
        $place->update($inputs);
        return redirect('become-a-host/house-plan');
        
    }
    public function housePlan(){
        return view('hosting.house-plan');
    }
    public function storeHousePlan(Request $request){
        $inputs=$request->all();
        $place_name=Session::get('place_name');
        $place=Place::where('place_name','=',$place_name)->first();
        $id=$place->id;
        $place->update($inputs);
        $bathrooms=new Bathrooms([
            'place_id'=>$id,
            'private'=>$request->private,
            'dedicated'=>$request->dedicated,
            'shared'=> $request->shared
        ]);
        $bathrooms->save();
        return redirect('become-a-host/step2');
        
    }
    public function step2(){
        return view('hosting.step2');
    }
    public function storeStep2(Request $request){

        //place table
        $place_name=Session::get('place_name');
        $image=$request->file('cover');
        $imageName= $image -> getClientOriginalName();
        $image->move(\public_path('place-cover/'),$imageName);

        $place=Place::where('place_name','=',$place_name)->first();

        $place->place_description=$request->place_description;
        $place->cover_photo=$imageName;
        $place->save();

        $id=$place->id;
        
        //emenities table
        $emenities_count=count($request->emenities);
        $emenities_list=implode(',',$request->emenities);
        $emenities=new Emenities([
            'place_id'=>$id,
            'emenities_list'=>$emenities_list,
            'emenities_count'=>$emenities_count
        ]);
        $emenities->save();

        //photos table
        $files=$request->file('photos');
        foreach($files as $file){
            $imageName=$file->getClientOriginalName();
            $file->move(\public_path('place_photos'),$imageName);
            $request['place_id']=$id;
            $request['filename']=$imageName;
            $request['caption']='Airbnb image caption';
            Photos::create($request->all());
        }
        return redirect('become-a-host/finish');
        
    }
    public function step3(){
        return view('hosting.step3');
    }

    public function storeStep3(Request $request){
        $place_name=Session::get('place_name');
        $place=Place::where('place_name','=',$place_name)->first();
        $id=$place->id;

        $place->price=$request->price;
        $place->hosting_type=$request->hosting_type;
        $place->discounts=$request->discount;
        
        $place->save();
        Session::pull('place_name');
        return redirect('/');
        
    }
    
}
