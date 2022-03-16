<?php

use App\Http\Controllers\Api\MapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('inicio', MapController::class);
Route::apiResource('agencia', AgenciaController::class);
Route::apiResource('cartaTrucada', CartaTrucadaController::class);
Route::apiResource('cartesTrucadesHasAgencies', CartesTrucadesHasAgenciesController::class);
Route::apiResource('comarca', ComarcaController::class);
Route::apiResource('dadesPersonals', DadesPersonalsController::class);
Route::apiResource('estatAgencia', EstatAgenciaController::class);
Route::apiResource('estatExpedient', EstatExpedientController::class);
Route::apiResource('expedient', ExpedientController::class);
Route::apiResource('incident', IncidentController::class);
Route::apiResource('municipi', MunicipiController::class);
Route::apiResource('perfil', PerfilController::class);
Route::apiResource('provincia', ProvinciaController::class);
Route::apiResource('tipusIncident', TipusIncidentController::class);
Route::apiResource('tipusLocalitzacio', TipusLocalitzacioController::class);
Route::apiResource('usuari', UsuariController::class);

