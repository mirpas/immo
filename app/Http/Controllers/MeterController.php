<?php

namespace App\Http\Controllers;

use App\Meter;
use App\Flat;
use App\Building;
use App\MeterType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMeterRequest;

class MeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('meters.index', [
            'meters' => Meter::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meters.create', [
            'flats' => Flat::where('building_id', session('building_id'))->get(),
            'meterTypes' => MeterType::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeterRequest $request)
    {
        $meter = Meter::create($request->all());
        $meter->flats()->sync($request->flats);

        return redirect()->route('meters.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meter  $meter
     * @return \Illuminate\Http\Response
     */
    public function edit(Meter $meter)
    {
        return view('meters.edit', [
            'meter' => $meter,
            'flats' => Flat::where('building_id', session('building_id'))->get(),
            'meterTypes' => MeterType::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meter  $meter
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMeterRequest $request, Meter $meter)
    {
        $meter->update($request->all());
        $meter->flats()->sync($request->flats);

        return redirect()->route('meters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meter  $meter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meter $meter)
    {
        $meter->delete();

        return redirect()->route('meters.index');
    }
}
