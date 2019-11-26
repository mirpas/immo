<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class BuildingController extends Controller
{
	public function index()
    	{
        	// $posts = Post::all();
	        // To order the posts in desc order
	        $buildings = Building::all(); //latest()->get(); // oldest -> asc
	        return view('buildings.index', compact('buildings'));
    	}

	public function edit(Building $building)
	    {
	        return view('buildings.edit', compact('building'));
	    }
}
