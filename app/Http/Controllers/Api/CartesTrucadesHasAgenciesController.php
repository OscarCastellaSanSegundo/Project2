<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CartesTrucadesHasAgencies;
use App\Http\Resources\CartesTrucadesHasAgenciesResource;

class CartesTrucadesHasAgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartesTrucadesHasAgencies = CartesTrucadesHasAgencies::all();
        return CartesTrucadesHasAgenciesResource::collection($cartesTrucadesHasAgencies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartesTrucadesHasAgencies  $cartesTrucadesHasAgencies
     * @return \Illuminate\Http\Response
     */
    public function show(CartesTrucadesHasAgencies $cartesTrucadesHasAgency)
    {
        return new CartesTrucadesHasAgenciesResource($cartesTrucadesHasAgency);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartesTrucadesHasAgencies  $cartesTrucadesHasAgencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartesTrucadesHasAgencies $cartesTrucadesHasAgency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartesTrucadesHasAgencies  $cartesTrucadesHasAgencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartesTrucadesHasAgencies $cartesTrucadesHasAgency)
    {
        //
    }
}
