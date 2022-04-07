<?php
$codigoUsuario = Auth::user()->perfils_id;
?>
@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Llamada
@endsection

@section('menu1')
    <a class="nav-link" aria-current="page" href="{{ url('/') }}"> Inici</a>
@endsection

@section('menu2')
    @if ($codigoUsuario == 3 || $codigoUsuario == 2)
        <a class="nav-link" aria-current="page" href="{{ url('/expedientes') }}">Trucada</a>
    @else

    @endif
@endsection

@section('menu3')
    @if ($codigoUsuario == 3 || $codigoUsuario == 2)
        <a class="nav-link" aria-current="page" href="{{ url('/estadisticas') }}">Estadístiques</a>
    @else

    @endif
@endsection

@section('menu4')
    @if ($codigoUsuario == 3)
        <a class="nav-link" aria-current="page" href="{{ url('/usuarios') }}">Administració</a>
    @else

    @endif
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

<trucada-component></trucada-component>


@endsection
