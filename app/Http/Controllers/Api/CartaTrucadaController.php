<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Expedient;
use App\Models\CartaTrucada;
use Illuminate\Http\Request;
use App\Models\DadesPersonals;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App\Models\CartesTrucadesHasAgencies;
use App\Http\Resources\CartaTrucadaResource;

class CartaTrucadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartesTrucada = CartaTrucada::all();
        return CartaTrucadaResource::collection($cartesTrucada);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartaTrucada = new CartaTrucada();
        $cartaTrucada->codi_trucada = $request->input('cartaTrucada.codi_trucada');
        $cartaTrucada->data_hora = date('Y-m-d H:i:s');
        $cartaTrucada->temps_trucada = $request->input('cartaTrucada.temps_trucada');
        $cartaTrucada->procedencia_trucada = $request->input('cartaTrucada.procedencia_trucada');
        $cartaTrucada->origen_trucada = $request->input('cartaTrucada.origen_trucada');
        $cartaTrucada->nom_trucada = $request->input('cartaTrucada.nom_trucada');
        $cartaTrucada->municipis_id_trucada = $request->input('cartaTrucada.municipis_id_trucada');
        $cartaTrucada->adreca_trucada = $request->input('cartaTrucada.adreca_trucada');
        $cartaTrucada->fora_catalunya = ($request->input('cartaTrucada.fora_catalunya') == 'fora_catalunya');
        $cartaTrucada->provincies_id = $request->input('cartaTrucada.provincies_id');
        $cartaTrucada->municipis_id = $request->input('cartaTrucada.municipis_id');
        $cartaTrucada->tipus_localitzacions_id = $request->input('cartaTrucada.tipus_localitzacions_id');
        $cartaTrucada->descripcio_localitzacio = $request->input('cartaTrucada.descripcio_localitzacio');
        $cartaTrucada->detall_localitzacio = $request->input('cartaTrucada.detall_localitzacio');
        $cartaTrucada->altres_ref_localitzacio = $request->input('cartaTrucada.altres_ref_localitzacio');
        $cartaTrucada->incidents_id = $request->input('cartaTrucada.incidents_id');
        $cartaTrucada->nota_comuna = $request->input('cartaTrucada.nota_comuna');
        $cartaTrucada->expedients_id = $request->input('cartaTrucada.expedients_id');
        $cartaTrucada->dades_personals_id = $request->input('cartaTrucada.dades_personals_id');
        $cartaTrucada->usuaris_id = 1;


       /*  $cartesTrucadesHasAgencies = new CartesTrucadesHasAgencies();
        $cartesTrucadesHasAgencies->cartes_trucades_id = $request->input('cartes_trucades_id');
        $cartesTrucadesHasAgencies->agencies_id = $request->input('cartesTrucadesHasAgencies.agencies_id');
        $cartesTrucadesHasAgencies->estats_agencies_id = $request->input('cartesTrucadesHasAgencies.estats_agencies_id'); */

        if ($cartaTrucada->expedients_id == null) {
            $expedient = new Expedient();
            $expedient->data_creacio = date('Y-m-d H:i:s');
            $expedient->data_ultima_modificacio = date('Y-m-d H:i:s');
            $expedient->estats_expedients_id = $request->input('expedient.estats_expedients_id');
        }
        if ($cartaTrucada->dades_personals_id == null) {
            $dadesPersonal = new DadesPersonals();
            $dadesPersonal->telefon = $request->input('dadesPersonal.telefon');
            $dadesPersonal->adreca = $request->input('dadesPersonal.adreca');
            $dadesPersonal->antecedents = $request->input('dadesPersonal.antecedents');
        }





        try {
            DB::beginTransaction();

                if ($cartaTrucada->expedients_id == null) {
                    $expedient->save();
                    $cartaTrucada->expedients_id = $expedient->id;
                }
                if ($cartaTrucada->dades_personals_id == null) {
                    $dadesPersonal->save();
                    $cartaTrucada->dades_personals_id = $dadesPersonal->id;
                }
                $cartaTrucada->save();

/*                 $cartesTrucadesHasAgencies->cartes_trucades_id = $cartaTrucada->id;
                $cartesTrucadesHasAgencies->save(); */
            $cartaTrucada->save();
            $response = (new CartaTrucadaResource($cartaTrucada))
                        ->response()
                        ->setStatusCode(201);
            DB::commit();

        } catch (QueryException $ex) {
            DB::rollBack();
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()
                        ->json(['error' => $mensaje], 400);
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function show(CartaTrucada $cartaTrucada)
    {
        $cartaTrucada = CartaTrucada::with('dadesPersonals', 'TipusLocalitzacio', 'usuari', 'incident', 'provincia', 'municipi', 'municipiTrucada', 'cartesTrucadesHasAgencia')->find($cartaTrucada->id);
        return new CartaTrucadaResource($cartaTrucada);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartaTrucada $cartaTrucada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartaTrucada $cartaTrucada)
    {
        //
    }
}
