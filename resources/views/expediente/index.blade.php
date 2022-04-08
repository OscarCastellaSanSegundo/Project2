<?php
$codigoUsuario = Auth::user()->perfils_id;
?>
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
    <a class="nav-link" aria-current="page" href="{{ url('/estadisticas') }}">Estadístiques</a>
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


    <div class="row mb-2 mt-2" style="display: flex; justify-content: center">
        <div class="row barraNav">
            <div class="col-12">

                <form action="{{ action([App\Http\Controllers\ExpedientController::class, 'index']) }}">
                    <div class="card">
                        <div class="col-12 columna" >
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                <div class="btn-group" role="group">
                                    <button id="mostrarTot" type="submit" value="mostrarTot" name="mostrarTot" class="btn btn-primary" >
                                    Mostrar Tot
                                    </button>
                                </div>

                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop6" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tipus de localització
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop6">
                                        <li><button class="dropdown-item" type="submit" id="carrer" name="carrer" value="true">Carrer</button></li>
                                        <li><button class="dropdown-item" type="submit" id="entitatPoblacio" name="entitatPoblacio" value="true">Entitat Població</button></li>
                                        <li><button class="dropdown-item" type="submit" id="puntSingular" name="puntSingular" value="true">Punt singular</button></li>
                                        <li><button class="dropdown-item" type="submit" id="carretera" name="carretera" value="true">Carretera</button></li>
                                        <li><button class="dropdown-item" type="submit" id="provincia" name="provincia" value="true">Provincia</button></li>
                                    </ul>
                                </div>

                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop5" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tipus d'incident
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop5">
                                        <li><button class="dropdown-item" type="submit" id="accident" name="accident" value="true">Accident</button></li>
                                        <li><button class="dropdown-item" type="submit" id="assistenciaSanitaria" name="assistenciaSanitaria" value="true">Assistència sanitària</button></li>
                                        <li><button class="dropdown-item" type="submit" id="incendi" name="incendi" value="true">Incendi</button></li>
                                        <li><button class="dropdown-item" type="submit" id="fuita" name="fuita" value="true">Fuita </button></li>
                                        <li><button class="dropdown-item" type="submit" id="altresIncidencies" name="altresIncidencies" value="true">Altres incidències</button></li>
                                        <li><button class="dropdown-item" type="submit" id="seguretat" name="seguretat" value="true">Seguretat</button></li>
                                        <li><button class="dropdown-item" type="submit" id="transit" name="transit" value="true">Trànsit</button></li>
                                        <li><button class="dropdown-item" type="submit" id="civisme" name="civisme" value="true">Civisme</button></li>
                                        <li><button class="dropdown-item" type="submit" id="mediAmbient" name="mediAmbient" value="true">Medi ambient</button></li>
                                        <li><button class="dropdown-item" type="submit" id="meteorologia" name="meteorologia" value="true">Meteorologia</button></li>
                                    </ul>
                                </div>

                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop4" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Provincia
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop4">
                                        <li><button class="dropdown-item" type="submit" id="barcelona" name="barcelona" value="true">Barcelona</button></li>
                                        <li><button class="dropdown-item" type="submit" id="girona" name="girona" value="true">Girona</button></li>
                                        <li><button class="dropdown-item" type="submit" id="tarragona" name="tarragona" value="true">Tarragona</button></li>
                                        <li><button class="dropdown-item" type="submit" id="lleida" name="lleida" value="true">Lleida</button></li>
                                        <li><button class="dropdown-item" type="submit" id="foraCatalunya" name="foraCatalunya" value="true">Fora Catalunya</button></li>
                                    </ul>
                                </div>

                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Agències enviades
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                        <li><button class="dropdown-item" type="submit" id="policia" name="policia" value="true">Policia</button></li>
                                        <li><button class="dropdown-item" type="submit" id="ambulancia" name="ambulancia" value="true">Ambulància</button></li>
                                        <li><button class="dropdown-item" type="submit" id="bombers" name="bombers" value="true">Bombers</button></li>
                                    </ul>
                                </div>

                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop2" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Estat expedient
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                        <li><button class="dropdown-item" type="submit" id="enProces" name="enProces" value="true">En procès</button></li>
                                        <li><button class="dropdown-item" type="submit" id="solicitat" name="solicitat" value="true">Sol·licitat</button></li>
                                        <li><button class="dropdown-item" type="submit" id="acceptat" name="acceptat" value="true">Acceptat</button></li>
                                        <li><button class="dropdown-item" type="submit" id="tancat" name="tancat" value="true">Tancat</button></li>
                                        <li><button class="dropdown-item" type="submit" id="immobilitzat" name="immobilitzat" value="true">Immobilitzat</button></li>
                                    </ul>
                                </div>

                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Data
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><button class="dropdown-item" type="submit" id="creacioMesRecents" name="creacioMesRecents" value="true">Data creació: més recents</button></li>
                                        <li><button class="dropdown-item" type="submit" id="creacioMesAntics" name="creacioMesAntics" value="true">Data creació: més antics</button></li>
                                        <li><button class="dropdown-item" type="submit" id="edicioMesRecents" name="edicioMesRecents" value="true">Data ultima edició: més recents</button></li>
                                        <li><button class="dropdown-item" type="submit" id="edicioMesAntics" name="edicioMesAntics" value="true">Data ultima edició: més antics</button></li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                    </div>
                </form>

            </div>
          </div>
    </div>
<div class="principalExpedientes">
    <?php
        $ambulancia = false;
        $policia = false;
        $bomberos = false;
    ?>


@foreach ($expedients as $expedient )

    @foreach ($expedient->cartesTrucada as $cartaTrucada )

        @foreach ($cartaTrucada->cartesTrucadesHasAgencia as $cartaHasAgencia )

            @if ( ($cartaHasAgencia->agencia->id > 0 && $cartaHasAgencia->agencia->id <= 117) ||
            ($cartaHasAgencia->agencia->id >= 264 && $cartaHasAgencia->agencia->id <= 470) )
                <?php $policia = true ?>
            @elseif ($cartaHasAgencia->agencia->id >= 118 && $cartaHasAgencia->agencia->id <= 263)
                <?php $bomberos = true ?>
            @endif

        @endforeach

    @endforeach

    <div class="card" >
        <div class="card-header cardHeader">
            &nbsp;&nbsp;Nº expedient: {{ $expedient->id }}&nbsp;&nbsp;&nbsp;&nbsp;Nº trucades: {{ $expedient->cartesTrucada->count() }}
        </div>
        <div class="card-body cardBody" >
            <div class="cuerpoExpediente">
                <div class="zonaMapaCard">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187.08288259846324!2d2.1730808994327813!3d41.388723494740994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f05d80e233%3A0x999036411babe70f!2sCentro%20de%20Estudios%20Polit%C3%A9cnicos%3A%20Urquinaona!5e0!3m2!1ses!2ses!4v1645014935619!5m2!1ses!2ses" class="imagenMapa" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="notaComunaCard">
                    @foreach ( $expedient->cartesTrucada as $cartaTrucada )
                    <div class="notaComunaExpedientScroll">
                        <p style="margin: 4px;">{{ $cartaTrucada->nota_comuna }}</p>
                    </div>
                    @endforeach

                    {{-- <textarea class="form-control" placeholder="{{ $cartaTrucada->nota_comuna }}" id="floatingTextarea2" rows="auto" disabled></textarea> --}}
                </div>
            </div>
            <div class="cuerpo2Expediente">
                <div class="localizacion">
                        <div class="textoLocalizacion">{{ $expedient->cartesTrucada[0]->provincia->nom }}</div>
                </div>

                <div class="agenciasDespachadas">

                    {{-- @foreach ($expedient->cartesTrucada as $cartaTrucada )

                        @foreach ($cartaTrucada->cartesTrucadesHasAgencia as $cartaHasAgencia )

                            @if ( ( ($cartaHasAgencia->agencia->id > 0 && $cartaHasAgencia->agencia->id <= 117) ||
                            ($cartaHasAgencia->agencia->id >= 264 && $cartaHasAgencia->agencia->id <= 470) )  &&
                            ($cartaHasAgencia->agencia->id >= 118 && $cartaHasAgencia->agencia->id <= 263))

                                <div class="agencia1">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/cochePolicia.png" class="imagenAgencia">
                                    </div>
                                </div>
                                <div class="agencia2">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/camionBomberos.png" class="imagenAgencia" style="">
                                    </div>
                                </div>
                                <div class="agencia3" style="opacity: 40%; filter: grayscale(100%);">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgencia">
                                    </div>
                                </div>

                            @elseif ($cartaHasAgencia->agencia->id >= 118 && $cartaHasAgencia->agencia->id <= 263)

                                <div class="agencia1" style="opacity: 40%; filter: grayscale(100%);">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/cochePolicia.png" class="imagenAgencia">
                                    </div>
                                </div>
                                <div class="agencia2">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/camionBomberos.png" class="imagenAgencia" style="">
                                    </div>
                                </div>
                                <div class="agencia3" style="opacity: 40%; filter: grayscale(100%);">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgencia">
                                    </div>
                                </div>

                            @elseif (($cartaHasAgencia->agencia->id > 0 && $cartaHasAgencia->agencia->id <= 117) ||
                            ($cartaHasAgencia->agencia->id >= 264 && $cartaHasAgencia->agencia->id <= 470))

                                <div class="agencia1">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/cochePolicia.png" class="imagenAgencia">
                                    </div>
                                </div>
                                <div class="agencia2" style="opacity: 40%; filter: grayscale(100%);">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/camionBomberos.png" class="imagenAgencia">
                                    </div>
                                </div>
                                <div class="agencia3" style="opacity: 40%; filter: grayscale(100%);">
                                    <div class="fotoAgencia">
                                        <img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgencia">
                                    </div>
                                </div>
                            @endif

                        @endforeach

                    @endforeach --}}

                    @if ($policia == true)
                        <div class="agencia1">
                            <div class="fotoAgencia">
                                <img src="../public/imagenes/cochePolicia.png" class="imagenAgencia">
                            </div>
                        </div>
                    @else
                        <div class="agencia1" style="opacity: 40%; filter: grayscale(100%);">
                            <div class="fotoAgencia">
                                <img src="../public/imagenes/cochePolicia.png" class="imagenAgencia">
                            </div>
                        </div>
                    @endif

                    @if ($bomberos == true)
                        <div class="agencia2">
                            <div class="fotoAgencia">
                                <img src="../public/imagenes/camionBomberos.png" class="imagenAgencia" style="">
                            </div>
                        </div>
                    @else
                        <div class="agencia2" style="opacity: 40%; filter: grayscale(100%);">
                            <div class="fotoAgencia">
                                <img src="../public/imagenes/camionBomberos.png" class="imagenAgencia">
                            </div>
                        </div>
                    @endif

                    @if ($ambulancia == true)
                        <div class="agencia3">
                            <div class="fotoAgencia">
                                <img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgencia">
                            </div>
                        </div>
                    @else
                        <div class="agencia3" style="opacity: 40%; filter: grayscale(100%);">
                            <div class="fotoAgencia">
                                <img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgencia">
                            </div>
                        </div>
                    @endif


                </div>
            </div>
        </div>
        <div class="card-footer cardFooter verEditarExpedienteFooter">
            <div class="verEditarExpediente">
                <div>
                    <div>
                        &nbsp;Creació: {{ $expedient->data_creacio }}&nbsp;&nbsp;&nbsp;&nbsp; Ultima&nbsp;edició:&nbsp;{{ $expedient->data_ultima_modificacio }}<br>
                    </div>
                    <div style="display: flex;">
                        <div>
                            &nbsp;Estat: {{ $expedient->estatExpedient->estat }}
                        </div>
                        @if ($expedient->estatExpedient->id  == 1)
                            <div style="width: 18px; height: 18px; background-color: green; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                        @elseif ($expedient->estatExpedient->id  == 2)
                            <div style="width: 18px; height: 18px; background-color: yellow; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                        @elseif ($expedient->estatExpedient->id  == 3)
                            <div style="width: 18px; height: 18px; background-color: #665D1D; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                        @elseif ($expedient->estatExpedient->id  == 4)
                            <div style="width: 18px; height: 18px; background-color: blue; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                        @elseif ($expedient->estatExpedient->id  == 5)
                            <div style="width: 18px; height: 18px; background-color: purple; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                        @else
                            <div style="width: 18px; height: 18px; background-color: rgb(0, 0, 0); margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                        @endif
                    </div>
                </div>
                <div>
                    <a class="btn btn-primary " data-bs-toggle="modal" href="#abrirExpediente{{ $expedient->id }}" role="button">Veure/Modificar</a>
                </div>

            </div>
        </div>
    </div>










<div class="modal fade bordeRedondo zonaExpedienteAbierto3" id="abrirExpediente{{ $expedient->id }}" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="abrirExpediente{{ $expedient->id }}Label" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered zonaExpedienteAbierto2 ">
        <div class="modal-content expedienteModal zonaExpedienteAbierto">
            <div class="modal-header tituloExpedienteModal">
                <h5 class="modal-title Nexpediente" id="abrirExpedienteLabel">Nº expedient: {{ $expedient->id }}</h5>
                <h5 class="modal-title Ntrucades">Nº trucades: {{ $expedient->cartesTrucada->count() }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modalBodyExpediente">
                    <div class="modalExpedienteZonaMapa">
                        <div class="modalExpedienteMapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" class="modalMapaExpediente" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="modalZonaLocalizacionIconos">
                            <div class="modalLocalizacion">
                                    <h5>{{ $expedient->cartesTrucada[0]->provincia->nom }}</h5>
                            </div>
                            <div class="modalIconos">
                                <div class="modalAgenciasDespachadas">
                                    @if ($policia == true)
                                        <div class="agencia1">
                                            <div class="fotoAgencia">
                                                <img src="../public/imagenes/cochePolicia.png" class="imagenAgencia">
                                            </div>
                                        </div>
                                    @else
                                        <div class="agencia1" style="opacity: 40%; filter: grayscale(100%);">
                                            <div class="fotoAgencia">
                                                <img src="../public/imagenes/cochePolicia.png" class="imagenAgencia">
                                            </div>
                                        </div>
                                    @endif

                                    @if ($bomberos == true)
                                        <div class="agencia2">
                                            <div class="fotoAgencia">
                                                <img src="../public/imagenes/camionBomberos.png" class="imagenAgencia" style="">
                                            </div>
                                        </div>
                                    @else
                                        <div class="agencia2" style="opacity: 40%; filter: grayscale(100%);">
                                            <div class="fotoAgencia">
                                                <img src="../public/imagenes/camionBomberos.png" class="imagenAgencia">
                                            </div>
                                        </div>
                                    @endif

                                    @if ($ambulancia == true)
                                        <div class="agencia3">
                                            <div class="fotoAgencia">
                                                <img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgencia">
                                            </div>
                                        </div>
                                    @else
                                        <div class="agencia3" style="opacity: 40%; filter: grayscale(100%);">
                                            <div class="fotoAgencia">
                                                <img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgencia">
                                            </div>
                                        </div>
                                    @endif

                                    <?php $policia = null ?>
                                    <?php $bomberos = null ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modalExpedienteZonaCartas">

                        @foreach ($expedient->cartesTrucada as $cartaTrucada)

                        <div class="accordion accordion-flush" id="cartaTrucada{{ $cartaTrucada->id }}">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $cartaTrucada->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Nº Trucada: {{ $cartaTrucada->codi_trucada }}
                                    </button>
                                </h2>
                                <div id="flush-collapseOne{{ $cartaTrucada->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#cartaTrucada{{ $cartaTrucada->id }}">
                                    <div class="accordion-body">
                                        <form>
                                            <fieldset disabled>

                                            <div class="tempsInformacioModal">
                                                <div>
                                                    <h4>Informació del trucant </h4>
                                                </div>
                                                <div class="tempsTrucadaModal">
                                                    Temps trucada: {{ $cartaTrucada->temps_trucada }}s
                                                </div>
                                            </div>

                                            <div class="form-group row mt-0">
                                                <div class="col-6">
                                                    <div class="form-group mt-3">
                                                        <label for="exampleFormControlTextarea1">Nom</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->nom_trucada }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mt-3">
                                                        <label for="exampleFormControlTextarea1">Telèfon</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->telefon }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-2">
                                                <div class="col-12">
                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Descripció dels fets</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">{{ $cartaTrucada->nota_comuna }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-0">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Procedència</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->procedencia_trucada }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Municipi</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->municipi->nom }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-2">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Direcció</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->adreca_trucada }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Informació del telefon</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->dadesPersonals->antecedents }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4>Localització emergència</h4>

                                            @if ($cartaTrucada->fora_catalunya  == true)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked" value="true" checked>
                                                    <label class="form-check-label" for="inlineCheckbox1">Fora de Catalunya</label>
                                                </div>
                                            @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked" value="true">
                                                    <label class="form-check-label" for="inlineCheckbox1">Fora de Catalunya</label>
                                                </div>
                                            @endif

                                            <div class="form-group row mt-0">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Municipi</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->municipi->nom }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Província</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->provincia->nom }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Comarca</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->municipi->comarca->nom }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4>Tipus de localitzacio</h4>

                                            <div class="form-group row mt-2">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Tipus</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->tipusLocalitzacio->tipus }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Detall</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->detall_localitzacio }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-2">
                                                <div class="col-7">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Descripció</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->descripcio_localitzacio }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Altre</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->altres_ref_localitzacio }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4>Tipus d'incident</h4>

                                            <div class="form-group row mt-2">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Tipus</label>
                                                        <input class="form-control form-control-sm" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Incident</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->incident->descripcio }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4>Trucada atesa per:</h4>

                                            <div class="form-group row mt-2">
                                                <div class="col-5">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Nom</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->usuari->nom }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Cognoms</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->usuari->cognoms }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
            <div class="modal-footer footerExpedienteAbierto">
                <div>
                    <div>
                        Creació: {{ $expedient->data_creacio }}&nbsp;&nbsp;&nbsp;&nbsp; Ultima&nbsp;edició:&nbsp;{{ $expedient->data_ultima_modificacio }}<br>
                    </div>
                    <form action="{{ action([App\Http\Controllers\ExpedientController::class, 'index']) }}">
                        <div style="display: flex;">
                            <div>
                                Estat: {{ $expedient->estatExpedient->estat }}
                            </div>
                            @if ($expedient->estatExpedient->id  == 1)
                                <div style="width: 18px; height: 18px; background-color: green; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                            @elseif ($expedient->estatExpedient->id  == 2)
                                <div style="width: 18px; height: 18px; background-color: yellow; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                            @elseif ($expedient->estatExpedient->id  == 3)
                                <div style="width: 18px; height: 18px; background-color: #665D1D; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                            @elseif ($expedient->estatExpedient->id  == 4)
                                <div style="width: 18px; height: 18px; background-color: blue; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                            @elseif ($expedient->estatExpedient->id  == 5)
                                <div style="width: 18px; height: 18px; background-color: purple; margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                            @else
                                <div style="width: 18px; height: 18px; background-color: rgb(0, 0, 0); margin-left: 9px; border-radius: 45px; margin-top: 4px;"></div>
                            @endif
                            <div>
                                <select class="form-select form-select-sm cambiarEstadoExpediente" id="cambiarEstado" name="cambiarEstado" aria-label=".form-select-sm example">
                                    <option selected>Cambiar</option>
                                    <option value="1">En procés</option>
                                    <option value="2">Sol·licitat</option>
                                    <option value="3">Acceptat</option>
                                    <option value="4">Tancat</option>
                                    <option value="5">Immobilitzat</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary botonEditarEstadoExpediente"><i class="fas fa-edit"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <a class="btn btn-primary " data-bs-toggle="modal" href="#abrirExpediente" role="button">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $policia = null ?>
<?php $bomberos = null ?>

@endforeach
</div>

@endsection
