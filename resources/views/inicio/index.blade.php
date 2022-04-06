@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Menu
@endsection

@section('usuario')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ Auth::user()->codi }}
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="{{ url('/logout') }}">Tancar sessió</a></li>
    </ul>
</li>
@endsection

@section('contenido')
<?php
$codigoUsuario = Auth::user()->perfils_id;
?>

    @if ($codigoUsuario == 2)
        <div class="principal">

            <div class="divLlamada cardInicio">
                <a href="{{ url('/llamada') }}" class="btn btn-primary anadirElemento boton1">Trucada</a>
            </div>


            <div class="divExpediente cardInicio">
                <a href="{{ url('/expedientes') }}" class="btn btn-primary anadirElemento boton2">Expedients</a>
            </div>

        </div>
        <div class="secundarioInicio">
            <div class="divUsuarios cardInicio" style="width: 91%; margin-top: 30px">
                <a href="{{ url('/estadisticas') }}" class="btn btn-primary anadirElemento boton4" style="background-position: center;">Estadísticas</a>
            </div>
        </div>
    @elseif ($codigoUsuario == 3)
        <div class="principal">

            <div class="divLlamada cardInicio" style="width: 32%">
                <a href="{{ url('/llamada') }}" class="btn btn-primary anadirElemento boton1">Trucada</a>
            </div>


            <div class="divExpediente cardInicio" style="width: 32%">
                <a href="{{ url('/expedientes') }}" class="btn btn-primary anadirElemento boton2">Expedients</a>
            </div>

            <div class="divUsuarios cardInicio" style="width: 32%;">
                <a href="{{ url('/usuarios') }}" class="btn btn-primary anadirElemento boton3" style="background-position: center;">Administració usuaris</a>
            </div>

        </div>
        <div class="secundarioInicio">
            <div class="divUsuarios cardInicio" style="width: 91%; margin-top: 30px">
                <a href="{{ url('/estadisticas') }}" class="btn btn-primary anadirElemento boton4" style="background-position: center;">Estadísticas</a>
            </div>
        </div>
    @else
        <div class="principal" style="justify-content: center">

            <div class="divLlamada cardInicio" style="width: 60%">
                <a href="{{ url('/llamada') }}" class="btn btn-primary anadirElemento boton1">Trucada</a>
            </div>

        </div>
    @endif
{{--     <img src="../public/Imagenes/Logo1Vector1.png" alt="" width="180" height="120" class="d-inline-block align-text-top logoBotonInicio">
 --}}@endsection
