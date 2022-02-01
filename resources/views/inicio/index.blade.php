@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Menu
@endsection

@section('contenido')
    <div class="row text-center colu">
        <div class="col colu">
            <input type="button" onclick="" value="Llamadas" id="botonInicio">
        </div>
        <div class="col colu">
            <input type="button" onclick="" value="Expedientes" id="botonInicio">

        </div>
    </div>
{{--     <img src="../public/Imagenes/Logo1Vector1.png" alt="" width="180" height="120" class="d-inline-block align-text-top logoBotonInicio">
 --}}@endsection
