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
            <video id ="videobg" preload="auto" autoplay="true" loop>
                <source src="../public/Videos/pulsacion.mp4" >
            </video>
        </div>
        <div class="divExpediente">
            <video id ="videobg" preload="auto" autoplay="true" loop>
                <source src="../public/Videos/llamada.mp4" >
            </video>
            {{-- <input type="button" onclick="" value="Expedientes" class="boton2"> --}}
        </div>
    </div>
{{--     <img src="../public/Imagenes/Logo1Vector1.png" alt="" width="180" height="120" class="d-inline-block align-text-top logoBotonInicio">
 --}}@endsection
