@extends('plantillas.principal')

@section('titulo')
Gestion de expedientes
@endsection

@section('tituloNav')
Expedients
@endsection

@section('menu1')
Trucada
@endsection

@section('menu2')
Expedients
@endsection

@section('contenido')


    <div class="row mb-2 mt-2" style="display: flex; justify-content: center">
        <div class="row barraNav">
            <div class="col-12">
                <div class="card">
                    <div class="col-5" >
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>

                            <div class="btn-group" role="group">
                              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                              </ul>
                            </div>
                          </div>
                    </div>

                    {{-- <ul>
                        <li class="col-2">
                            <div class="btn-group filtros">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                                    <button class="btn btn-primary" type="submit">Buscar</button>
                                  </form>
                            </div>
                        </li>
                        <li class="col-2">
                            <div class="btn-group filtros">
                                <button type="button" class="btn btn-info dropdown-toggle botonExpedienteFiltro" data-bs-toggle="dropdown" aria-expanded="false">
                                  Ordenar per
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="col-2">
                            <div class="btn-group filtros">
                                <button type="button" class="btn btn-info dropdown-toggle botonExpedienteFiltro" data-bs-toggle="dropdown" aria-expanded="false"">
                                  Ordenar per
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="col-2">
                            <div class="btn-group filtros">
                                <button type="button" class="btn btn-info dropdown-toggle botonExpedienteFiltro" data-bs-toggle="dropdown" aria-expanded="false">
                                  Ordenar per
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="col-2">
                            <div class="btn-group filtros ">
                                <button type="button" class="btn btn-info dropdown-toggle botonExpedienteFiltro" data-bs-toggle="dropdown" aria-expanded="false">
                                  Ordenar per
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </li>
                      </ul> --}}
                </div>
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
            Nº expedient: {{ $expedient->id }}&nbsp;&nbsp;&nbsp;&nbsp;Nº trucades: {{ $expedient->cartesTrucada->count() }}
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
                    {{-- @foreach ($expedient->cartesTrucada[0]->municipis_id as $carta_trucada) --}}
                        <p class="textoLocalizacion">{{ $expedient->cartesTrucada[0]->provincia->nom }}</p>
                    {{-- @endforeach --}}
                </div>

                <div class="agenciasDespachadas">

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
                        Creació: {{ $expedient->data_creacio }}&nbsp;&nbsp;&nbsp;&nbsp; Ultima&nbsp;edició:&nbsp;{{ $expedient->data_ultima_modificacio }}<br>
                    </div>
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
                    </div>
                </div>
                <div>
                    <a class="btn btn-primary " data-bs-toggle="modal" href="#abrirExpediente{{ $expedient->id }}" role="button">Veure/Modificar</a>
                </div>

            </div>
        </div>
    </div>
@endforeach


    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured0
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


</div>


@foreach ($expedients as $expedient )
<div class="modal fade bordeRedondo zonaExpedienteAbierto3" id="abrirExpediente{{ $expedient->id }}" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="abrirExpediente{{ $expedient->id }}Label" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered zonaExpedienteAbierto2 ">
        <div class="modal-content expedienteModal zonaExpedienteAbierto">
            <div class="modal-header tituloExpedienteModal">
                <h5 class="modal-title Nexpediente" id="abrirExpedienteLabel">Nº expediente: {{ $expedient->id }}</h5>
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
                                    <div class="agencia1">
                                        <div class="fotoAgencia">
                                            <img src="../public/imagenes/cochePolicia.png" class="imagenAgencia">
                                        </div>
                                        <div class="unidadesAgencia">
                                            <h3>99</h3>
                                        </div>
                                    </div>
                                    <div class="agencia2">
                                        <div class="fotoAgencia">
                                            <img src="../public/imagenes/camionBomberos.png" class="imagenAgencia">
                                        </div>
                                        <div class="unidadesAgencia">
                                            <h3>99</h3>
                                        </div>
                                    </div>
                                    <div class="agencia3">
                                        <div class="fotoAgencia">
                                            <img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgencia">
                                        </div>
                                        <div class="unidadesAgencia">
                                            <h3>99</h3>
                                        </div>
                                    </div>
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
                                        Nº llamada: {{ $cartaTrucada->codi_trucada }}
                                    </button>
                                </h2>
                                <div id="flush-collapseOne{{ $cartaTrucada->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#cartaTrucada{{ $cartaTrucada->id }}">
                                    <div class="accordion-body">
                                        <form>
                                            <fieldset disabled>

                                            <div class="tempsInformacioModal">
                                                <div>
                                                    <h4>Informacio del trucant </h4>
                                                </div>
                                                <div class="tempsTrucadaModal">
                                                    <h2>Temps trucada: {{ $cartaTrucada->temps_trucada }}s</h2>
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
                                                        <label for="exampleFormControlTextarea1">Telefon</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->telefon }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-2">
                                                <div class="col-12">
                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Descripcio dels fets</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">{{ $cartaTrucada->nota_comuna }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-0">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Procedencia</label>
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
                                                        <label for="exampleFormControlTextarea1">Direccio</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->adreca_trucada }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Informacion del telefono</label>
                                                        <input class="form-control form-control-sm" type="text" value="{{ $cartaTrucada->dadesPersonals->antecedents }}" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4>Localitzacio de la emergencia</h4>

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
                                                        <label for="exampleFormControlTextarea1">Provincia</label>
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
                    Creacion: {{ $expedient->data_creacio }}&nbsp;&nbsp;&nbsp;&nbsp; Ultima&nbsp;Edicion:&nbsp;{{ $expedient->data_ultima_modificacio }}<br>
                    Estado: {{ $expedient->estatExpedient->estat }}
                </div>
                <div>
                    <a class="btn btn-primary " data-bs-toggle="modal" href="#abrirExpediente" role="button">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

@endsection
