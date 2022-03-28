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
    <div class="row mb-2 mt-2" style="display: flex; justify-content: center; width: 100%">
        <div class="row">

                <form action="{{ action([App\Http\Controllers\UsuariController::class, 'index']) }}">
                    <div class="card cardFiltrosAdmin">
                        <div class="btn-group divFiltrosAdmin" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group butonGroupFiltrosAdmin" role="group" aria-label="Basic example">

                                <div class="btn-group" style="margin-right: 5px" role="group" aria-label="Basic example">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary primerBotonAdmin"><i class="bi bi-search"></i></button>
                                        <input type="text" class="form-control " placeholder="Buscar" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                    </div>
                                </div>

                                @if ($todoTrue == true)
                                    <button type="submit" class="btn btn-primary botonMostrarTodoAdmin2" id="mostrarTodo" value="true" name="mostrarTodo" style="border-radius: 15px 15px 0px 0px">Mostrar Todo</button>
                                @else
                                    <button type="submit" class="btn btn-primary botonMostrarTodoAdmin" id="mostrarTodo" value="true" name="mostrarTodo" style="border-radius: 15px 15px 0px 0px">Mostrar Todo</button>
                                @endif


                                @if ($operadoresTrue == true)
                                    <button type="submit" class="btn btn-primary botonMostrarOperadoresAdmin2" id="mostrarOperadores" value="true" name="mostrarOperadores" style="border-radius: 15px 15px 0px 0px">Operador</button>
                                @else
                                    <button type="submit" class="btn btn-primary botonMostrarOperadoresAdmin" id="mostrarOperadores" value="true" name="mostrarOperadores" style="border-radius: 15px 15px 0px 0px">Operador</button>
                                @endif


                                @if ($supervisoresTrue == true)
                                    <button type="submit" class="btn btn-primary botonMostrarSupervisoresAdmin2" id="mostrarSupervisores" value="true" name="mostrarSupervisores" style="border-radius: 15px 15px 0px 0px">Supervisores</button>
                                @else
                                    <button type="submit" class="btn btn-primary botonMostrarSupervisoresAdmin" id="mostrarSupervisores" value="true" name="mostrarSupervisores" style="border-radius: 15px 15px 0px 0px">Supervisores</button>
                                @endif


                                @if ($adminTrue == true)
                                    <button type="submit" class="btn btn-primary botonMostrarAdministradoresAdmin2 ultimoBotonAdmin" id="mostrarAdmin" value="true" name="mostrarAdmin" style="border-radius: 15px 15px 0px 0px">Administradores</button>
                                @else
                                    <button type="submit" class="btn btn-primary botonMostrarAdministradoresAdmin ultimoBotonAdmin" id="mostrarAdmin" value="true" name="mostrarAdmin" style="border-radius: 15px 15px 0px 0px">Administradores</button>
                                @endif

                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>

    <div class="contenedorUsuarios">

        @foreach ($usuarios as $usuario)


        <a href="">
            <div class="card cardInformacionUsuarioAdmin" style="margin-top: 5px; border-radius: 18px" >
                <div class="card-body bodyCardListadoUsuarios">
                    <div class="informacionUsuario">
                            <div class="divAdminElementosInfo" style="width: 60px">
                                ID: {{ $usuario->id }}
                            </div>
                            <div class="divAdminElementosInfo" style="width: 200px">
                                Codi: {{ $usuario->codi }}
                            </div>
                            <div class="divAdminElementosInfo" style="width: 150px">
                                Nom: {{ $usuario->nom }}
                            </div>
                            <div  class="divAdminElementosInfo" style="width: 300px">
                                Cognoms: {{ $usuario->cognoms }}
                            </div>
                            <div class="divAdminElementosInfo" style="width: 135px">
                                @if ($usuario->perfils_id == 1)
                                    OPERADOR
                                @elseif ($usuario->perfils_id == 2)
                                    SUPERVISOR
                                @else
                                    ADMINISTRADOR
                                @endif
                            </div>
                    </div>
                    <div class="editarBorrarUsuario">
                        <div class="divAdminElementos">
                            <button type="submit" class="btn btn-warning" style="width: 100px; border-radius: 5px 15px 15px 5px" value="{{ $usuario->id }}" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="fas fa-edit"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        @endforeach


    </div>
    <form action="">
        <div class="card botonAnadirUsuario">
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i> Añadir Usuario</button>
            </div>
        </div>
    </form>

</div>


<form action="{{ action([App\Http\Controllers\UsuariController::class, 'store']) }}" method="POST">
    @csrf
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Crear usuari</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Nom" id="nomUsuari" name="nomUsuari" value="{{ old('nomUsuari') }}" required>
                    <label for="floatingInput">Nom d'usuari</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" value="{{ old('nom') }}" required>
                    <label for="floatingInput">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Cognoms" id="cognoms" name="cognoms" value="{{ old('cognoms') }}" required>
                    <label for="floatingInput">Cognoms</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="{{ old('password') }}" required>
                    <label for="floatingPassword">Contrasenya</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" aria-label="Floating label select example" id="tipusUsuari" name="tipusUsuari" value="{{ old('tipusUsuari') }}" required>
                    <option selected value="1">Operador</option>
                    <option value="2">Supervisor</option>
                    <option value="3">Administrador</option>
                    </select>
                    <label for="floatingSelect">Tipus d'usuari</label>
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </div>
</div>
</form>

<form action="{{ action([App\Http\Controllers\UsuariController::class, 'index']) }}" method="POST">
    @csrf
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Crear usuari</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Nom" id="nomUsuari" name="nomUsuari" value="{{ old('nomUsuari') }}" required>
                    <label for="floatingInput">Nom d'usuari</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" value="{{ old('nom') }}" required>
                    <label for="floatingInput">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Cognoms" id="cognoms" name="cognoms" value="{{ old('cognoms') }}" required>
                    <label for="floatingInput">Cognoms</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="{{ old('password') }}" required>
                    <label for="floatingPassword">Contrasenya</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" aria-label="Floating label select example" id="tipusUsuari" name="tipusUsuari" value="{{ old('tipusUsuari') }}" required>
                    <option selected value="1">Operador</option>
                    <option value="2">Supervisor</option>
                    <option value="3">Administrador</option>
                    </select>
                    <label for="floatingSelect">Tipus d'usuari</label>
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>
    </div>
</div>
</form>

@endsection
