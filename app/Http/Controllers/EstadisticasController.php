<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;
use App\Models\CartaTrucada;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $meses = array();
        $incidentes = array();
        $provincies = array();

        $enero = CartaTrucada::whereMonth('data_hora', '01')->count();
        $febrero = CartaTrucada::whereMonth('data_hora', '02')->count();
        $marzo = CartaTrucada::whereMonth('data_hora', '03')->count();
        $abril = CartaTrucada::whereMonth('data_hora', '04')->count();
        $mayo = CartaTrucada::whereMonth('data_hora', '05')->count();
        $junio = CartaTrucada::whereMonth('data_hora', '06')->count();
        $julio = CartaTrucada::whereMonth('data_hora', '07')->count();
        $agosto = CartaTrucada::whereMonth('data_hora', '08')->count();
        $septiembre = CartaTrucada::whereMonth('data_hora', '09')->count();
        $octubre = CartaTrucada::whereMonth('data_hora', '10')->count();
        $noviembre = CartaTrucada::whereMonth('data_hora', '11')->count();
        $diciembre = CartaTrucada::whereMonth('data_hora', '12')->count();

        $barcelona = CartaTrucada::where('provincies_id', '01')->count();
        $girona = CartaTrucada::where('provincies_id', '02')->count();
        $lleida = CartaTrucada::where('provincies_id', '03')->count();
        $tarragona = CartaTrucada::where('provincies_id', '04')->count();
        $foraCatalunya = CartaTrucada::where('fora_catalunya', '01')->count();


        $accident = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 1);
        })->count();
        $assistenciaSanitaria = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 2);
        })->count();
        $incendi = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 3);
        })->count();
        $fuita = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 4);
        })->count();
        $altres = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 5);
        })->count();
        $seguretat = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 6);
        })->count();
        $transit = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 7);
        })->count();
        $civisme = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 8);
        })->count();
        $mediAmbient = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 9);
        })->count();
        $meteo = CartaTrucada::whereHas('incident', function ($query) {
            $query->where('classes_incidents_id', '=', 10);
        })->count();


        array_push($meses, $enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre);
        array_push($incidentes, $accident, $assistenciaSanitaria, $incendi, $fuita, $altres, $seguretat, $transit, $civisme, $mediAmbient, $meteo);
        array_push($provincies, $barcelona, $girona, $lleida, $tarragona, $foraCatalunya);




        return view('estadisticas.index', compact('user', 'meses', 'incidentes', 'provincies'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
