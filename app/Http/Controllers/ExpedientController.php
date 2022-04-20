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
        $buscarExpedientes = $request->input('buscarExpedientes');

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
        $filtroActivado = false;

        if ($mostrarTot == 'true') {

            $expedients = Expedient::all();

        }else if ($buscarExpedientes != null) {

            $filtroActivado = true;

            // $expedients = Expedient::
            //     where('id', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->orWhere('data_creacio', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->orWhere('data_ultima_modificacio', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->orWhere('estats_expedients_id', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->get();

            // $expedients = Expedient::
            //     join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
            //     ->where('expedients.id', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->orWhere('expedients.data_creacio', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->orWhere('expedients.data_ultima_modificacio', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->orWhere('expedients.estats_expedients_id', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->orWhere('cartes_trucades.nota_comuna', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->get();

            // $expedients = Expedient::
            //     join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
            //     ->select('expedients.*')
            //     ->where('cartes_trucades.nota_comuna', 'LIKE', '%'.$buscarExpedientes.'%')
            //     ->get();


            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->join('usuaris', 'cartes_trucades.usuaris_id', '=', 'usuaris.id')
                ->join('estats_expedients', 'expedients.estats_expedients_id', '=', 'estats_expedients.id')
                ->join('tipus_incidents', 'incidents.classes_incidents_id', '=', 'tipus_incidents.id')
                ->join('provincies', 'cartes_trucades.provincies_id', '=', 'provincies.id')
                ->join('comarques', 'provincies.id', '=', 'comarques.provincies_id')
                ->join('municipis', 'cartes_trucades.municipis_id', '=', 'municipis.id')
                ->join('dades_personals', 'cartes_trucades.dades_personals_id', '=', 'dades_personals.id')
                ->select('expedients.*')
                ->where('expedients.id', '=', $buscarExpedientes)
                ->orWhere('expedients.data_creacio', 'LIKE', '%'.$buscarExpedientes.'%')
                ->orWhere('expedients.data_ultima_modificacio', 'LIKE', '%'.$buscarExpedientes.'%')
                // ->orWhere('expedients.estats_expedients_id', 'LIKE', '%'.$buscarExpedientes.'%')
                ->orWhere('cartes_trucades.nota_comuna', 'LIKE', '%'.$buscarExpedientes.'%')
                ->orWhere('cartes_trucades.codi_trucada', '=', $buscarExpedientes)
                // ->orWhere('provincies.nom', 'LIKE', '%'.$buscarExpedientes.'%')
                ->distinct()->get();





        }else if ($carrer == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 1);
            })->distinct()->get();

        }else if ($entitatPoblacio == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 2);
            })->distinct()->get();

        }else if ($puntSingular == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 3);
            })->distinct()->get();

        }else if ($carretera == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->distinct()->get();

        }else if ($provincia == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 5);
            })->distinct()->get();




        }else if ($accident == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 1)
                ->distinct()->get();

        }else if ($assistenciaSanitaria == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 2)
                ->distinct()->get();

        }else if ($incendi == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 3)
                ->distinct()->get();

        }else if ($fuita == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 4)
                ->distinct()->get();

        }else if ($altresIncidencies == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 5)
                ->distinct()->get();

        }else if ($seguretat == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 6)
                ->distinct()->get();

        }else if ($transit == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 7)
                ->distinct()->get();

        }else if ($civisme == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 8)
                ->distinct()->get();

        }else if ($mediAmbient == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 9)
                ->distinct()->get();

        }else if ($meteorologia == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->where('incidents.classes_incidents_id', '=', 10)
                ->distinct()->get();




        }else if ($barcelona == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('provincies_id', '=', 1);
            })->distinct()->get();

        }else if ($girona == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('provincies_id', '=', 2);
            })->distinct()->get();

        }else if ($tarragona == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('provincies_id', '=', 4);
            })->distinct()->get();

        }else if ($lleida == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('provincies_id', '=', 3);
            })->distinct()->get();

        }else if ($foraCatalunya == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('fora_catalunya', '=', 1);
            })->distinct()->get();





        }else if ($policia == 'true') {

            $filtroActivado = true;
            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('cartes_trucades_has_agencies', 'cartes_trucades.id', '=', 'cartes_trucades_has_agencies.cartes_trucades_id')
                ->select('expedients.*')
                // ->join('estats_agencies', 'cartes_trucades.id', '=', 'cartes_trucades_has_agencies.cartes_trucades_id')
                ->Where('cartes_trucades_has_agencies.agencies_id', '>', 0, 'and', 'cartes_trucades_has_agencies.agencies_id' ,'<=', 117)
                ->orWhere('cartes_trucades_has_agencies.agencies_id', '>=', 264, 'and', 'cartes_trucades_has_agencies.agencies_id' ,'<=', 470)
                ->distinct()->get();

        }else if ($ambulancia == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('cartes_trucades_has_agencies', 'cartes_trucades.id', '=', 'cartes_trucades_has_agencies.cartes_trucades_id')
                ->select('expedients.*')
                // ->join('estats_agencies', 'cartes_trucades.id', '=', 'cartes_trucades_has_agencies.cartes_trucades_id')
                ->Where('cartes_trucades_has_agencies.agencies_id', '>=', 471)
                ->distinct()->get();

        }else if ($bombers == 'true') {

            $expedients = Expedient::
                join('cartes_trucades', 'expedients.id', '=', 'cartes_trucades.expedients_id')
                ->join('cartes_trucades_has_agencies', 'cartes_trucades.id', '=', 'cartes_trucades_has_agencies.cartes_trucades_id')
                ->select('expedients.*')
                // ->join('estats_agencies', 'cartes_trucades.id', '=', 'cartes_trucades_has_agencies.cartes_trucades_id')
                ->Where('cartes_trucades_has_agencies.agencies_id', '>=', 118, 'and', 'cartes_trucades_has_agencies.agencies_id' ,'<=', 263)
                ->distinct()->get();





        }else if ($enProces == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 1)
                ->distinct()->get();

        }else if ($solicitat == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 2)
                ->distinct()->get();

        }else if ($acceptat == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 3)
                ->distinct()->get();

        }else if ($tancat == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 4)
                ->distinct()->get();

        }else if ($immobilitzat == 'true') {

            $expedients = Expedient::
                where('estats_expedients_id', '=', 5)
                ->distinct()->get();





        }else if ($creacioMesRecents == 'true') {

            $expedients = Expedient::
                orderBy('data_creacio', 'desc')
                ->distinct()->get();

        }else if ($creacioMesAntics == 'true') {

            $expedients = Expedient::
                orderBy('data_creacio', 'asc')
                ->distinct()->get();

        }else if ($edicioMesRecents == 'true') {

            $expedients = Expedient::
                orderBy('data_ultima_modificacio', 'desc')
                ->distinct()->get();

        }else if ($edicioMesAntics == 'true') {

            $expedients = Expedient::
                orderBy('data_ultima_modificacio', 'asc')
                ->distinct()->get();

        }else{

            $expedients = Expedient::all();

        }

        // if ($filtroActivado == true) {
        //     $numeroIdExpediente= -1;
        //     $contador = 0;
        //     foreach ($expedients as $key => $value) {
        //         if ($numeroIdExpediente == $value->id) {
        //             array_splice( $expedients, $contador - 1, 1);
        //         }
        //         $numeroIdExpediente = $value->id;
        //         $contador++;
        //     }
        //     $filtroActivado = false;
        // }
        $buscarExpedientes = null;



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
    public function edit($id, Expedient $expedient, Request $request)
    {
        $cambiarEstado = $request->input('cambiarEstado');
        $user = Auth::user();
        $numeroExpediente = Expedient::find($id);

        $numeroExpediente->estats_expedients_id = $cambiarEstado;
        $numeroExpediente->save();

        return redirect()->action([ExpedientController::class, 'index']);
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
