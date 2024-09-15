<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Session;

class SearchController extends Controller
{
    public function show(string $search_by)
    {
        $places=Place::where('place_category','=',$search_by)->get();
        session()->put('category',$search_by);
        if(count($places)==0){            
            $places=Place::where('region','=',$search_by)->get();
            session()->put('region',$search_by); 
        }
        
        return view('index')->with('hosts',$places);
    }
}
