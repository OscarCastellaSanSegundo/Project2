<?php

namespace App\Http\Controllers\Api;

use App\Models\Municipi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MunicipiResource;

class MunicipiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipis = Municipi::all();
        return MunicipiResource::collection($municipis);
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
     * @param  \App\Models\Municipi  $municipi
     * @return \Illuminate\Http\Response
     */
    public function show(Municipi $municipi)
    {
        $municipi = Municipi::with('comarca', 'cartesTrucada', 'cartesTrucadaTrucada', 'agencies')->find($municipi->id);
        return new MunicipiResource($municipi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipi  $municipi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipi $municipi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipi  $municipi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipi $municipi)
    {
        //
    }
}
