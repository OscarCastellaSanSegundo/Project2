<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariController;
use App\Http\Controllers\ExpedientController;
use App\Http\Controllers\EstadisticasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('inicio.index');
});


// Route::get('/expedientes', function () {
//     return view('expediente.index');
// });

Route::get('/llamada', function () {
    return view('llamada.index');
});

Route::get('/Inicio', function () {
    return view('inicio.index');
}); */

/* Route::get('/llamadaVue', function () {
    return view('llamada.indexVue');
}); */

Route::get('/login', [UsuariController::class, 'showLogin'])->name('login');
// Route::resource('expedientes', ExpedientController::class );

Route::post('/login', [UsuariController::class, 'login'] );
Route::get('/logout', [UsuariController::class, 'logout']);
Route::post('/login', [UsuariController::class, 'login'] );

Route::get('/mapa', function () {
    $user = Auth::user();
    return view('mapa.index', compact('user'));
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        $user = Auth::user();

        return view('inicio.index', compact('user'));
    });
    // Route::get('/expedientes', function () {
    //      $user = Auth::user();
    //      return view('expediente.index', compact('user'));
    // });

/*     Route::get('/llamada', function () {
        $user = Auth::user();
        return view('llamada.index', compact('user'));
    }); */

    Route::get('/inicio', function () {
        $user = Auth::user();
        return view('inicio.index', compact('user'));
    });

    Route::get('/gestionUsuarios', function () {
        $user = Auth::user();
        return view('administracion.index', compact('user'));
    });
    Route::get('/llamada', function () {
        $user = Auth::user();
        return view('llamada.indexVue', compact('user'));
    });

    // Route::get('/estadisticas', function () {
    //     $user = Auth::user();
    //     return view('estadisticas.index', compact('user'));
    // });
    Route::resource('estadisticas', EstadisticasController::class );
    Route::resource('expedientes', ExpedientController::class );
    Route::resource('usuarios', UsuariController::class );
});
