@extends('plantillas.principal')

@section('titulo')
Gestion de expedientes
@endsection

@section('tituloNav')
Expedients
@endsection

@section('menu1')
<a class="nav-link" aria-current="page" href="{{ url('/') }}"> Inici</a>
@endsection

@section('menu2')
<a class="nav-link" aria-current="page" href="{{ url('/llamada') }}">Trucada</a>
@endsection

@section('menu3')
<a class="nav-link" aria-current="page" href="{{ url('/expedientes') }}">Expedients</a>
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



<div class="principalAdmin">
    <div class="row mb-2 mt-2" style="display: flex; justify-content: center; width: 90%">
        <div class="row">

                <form action="{{ action([App\Http\Controllers\ExpedientController::class, 'index']) }}">
                    <div class="card cardFiltrosAdmin">
                        <div class="btn-group divFiltrosAdmin" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group butonGroupFiltrosAdmin" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary primerBotonAdmin">Mostrar Todo</button>
                                <button type="button" class="btn btn-primary">Operador</button>
                                <button type="button" class="btn btn-primary">Supervisores</button>
                                <button type="button" class="btn btn-primary ultimoBotonAdmin">Administradores</button>
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>

    <div class="contenedorUsuarios">

        <div class="card">
            <div class="card-body bodyCardListadoUsuarios">
              <div class="divAdminElementos">
                <p>1</p>
              </div>
              <div class="divAdminElementos">
                <p>CabraAbracadabra</p>
              </div>
              <div class="divAdminElementos">
                <p>Oscar</p>
              </div>
              <div  class="divAdminElementos">
                <p>Castella</p>
              </div>
              <div class="divAdminElementos">
                <p>ADMIN</p>
              </div>
              <div class="divAdminElementos">
                <p>Editar</p>
              </div>
              <div class="divAdminElementos">
                <p>Borrar</p>
              </div>
            </div>
        </div>

    </div>
</div>

@endsection
