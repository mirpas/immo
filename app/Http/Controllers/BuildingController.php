<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Http\Requests\StoreBuildingRequest;

class BuildingController extends Controller
{
	public function index()
    {
    	$buildings = Building::all();
        // To order the posts in desc order
        //$buildings = Building::latest()->get();
        return view('buildings.index', compact('buildings'));
    }

	public function create()
	{
	    return view('buildings.create');
	}

	public function store(StoreBuildingRequest $request)
	{
        // By using the Model::create method ensure that the fillable array in the model is set
        Building::create($request->all());

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

	public function update(StoreBuildingRequest $request, Building $building)
	{
		$building->update($request->all());
	    return redirect('/buildings');
	}

	public function destroy(Building $building)
	{
		$building->delete();
		return redirect('/buildings');
	}
}
