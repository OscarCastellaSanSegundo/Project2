<?php

namespace App\Http\Controllers\Api;

use App\Models\Provincia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinciaResource;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincies = Provincia::all();
        return ProvinciaResource::collection($provincies);
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
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function show(Provincia $provincium)
    {
        $provincium = Provincia::with('comarques', 'cartesTrucada')->find($provincium->id);
        return new ProvinciaResource($provincium);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincia $provincium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincia $provincium)
    {
        //
    }
}
