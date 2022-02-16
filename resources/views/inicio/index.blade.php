@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Menu
@endsection

@section('contenido')
    <div class="principal">
        <div class="card cardInicio">
            <div class="card-body">
                <div class="divLlamada">
                    <a href="{{ url('/llamada') }}" class="btn btn-primary anadirElemento boton1">Llamada</a>
                </div>
            </div>
        </div>
        <div class="card cardInicio">
            <div class="card-body">
                <div class="divExpediente">
                    <a href="{{ url('/expedientes') }}" class="btn btn-primary anadirElemento boton2">Expedientes</a>
                </div>
            </div>
        </div>



    </div>
{{--     <img src="../public/Imagenes/Logo1Vector1.png" alt="" width="180" height="120" class="d-inline-block align-text-top logoBotonInicio">
 --}}@endsection
