<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\TipusIncident;
use App\Http\Controllers\Controller;
use App\Http\Resources\TipusIncidentResource;

class TipusIncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipusIncidents = TipusIncident::all();
        return TipusIncidentResource::collection($tipusIncidents);
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
     * @param  \App\Models\TipusIncident  $tipusIncident
     * @return \Illuminate\Http\Response
     */
    public function show(TipusIncident $tipusIncident)
    {
        return new TipusIncidentResource($tipusIncident);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipusIncident  $tipusIncident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipusIncident $tipusIncident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipusIncident  $tipusIncident
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipusIncident $tipusIncident)
    {
        //
    }
}
