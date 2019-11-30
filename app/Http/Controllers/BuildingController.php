<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBuildingRequest;

class BuildingController extends Controller
{
	public function index()
    {
    	$buildings = Building::all();

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

	    return redirect()->route('buildings.index');
	}

	public function edit(Building $building)
	{
	    return view('buildings.edit', compact('building'));
	}

	public function update(StoreBuildingRequest $request, Building $building)
	{
		$building->update($request->all());

	    return redirect()->route('buildings.index');
	}

	public function destroy(Building $building)
	{
		$building->delete();

	    return redirect()->route('buildings.index');
	}
}
