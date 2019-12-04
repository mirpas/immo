<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Flat;
use App\Contact;
use App\Building;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContractRequest;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contracts.index', [
            'contracts' => Building::find( session('building_id')['building_id'] )->contracts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contracts.create', [
            'contacts' => Contact::all(),
            'flats' => Flat::where('building_id', session('building_id'))->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContractRequest $request)
    {
        $contract = Contract::create($request->all());
        $contract->contacts()->sync($request->contacts);

        return redirect()->route('contracts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        return view('contracts.edit', [
            'contract' => $contract,
            'flats' => Flat::where('building_id', session('building_id'))->get(),
            'contacts' => Contact::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(StoreContractRequest $request, Contract $contract)
    {
        $contract->update($request->all());
        $contract->contacts()->sync($request->contacts);

        return redirect()->route('contracts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();

        return redirect()->route('contracts.index');
    }
}
