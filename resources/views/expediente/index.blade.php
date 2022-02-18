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


    <div class="row mb-2 mt-2">
        <div class="row barraNav">
            <div class="col-11">
                <div class="card">
                    <ul>
                        <li>
                            <div class="btn-group filtros">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                  </form>
                            </div>
                        </li>
                        <li>
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
                        <li>
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
                        <li>
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
                        <li>
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
                      </ul>
                    {{-- <h1 style="display: inline-block">expedients</h1>
                    <div class="btn-group" style="display: inline-block">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Ordenar per
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" style="display: inline-block">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Data de creació
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" style="display: inline-block">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Més filtres
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    </form> --}}
                </div>
            </div>
          </div>
    </div>
<div class="principalExpedientes">



    <div class="card" >
        <div class="card-header cardHeader">
            Nº expediente: 9839372321&nbsp;&nbsp;&nbsp;&nbsp;Nº trucades: 32
        </div>
        <div class="card-body cardBody" >
            <div class="cuerpoExpediente">
                <div class="zonaMapaCard">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187.08288259846324!2d2.1730808994327813!3d41.388723494740994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f05d80e233%3A0x999036411babe70f!2sCentro%20de%20Estudios%20Polit%C3%A9cnicos%3A%20Urquinaona!5e0!3m2!1ses!2ses!4v1645014935619!5m2!1ses!2ses" class="imagenMapa" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="notaComunaCard">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 90%"></textarea>
                </div>
            </div>
            <div class="cuerpo2Expediente">
                <div class="localizacion">
                    <p class="textoLocalizacion">Calle Josep tarradelles 20</p>
                </div>
                <div class="agenciasDespachadas">
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
        <div class="card-footer cardFooter">
            <div class="verEditarExpediente">
                <div>
                    Creacion: 27/08/2020&nbsp;&nbsp;&nbsp;&nbsp; Ultima&nbsp;Edicion:&nbsp;23/04/2020<br>
                    Estado: activo
                </div>
                <a class="btn btn-primary " data-bs-toggle="modal" href="#abrirExpediente" role="button">Ver/Editar</a>
            </div>
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


<div class="modal fade bordeRedondo zonaExpedienteAbierto3" id="abrirExpediente" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="abrirExpedienteLabel" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered zonaExpedienteAbierto2 ">
        <div class="modal-content expedienteModal zonaExpedienteAbierto">
            <div class="modal-header tituloExpedienteModal">
                <h5 class="modal-title Nexpediente" id="abrirExpedienteLabel">Nº expediente: 83732974291</h5>
                <h5 class="modal-title Ntrucades">Nº trucades: 32</h5>
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
                                    <h5>Carrer Josep Vicent 12</h5>
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

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        ID llamada: 8493928492
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form>
                                            <fieldset disabled>
                                            <legend>Informacio del trucant</legend>

                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="disabledSelect" class="form-label-sm">Nom</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="disabledSelect" class="form-label">Cognoms</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <input class="form-control form-control-sm" type="text" value="Roberto" aria-label="Disabled input example" disabled readonly>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <input class="form-control form-control-sm" type="text" value="Guiterrex" aria-label="Disabled input example" disabled readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="disabledSelect" class="form-label">Telefon</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="disabledSelect" class="form-label">Relacio de la emergencia</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <input class="form-control form-control-sm" type="text" value="Guiterrex" aria-label="Disabled input example" disabled readonly>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="form-control form-control-sm" type="text" value="656339228" aria-label="Disabled input example" disabled readonly>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer footerExpedienteAbierto">
                <div>
                    Creacion: 27/08/2020&nbsp;&nbsp;&nbsp;&nbsp; Ultima&nbsp;Edicion:&nbsp;23/04/2020<br>
                    Estado: activo
                </div>
                <div>
                    <a class="btn btn-primary " data-bs-toggle="modal" href="#abrirExpediente" role="button">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
