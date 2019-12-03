<?php

namespace App\Http\Controllers;

use App\Flat;
use App\Building;
use App\FlatType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFlatRequest;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['building_id' => 1]);
        $flats = Flat::where('building_id', session('building_id'))->orderBy('floor')->get();

        return view('flats.index', compact('flats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flats.create', [
            'buildings' => Building::all(),
            'flatTypes' => FlatType::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlatRequest $request)
    {
        Flat::create($request->all());

        return redirect()->route('flats.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat $flat)
    {
        return view('flats.edit', [
            'flat' => $flat,
            'buildings' => Building::all(),
            'flatTypes' => FlatType::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFlatRequest $request, Flat $flat)
    {
        $flat->update($request->all());

        return redirect()->route('flats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        $flat->delete();

        return redirect()->route('flats.index');
    }
}
