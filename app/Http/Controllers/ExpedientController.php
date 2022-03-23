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
        $carrer1 = $request->input('carrer1');
        $entitatPoblacio1 = $request->input('entitatPoblacio1');

        $array = array("carrer1", "entitatPoblacio1");

        $mostrarTot = $request->input('mostrarTot');
        $carrer = $request->input('carrer');
        $entitatPoblacio = $request->input('entitatPoblacio');
        $puntSingular = $request->input('puntSingular');
        $carretera = $request->input('carretera');

        // $accident = $request->input('accident');
        // $assistenciaSanitaria = $request->input('assistenciaSanitaria');
        // $incendi = $request->input('incendi');
        // $fuita = $request->input('fuita');
        // $altresIncidencies = $request->input('altresIncidencies');
        // $seguretat = $request->input('seguretat');
        // $transit = $request->input('transit');
        // $civisme = $request->input('civisme');
        // $mediAmbient = $request->input('mediAmbient');
        // $meteorologia = $request->input('meteorologia');

        // $barcelona = $request->input('barcelona');
        // $girona = $request->input('girona');
        // $tarragona = $request->input('tarragona');
        // $lleida = $request->input('lleida');
        // $foraCatalunya = $request->input('foraCatalunya');

        // $policia = $request->input('policia');
        // $ambulancia = $request->input('ambulancia');
        // $bombers = $request->input('bombers');

        // $enProces = $request->input('enProces');
        // $solicitat = $request->input('solicitat');
        // $acceptat = $request->input('acceptat');
        // $tancat = $request->input('tancat');
        // $immobilitzat = $request->input('immobilitzat');

        // $carretera = $request->input('carretera');
        // $carretera = $request->input('carretera');

        $arrayGeneral = [];

        foreach ($array as $value) {
            $contador = 1;

            switch ($value){

                case 'carrer1':

                    if ($carrer1 == 'true') {

                        $contador++;
                        $arrayElemento = [
                            "texto" => "tipus_localitzacions_id",
                            "id" => 1
                        ];
                        array_push($arrayGeneral, $arrayElemento);

                    }
                    break;

                case 'entitatPoblacio1':

                    if ($entitatPoblacio1 == 'true') {
                        $contador++;
                        $arrayElemento = [
                            "texto" => "tipus_localitzacions_id",
                            "id" => 2
                        ];
                        array_push($arrayGeneral, $arrayElemento);
                    }
                    break;

            }

        }

        // $resultado = Expedient::whereHas('cartesTrucada', function ($query) {


        //     for ($i=0; $i < count($arrayGeneral); $i++) {
        //         if ($i == 0) {
        //             $query->where($arrayGeneral[$i]['texto'], '=', $arrayGeneral[$i]['id']);
        //         }
        //         // else {
        //         //     $query->orWhere($arrayGeneral[$i]['texto'], '=', $arrayGeneral[$i]['id']);
        //         // }
        //     }


        // })->get();





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

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

        }else if ($carretera == 'true') {

            $expedients = Expedient::whereHas('cartesTrucada', function ($query) {
                $query->where('tipus_localitzacions_id', '=', 4);
            })->get();

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
