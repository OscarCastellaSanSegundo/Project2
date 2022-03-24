<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\CartaTrucada;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
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
        $cartaTrucada->codi_trucada = $request->input('codi_trucada');
        $cartaTrucada->data_hora = $request->date('Y-m-d H:i:s');
        $cartaTrucada->temps_trucada = $request->input('temps_trucada');
        $cartaTrucada->procedencia_trucada = $request->input('procedencia_trucada');
        $cartaTrucada->origen_trucada = $request->input('origen_trucada');
        $cartaTrucada->nom_trucada = $request->input('nom_trucada');
        $cartaTrucada->municipis_id_trucada = $request->input('municipis_id_trucada');
        $cartaTrucada->adreca_trucada = $request->input('adreca_trucada');
        $cartaTrucada->fora_catalunya = ($request->input('fora_catalunya') == 'fora_catalunya');
        $cartaTrucada->provincies_id = $request->input('provincies_id');
        $cartaTrucada->municipis_id = $request->input('municipis_id');
        $cartaTrucada->tipus_localitzacions_id = $request->input('tipus_localitzacions_id');
        $cartaTrucada->descripcio_localitzacio = $request->input('descripcio_localitzacio');
        $cartaTrucada->detall_localitzacio = $request->input('detall_localitzacio');
        $cartaTrucada->altres_ref_localitzacio = $request->input('altres_ref_localitzacio');
        $cartaTrucada->incidents_id = $request->input('incidents_id');
        $cartaTrucada->nota_comuna = $request->input('nota_comuna');
        $cartaTrucada->expedients_id = $request->input('expedients_id');
        $cartaTrucada->usuaris_id = $request->input('usuaris_id');

        try {
            $cartaTrucada->save();
            $response = (new CartaTrucadaResource($cartaTrucada))
                        ->response()
                        ->setStatusCode(201);

        } catch (QueryException $ex) {
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
