<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class BuildingController extends Controller
{
	public function index()
    	{
        	$buildings = Building::all();
	        // To order the posts in desc order
	        //$buildings = Building::latest()->get(); // oldest -> asc
	        return view('buildings.index', compact('buildings'));
    	}

	public function create()
	{
	        return view('buildings.create');
	}

	public function store()
	{
	        // Validate the form data
	        $this->validate(request(), [
	           'short_name' => 'required',
	           'zip' => 'required',
	        ]);

	        // By using the Model::create method ensure that the fillable array in the model is set
	        Building::create(request(['short_name', 'description', 'street', 'zip', 'city', 'flurnummer', 'ground_area', 'building_area', 'year_of_construction']));


	        /* ALTERNATIVE
	        $building = new Building;
	        $building->short_name = request('short_name');
	        [...]
	        $post->save();
	        */

	        return redirect('/buildings');
	}

	public function edit(Building $building)
	{
	        return view('buildings.edit', compact('building'));
	}

	public function update(Building $building)
	{
	        //return view('buildings.edit', compact('building'));
	}

	public function destroy(Building $building)
	{
	        //return view('buildings.edit', compact('building'));
	}
}
