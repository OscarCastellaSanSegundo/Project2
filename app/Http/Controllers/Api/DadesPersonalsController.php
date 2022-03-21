<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\DadesPersonals;
use App\Http\Controllers\Controller;
use App\Http\Resources\DadesPersonalsResource;

class DadesPersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dadesPersonals = DadesPersonals::all();
        return DadesPersonalsResource::collection($dadesPersonals);
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
     * @param  \App\Models\DadesPersonals  $dadesPersonals
     * @return \Illuminate\Http\Response
     */
    public function show(DadesPersonals $dadesPersonal)
    {
        $dadesPersonal = DadesPersonals::with('cartesTrucades')->find($dadesPersonal->id);
        return new DadesPersonalsResource($dadesPersonal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DadesPersonals  $dadesPersonals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DadesPersonals $dadesPersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DadesPersonals  $dadesPersonals
     * @return \Illuminate\Http\Response
     */
    public function destroy(DadesPersonals $dadesPersonal)
    {
        //
    }
}
