<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;

class BuildingSelectController extends Controller
{
    /**
     * Display a listing of the buildings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('buildings.select', [
            'buildings' => Building::all(),
        ]);
    }

    /**
     * Store the selected building in the session.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request)
    {
        $validatedBuildingId = $request->validate([
        	'building_id' => 'required|integer|exists:buildings,id'
        ]);

        session([
        	'building_id' => $validatedBuildingId
        ]);

        return redirect()->route('dashboard');
    }

}
