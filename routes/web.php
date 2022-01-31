<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Expedientes', function () {
    return view('expediente.index');
});

Route::get('/Llamadas', function () {
    return view('principal.index');
});

Route::get('/Inicio', function () {
    return view('inicio.index');
});
