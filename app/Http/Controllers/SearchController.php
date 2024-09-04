<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Session;

class SearchController extends Controller
{
    public function show(string $search_by)
    {
        $places=Place::where('place_category','=',$search_by,'OR','place_region','=',$search_by)->get();
        session()->put('category',$search_by);
        return view('index')->with('hosts',$places);
    }
}
