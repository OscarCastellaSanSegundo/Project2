<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\EstatExpedient;
use App\Http\Controllers\Controller;
use App\Http\Resources\EstatExpedientResource;

class EstatExpedientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatExpedients = EstatExpedient::all();
        return EstatExpedientResource::collection($estatExpedients);
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
     * @param  \App\Models\EstatExpedient  $estatExpedient
     * @return \Illuminate\Http\Response
     */
    public function show(EstatExpedient $estatExpedient)
    {
        $estatExpedient = EstatExpedient::with('expedients')->find($estatExpedient->id);
        return new EstatExpedientResource($estatExpedient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstatExpedient  $estatExpedient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstatExpedient $estatExpedient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstatExpedient  $estatExpedient
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstatExpedient $estatExpedient)
    {
        //
    }
}
