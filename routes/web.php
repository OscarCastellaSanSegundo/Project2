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
    return view('inicio.index');
});


Route::get('/expediente', function () {
    return view('expediente.index');
});

Route::get('/llamada', function () {
    return view('llamada.index');
});

Route::get('/Inicio', function () {
    return view('inicio.index');
});
