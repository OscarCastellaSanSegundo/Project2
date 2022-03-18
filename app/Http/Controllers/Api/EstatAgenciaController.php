<?php

namespace App\Http\Controllers\Api;

use App\Models\EstatAgencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EstatAgenciaResource;

class EstatAgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatAgencies = EstatAgencia::all();
        return EstatAgenciaResource::collection($estatAgencies);
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
     * @param  \App\Models\EstatAgencia  $estatAgencia
     * @return \Illuminate\Http\Response
     */
    public function show(EstatAgencia $estatAgencium)
    {
        return new EstatAgenciaResource($estatAgencium);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstatAgencia  $estatAgencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstatAgencia $estatAgencium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstatAgencia  $estatAgencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstatAgencia $estatAgencium)
    {
        //
    }
}
