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
    {

        $mostrarTot = $request->input('mostrarTot');

        $carrer = $request->input('carrer');
        $entitatPoblacio = $request->input('entitatPoblacio');
        $puntSingular = $request->input('puntSingular');
        $carretera = $request->input('carretera');
        $provincia = $request->input('provincia');

        $accident = $request->input('accident');
        $assistenciaSanitaria = $request->input('assistenciaSanitaria');
        $incendi = $request->input('incendi');
        $fuita = $request->input('fuita');
        $altresIncidencies = $request->input('altresIncidencies');
        $seguretat = $request->input('seguretat');
        $transit = $request->input('transit');
        $civisme = $request->input('civisme');
        $mediAmbient = $request->input('mediAmbient');
        $meteorologia = $request->input('meteorologia');

        $barcelona = $request->input('barcelona');
        $girona = $request->input('girona');
        $tarragona = $request->input('tarragona');
        $lleida = $request->input('lleida');
        $foraCatalunya = $request->input('foraCatalunya');

        $policia = $request->input('policia');
        $ambulancia = $request->input('ambulancia');
        $bombers = $request->input('bombers');

        $enProces = $request->input('enProces');
        $solicitat = $request->input('solicitat');
        $acceptat = $request->input('acceptat');
        $tancat = $request->input('tancat');
        $immobilitzat = $request->input('immobilitzat');

        $creacioMesRecents = $request->input('creacioMesRecents');
        $creacioMesAntics = $request->input('creacioMesAntics');
        $edicioMesRecents = $request->input('edicioMesRecents');
        $edicioMesAntics = $request->input('edicioMesAntics');

        $arrayGeneral = [];

        if ($mostrarTot == 'mostrarTot') {

            $expedients = Expedient::all();



        }else if ($carrer == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 1);
            })->get();

        }else if ($entitatPoblacio == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 2);
            })->get();

        }else if ($puntSingular == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 3);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($provincia == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 5);
            })->get();




        }else if ($accident == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 1)
                ->get();

        }else if ($assistenciaSanitaria == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 2)
                ->get();

        }else if ($incendi == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 3)
                ->get();

        }else if ($fuita == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 4)
                ->get();

        }else if ($altresIncidencies == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 5)
                ->get();

        }else if ($seguretat == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 6)
                ->get();

        }else if ($transit == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 7)
                ->get();

        }else if ($civisme == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 8)
                ->get();

        }else if ($mediAmbient == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 9)
                ->get();

        }else if ($meteorologia == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 10)
                ->get();




        }else if ($barcelona == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('provincies_id', '=', 1);
            })->get();

        }else if ($girona == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('provincies_id', '=', 2);
            })->get();

        }else if ($tarragona == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('provincies_id', '=', 3);
            })->get();

        }else if ($lleida == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('provincies_id', '=', 4);
            })->get();

        }else if ($foraCatalunya == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('fora_catalunya', '=', 1);
            })->get();





        }else if ($policia == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('cartes_trucades_has_agencies', 'cartes_trucades.id', '=', 'cartes_trucades_has_agencies.cartes_trucades_id')
                // ->join('estats_agencies', 'cartes_trucades.id', '=', 'cartes_trucades_has_agencies.cartes_trucades_id')
                ->Where('cartes_trucades_has_agencies.agencies_id', '>', 0, 'and', 'cartes_trucades_has_agencies.agencies_id' ,'<=', 117)
                ->orWhere('cartes_trucades_has_agencies.agencies_id', '>=', 264, 'and', 'cartes_trucades_has_agencies.agencies_id' ,'<=', 470)
                ->get();

        }else if ($ambulancia == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($bombers == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();





        }else if ($enProces == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 1)
                ->get();

        }else if ($solicitat == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 2)
                ->get();

        }else if ($acceptat == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 3)
                ->get();

        }else if ($tancat == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 4)
                ->get();

        }else if ($immobilitzat == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 5)
                ->get();





        }else if ($creacioMesRecents == 'true') {

            $expedients = Expedient::
                orderBy('data_creacio', 'desc')
                ->get();

        }else if ($creacioMesAntics == 'true') {

            $expedients = Expedient::
                orderBy('data_creacio', 'asc')
                ->get();

        }else if ($edicioMesRecents == 'true') {

            $expedients = Expedient::
                orderBy('data_ultima_modificacio', 'desc')
                ->get();

        }else if ($edicioMesAntics == 'true') {

            $expedients = Expedient::
                orderBy('data_ultima_modificacio', 'asc')
                ->get();

        }else{

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
