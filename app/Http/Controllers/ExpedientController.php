<?php

namespace App\Http\Controllers;

use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExpedientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   $carrer = $request->input('carrer');

        if ($carrer == 'carrer') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 1);
            })->get();

        }else{
            // $cicles = Cicle::all();
            $expedients = Expedient::all();
        }



        $user = Auth::user();

        return view('expediente.index', compact('expedients', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function show(Expedient $expedient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function edit(Expedient $expedient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expedient $expedient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedient $expedient)
    {
        //
    }
}
