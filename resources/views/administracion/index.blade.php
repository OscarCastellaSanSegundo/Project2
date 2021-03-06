@extends('plantillas.principal')

@section('titulo')
Administració d'usuaris
@endsection

@section('tituloNav')
Administració
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

@section('menu4')
    <a class="nav-link" aria-current="page" href="{{ url('/estadisticas') }}">Estadístiques</a>
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
@php
    $resultado = null;
    $contadorCartes = null;
    $tiempoMaxLlamada = null;
    $tiempoMinLlamada = null;
    $tiempo = null;
    $totalTiempo = null;
    $policiaEnviada = null;
    $bomberosEnviados = null;
@endphp

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
                                        <input type="text" name="buscarUsuarios" id="buscarUsuarios" class="form-control " placeholder="Buscar" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                    </div>
                                </div>

                                @if ($todoTrue == true)
                                    <button type="submit" class="btn btn-primary botonMostrarTodoAdmin2" id="mostrarTodo" value="true" name="mostrarTodo" style="border-radius: 15px 15px 0px 0px">Mostrar Todo</button>
                                @else
                                    <button type="submit" class="btn btn-primary botonMostrarTodoAdmin" id="mostrarTodo" value="true" name="mostrarTodo" style="border-radius: 15px 15px 0px 0px">Mostrar Todo</button>
                                @endif


                                @if ($operadoresTrue == true)
                                    <button type="submit" class="btn btn-primary botonMostrarOperadoresAdmin2" id="mostrarOperadores" value="true" name="mostrarOperadores" style="border-radius: 15px 15px 0px 0px">Operadores</button>
                                @else
                                    <button type="submit" class="btn btn-primary botonMostrarOperadoresAdmin" id="mostrarOperadores" value="true" name="mostrarOperadores" style="border-radius: 15px 15px 0px 0px">Operadores</button>
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

        <div style="margin-left: 15px; margin-top: 5px" class="accordion accordion-flush" id="accordionFlushExample{{ $usuario->id }}">
            <div style="width: 99%; background-color: transparent;" class="accordion-item cardInformacionUsuarioAdmin">
                <h2 class="accordion-header" style="display: flex" id="flush-headingOne">
                    <button style="border-radius: 15px; margin-right: 5px" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $usuario->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                        <div class="informacionUsuario">
                            <div class="divAdminElementosInfo" style="width: 60px">
                                ID: {{ $usuario->id }}
                            </div>
                            <div class="divAdminElementosInfo" style="width: 200px">
                                Usuari: {{ $usuario->codi }}
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
                            <button type="submit" class="btn btn-warning" style="width: 100px; border-radius: 15px 15px 15px 15px" data-bs-toggle="collapse" data-bs-target="#flush-collapseEdit{{ $usuario->id }}"><i class="fas fa-edit"></i> Editar</button>
                        </div>
                    </button>
                </h2>
                <div id="flush-collapseOne{{ $usuario->id }}" style="background-color: white; width: 99%; border-radius: 15px" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample{{ $usuario->id }}">
                    <div class="accordion-body graficoEstadisticasUser" >

                        <div class="col-4" style="margin-right: 10px">
                            @foreach ($usuario->cartesTrucades as $carta)
                                <?php
                                    $resultado = $resultado + $carta->temps_trucada;
                                    $tiempo = $carta->temps_trucada;
                                    $totalTiempo = $totalTiempo + $tiempo;
                                ?>

                                @if ($tiempoMaxLlamada < $tiempo)
                                    <?php $tiempoMaxLlamada = $tiempo; ?>
                                @endif

                                @if ($tiempoMinLlamada > $tiempo || $tiempoMinLlamada == null)
                                    <?php $tiempoMinLlamada = $tiempo; ?>
                                @endif

                            @endforeach
                                <?php $contadorCartes = $usuario->cartesTrucades->count(); ?>

                                @if ($contadorCartes == 0)
                                @else
                                    <?php $resultado = $resultado / $contadorCartes; ?>
                                @endif

                            <table class="table table-hover">
                                <tbody>
                                    <tr style="background-color:rgba(220, 221, 196, 0.589); box-shadow: 0px 0px 3px 0px rgb(0 0 0 / 75%);">
                                        <td>Nº trucades agafades:</td>
                                        <td>{{ $usuario->cartesTrucades->count() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Temps mitg per trucada:</td>
                                        <td>
                                            @if ($resultado == null)
                                                0 s
                                            @else
                                                {{ $resultado }} s
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Temps maxim d'una trucada:</td>
                                        <td>
                                            @if ($tiempoMaxLlamada == null)
                                                0 s
                                            @else
                                                {{ $tiempoMaxLlamada }} s
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Temps minim d'una trucada:</td>
                                        <td>
                                            @if ($tiempoMinLlamada == null)
                                                0 s
                                            @else
                                                {{ $tiempoMinLlamada }} s
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total de temps al telefon:</td>
                                        <td>
                                            @if ($totalTiempo == null)
                                                0 s
                                            @else
                                                {{ $totalTiempo }} s
                                            @endif
                                        </td>
                                    </tr>

                            {{-- Nº trucades agafades: {{ $usuario->cartesTrucades->count() }}<br>
                            Temps mitg per trucada: {{ $resultado }}s<br>
                            Temps maxim d'una trucada: {{ $tiempoMaxLlamada }}s<br>
                            Temps minim d'una trucada: {{ $tiempoMinLlamada }}s<br>
                            Total de temps al telefon: {{ $totalTiempo }}s<br><br> --}}

                            @foreach ($usuario->cartesTrucades as $carta)

                                @foreach ($carta->cartesTrucadesHasAgencia as $cartaHasAgencia )
                                <?php $resultado = $cartaHasAgencia->count(); ?>
                                    @if ( ($cartaHasAgencia->agencia->id > 0 && $cartaHasAgencia->agencia->id <= 117) ||
                                    ($cartaHasAgencia->agencia->id >= 264 && $cartaHasAgencia->agencia->id <= 470) )
                                        <?php $policiaEnviada++ ?>
                                    @elseif ($cartaHasAgencia->agencia->id >= 118 && $cartaHasAgencia->agencia->id <= 263)
                                        <?php $bomberosEnviados++ ?>
                                    @endif

                                @endforeach
                            @endforeach
                                    <tr style="background-color:rgba(220, 221, 196, 0.589); box-shadow: 0px 0px 3px 0px rgb(0 0 0 / 75%);">
                                        <td>Total de trucades amb recomanació:</td>
                                        <td>
                                            @if ($resultado == null)
                                                0
                                            @else
                                                {{ $resultado }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Trucades amb ambulancias sol·licitades:</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Trucades amb policies sol·licitats:</td>
                                        <td>
                                            @if ($policiaEnviada == null)
                                                0
                                            @else
                                                {{ $policiaEnviada }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Trucades amb bombers sol·licitats:</td>
                                        <td>
                                            @if ($bomberosEnviados == null)
                                                0
                                            @else
                                                {{ $bomberosEnviados }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr style="background-color:rgba(220, 221, 196, 0.589); box-shadow: 0px 0px 3px 0px rgb(0 0 0 / 75%);">
                                        <td>Tutorial vist:</td>
                                        <td></td>
                                    </tr>
                                    <tr style="background-color:rgba(220, 221, 196, 0.589); box-shadow: 0px 0px 3px 0px rgb(0 0 0 / 75%);">
                                        <td>Data de creació d'usuari:</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Total de trucades amb recomanació: {{ $resultado }}<br>
                            Trucades amb ambulancias sol·licitades: <br>
                            Trucades amb policias sol·licitats: {{ $policiaEnviada }}<br>
                            Trucades amb bombers sol·licitats: {{ $bomberosEnviados }}<br><br>

                            Tutorial vist: <br>
                            Data de creació d'usuari: <br> --}}
                            <?php
                                $resultado = null;
                                $tiempoMaxLlamada = null;
                                $tiempoMinLlamada = null;
                                $tiempo = null;
                                $totalTiempo = null;
                                $bomberosEnviados = null;
                                $policiaEnviada = null;
                            ?>
                        </div>
                        <div class="col-lg-8" style="display: flex; align-items:flex-end; margin-right: 32px;">
                            <div class="col-7">
                                <canvas id="primerGrafico{{$usuario->id}}"></canvas>
                            </div>
                            <div class="col-5">
                                <canvas id="segundoGrafico{{$usuario->id}}"></canvas>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="flush-collapseEdit{{ $usuario->id }}" style="background-color: white; width: 99%; border-radius: 15px" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample{{ $usuario->id }}">
                    <div class="accordion-body" >
                        <form class="row g-3" action="{{ action([App\Http\Controllers\UsuariController::class, 'edit'], ['usuario' => $usuario->id]) }}" method="GET">
                            @csrf
                            <div class="col-md-1">
                                <label for="validationDefault02" class="form-label">ID</label>
                                <input type="text" class="form-control" id="idUsuari" name="idUsuari" value="{{ $usuario->id }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault02" class="form-label">Usuari</label>
                                <input type="text" class="form-control" id="usuari" name="usuari" value="{{ $usuario->codi }}" required>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefaultUsername" class="form-label">Nom</label>
                                <div class="input-group">
                                    {{-- <span class="input-group-text" id="inputGroupPrepend2">@</span> --}}
                                    <input type="text" class="form-control" id="nomUsuari" name="nomUsuari" value="{{ $usuario->nom }}" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationDefaultUsername" class="form-label">Cognoms</label>
                                <div class="input-group">
                                {{-- <span class="input-group-text" id="inputGroupPrepend2">@</span> --}}
                                    <input type="text" class="form-control" id="cognomsUsuari" name="cognomsUsuari" value="{{ $usuario->cognoms }}" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="validationDefault04" class="form-label">Tipus d'usuari</label>
                                <select class="form-select" id="tipusUsuari" name="tipusUsuari" required>
                                    @if ($usuario->perfils_id == 1)
                                        <option selected value="1" >Operador</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Administrador</option>
                                    @elseif ($usuario->perfils_id == 2)
                                        <option value="1">Operador</option>
                                        <option selected value="2">Supervisor</option>
                                        <option value="3">Administrador</option>
                                    @elseif ($usuario->perfils_id == 3)
                                        <option value="1">Operador</option>
                                        <option selected value="2">Supervisor</option>
                                        <option value="3">Administrador</option>
                                    @endif

                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="validationDefaultUsername" class="form-label">Nova contrassenya (Opcional)</label>
                                <div class="input-group">
                                {{-- <span class="input-group-text" id="inputGroupPrepend2">@</span> --}}
                                    <input type="password" class="form-control" id="contraUsuari" name="contraUsuari" value="" aria-describedby="inputGroupPrepend2">
                                </div>
                            </div>
                            <div class="col-2" style="display: flex; align-items: end">
                                <label for="validationDefault04" class="form-label"></label>
                                <button class="btn btn-warning" type="submit"><i class="fas fa-save"></i> Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
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

{{-- <div class="col-7">
    <canvas id="myChart2{{$usuario->id}}"></canvas>
</div>
<div class="col-5">
    <canvas id="myChart{{$usuario->id}}"></canvas>
</div> --}}
<?php
    $contador = 0;
    $numeroUsuarios = count($usuarios)
?>

@foreach ($usuarios as $usuario)
<?php
        $grafico1 = null;
        $grafico1 =  "\"segundoGrafico";
        $grafico1 .= $usuario->id;
        $grafico1 .= "\"";

        $grafico2 = null;
        $grafico2 =  "\"primerGrafico";
        $grafico2 .= $usuario->id;
        $grafico2 .= "\"";
?>
<script>

    for (let i = 1; i <= <?php echo $numeroUsuarios ?>; i++) { // si se quita el for no tira


        const data = {
            labels: [
                'Barcelona',
                'Girona',
                'Lleida',
                'Tarragona',
                'Fora Catalunya'
            ],
            datasets: [{
                label: 'Numero de trucades',
                data: [<?php echo $datosUsuariosProvincias[$contador][0] ?>,<?php echo $datosUsuariosProvincias[$contador][1] ?> , <?php echo $datosUsuariosProvincias[$contador][2] ?>,
                <?php echo $datosUsuariosProvincias[$contador][3] ?>, <?php echo $datosUsuariosProvincias[$contador][4] ?>],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(20, 50, 235)',
                'rgb(255, 205, 86)',
                'rgb(20, 30, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
        };

        const myChart = new Chart(
            document.getElementById(<?php echo $grafico1 ?>),
            config
        );




        const data2 = {
        labels: [
                'Accidents',
                'Assistència sanitària',
                'Incendi',
                'Fuita (Aigua, gas, altres)',
                'Altres incidències',
                'Seguretat',
                'Trànsit',
                'Civisme',
                'Medi ambient',
                'Meteorologia'
            ],
        datasets: [{
            label: 'Numero de trucades',
            data: [<?php echo $datosUsuariosIncidentes[$contador][0] ?>, <?php echo $datosUsuariosIncidentes[$contador][1] ?>, <?php echo $datosUsuariosIncidentes[$contador][2] ?>,
            <?php echo $datosUsuariosIncidentes[$contador][3] ?>, <?php echo $datosUsuariosIncidentes[$contador][4] ?>, <?php echo $datosUsuariosIncidentes[$contador][5] ?>,
            <?php echo $datosUsuariosIncidentes[$contador][6] ?>, <?php echo $datosUsuariosIncidentes[$contador][7] ?>, <?php echo $datosUsuariosIncidentes[$contador][8] ?>,
            <?php echo $datosUsuariosIncidentes[$contador][9] ?>],
            backgroundColor: [
            'rgba(92, 67, 14, 0.2)',
            'rgba(0, 0, 255, 0.2)',
            'rgba(255, 0, 0, 0.2)',
            'rgba(56, 113, 187, 0.2)', //
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
            'rgb(92, 67, 14, 0.8)',
            'rgb(0, 0, 255, 0.8)',
            'rgb(255, 0, 0, 0.8)',
            'rgb(56, 113, 187, 0.8)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        }]
        };

        const config2 = {
            type: 'bar',
            data: data2,
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            },
        };

        const myChart2 = new Chart(
        document.getElementById(<?php echo  $grafico2 ?>),
        config2
        );
    }



</script>

<?php $contador++ ?>

@endforeach


@endsection
