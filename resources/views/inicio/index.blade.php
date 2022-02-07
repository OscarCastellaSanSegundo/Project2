@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Menu
@endsection

@section('contenido')
    <div class="principal">
        <div class="divLlamada">
            <input type="button" onclick="" value="Llamadas" class="boton1">
        </div>
        <div class="divExpediente">
            <input type="button" onclick="" value="Expedientes" class="boton2">
        </div>
    </div>
{{--     <img src="../public/Imagenes/Logo1Vector1.png" alt="" width="180" height="120" class="d-inline-block align-text-top logoBotonInicio">
 --}}@endsection
