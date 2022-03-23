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
<a class="nav-link" aria-current="page" href="{{ url('/expedients') }}">Expedients</a>
@endsection

@section('contenido')

<div class="principalCarta">
    <div class="zonaFormulario">

        <div>
            <div class="card bordeRedondo zoomCardGrande" style="width: 100%; margin-top: 10px;">
                <img class="card-img-top imagenEmergencia" src="../public/Imagenes/EMERGENCIA3.png" alt="Card image cap">

                <div class="card-body">
                    <div class="simuladorLlamada">
                        <div>
                            <h4 class="card-title">Localització de la Emergencia</h4>
                        </div>

                        <div>
                            <button type="button" class="btn btn-light botonTutorial" data-bs-toggle="modal" href="#tutorial" role="button"><i class="fas fa-phone-alt"></i>¡Tutorial!</i></button>
                            <button type="button" class="btn btn-danger botonSimularLlamada" data-bs-toggle="modal" href="#simularLlamada" role="button"><i class="fas fa-phone-alt"></i>¡Simular Trucada!</i></button>
                        </div>
                    </div>


                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="fora_catalunya" value="fora_catalunya" name="fora_catalunya" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
                            <label class="form-check-label" for="fora_catalunya">Fora de Catalunya</label>
                            <example-component>
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="col provinciaMunicipio">

                                <div class="form-group row mb-2">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-sm" placeholder="Municipi" aria-label="Provincia" aria-describedby="button-addon2" name="municipis_id">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="collapse show multi-collapse" id="multiCollapseExample4">

                                <div class="form-group row mb-2">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-sm" placeholder="Comarca" aria-label="Comarca" aria-describedby="button-addon2"> {{-- la comarca se envia? --}}

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="col provinciaMunicipio" >

                                <div class="form-group row mb-2">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-sm" placeholder="Provincia" aria-label="Provincia" aria-describedby="button-addon2" name="provincies_id">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-1">

                            <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                            </a>

                        </div>

                    </div>

                    {{-- ------------------------------------------------------------------------------------------------------------------------------------ --}}
                    <div class="row">
                        <div class="col-8">
                            <h4>Tipus de localització</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-1 col-sm-2" style="margin-right: 15px">
                            <div class="col provinciaMunicipio">

                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
                                    <label class="form-check-label" for="inlineRadio1">Provincia</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 col-sm-9">
                            <div class="collapse show multi-collapse" id="multiCollapseExample4">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    <label class="form-check-label" for="inlineRadio2">Carrer</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">
                                    <label class="form-check-label" for="inlineRadio3">Punt singular</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample3">
                                    <label class="form-check-label" for="inlineRadio4">Carretera</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
                                    <label class="form-check-label" for="inlineRadio5">Població</label>
                                </div>
                                <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                    <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1" style="margin-top: 1%">


                                    <div class="form-group row mb-2 gx-2" >
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" placeholder="Descripció" aria-label="Tipo de via" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" placeholder="Detall" aria-label="Direccion" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control form-control-sm" placeholder="Altre" aria-label="Direccion" aria-describedby="button-addon2">
                                        </div>
                                        <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                        </a>
                                    </div>


                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2" style="margin-top: 1%">


                                    <div class="form-group row mb-2 gx-2">
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control form-control-sm" placeholder="Nom del punt singular" aria-label="Nombre del punto singular" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-sm" placeholder="Altres referèncias (Opcional)" aria-label="Otras referencias" aria-describedby="button-addon2">
                                        </div>
                                        <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                        </a>
                                    </div>


                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample3" style="margin-top: 1%">


                                    <div class="form-group row mb-2 gx-2">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-sm" placeholder="Nom de la carretera" aria-label="Nombre de la carretera" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control form-control-sm" placeholder="Altres referències (Opcional)" aria-label="Otras referencias" aria-describedby="button-addon2">
                                        </div>
                                        <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                        </a>
                                    </div>


                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col mb-3">
                            <div class="collapse multi-collapse" id="multiCollapseExample5" style="margin-top: 1%">


                                    <div class="form-group row mb-2 gx-2">
                                        <div class="col-sm-11">
                                            <input type="text" class="form-control form-control-sm" placeholder="Altres referències" aria-label="Otras referencias" aria-describedby="button-addon2" name="">
                                        </div>
                                        <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                        </a>
                                    </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-4 mb-2">
                        <h4>Tipus d'incident</h4>
                    </div>

                    <div class="row">
                        <div class="col-5">

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Tipus</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="col-6">

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Incident</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="col-1">

                            <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card col-12 bordeRedondo zoomCardGrande" style="margin-top: 10px">
            <div class="card-body">
                <div class="row col-12">
                    <div class="col-12">
                        <h4>Expedients existents</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 tablaExpedientesScroll">

                        <table class="table table-hover tablaExpedientes">
                            <thead class="table colorTabla">
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Tipus d'incident</th>
                                <th scope="col">Localització</th>
                                <th scope="col">Direcció</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Thornton</td>
                                <td><button class="btn btn-light botonesTabla" type="submit">Seleccionar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Thornton</td>
                                <td><button class="btn btn-light botonesTabla" type="submit">Seleccionar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Thornton</td>
                                <td><button class="btn btn-light botonesTabla" type="submit">Seleccionar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Thornton</td>
                                <td><button class="btn btn-light botonesTabla" type="submit">Seleccionar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Thornton</td>
                                <td><button class="btn btn-light botonesTabla" type="submit">Seleccionar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Thornton</td>
                                <td><button class="btn btn-light botonesTabla" type="submit">Seleccionar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Thornton</td>
                                <td><button class="btn btn-light botonesTabla" type="submit">Seleccionar</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-12 mt-3">
                    <h4>Crear expedient</h4>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-6">
                        <button type="button" class="btn btn-light botonExpedienteNuevoConRecomendacion" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Expedient nou amb recomanació</button>
                    </div>
                    <div class="col-6 ">
                        <button type="button" class="btn btn-light botonExpedienteNuevo">Expedient nou</button>
                    </div>
                </div>

            </div>

        </div>



    </div>

    <div class="zonaTelefono">

        <div>
            <div class="card bordeRedondo zoomCard" style="width: 99%; margin-top: 10px;">
                <div class="card-body row mb-0 cronometro">
                    <h5>Nº Trucada</h5>
                    <div class="col-sm-6 mb-0">
                        <p id="codiTrucadaP"></p>
                        <input id="codiTrucada" name="codi_trucada" type="hidden" value="falta">
                    </div>
                    <div class="col-sm-6">
                        <h2 id="crono">0:00</h2>
                        <input name="temps_trucada" type="hidden" value="falta">
                    </div>
                </div>
              </div>
        </div>

        <div class="card informacionLlamante bordeRedondo zoomCard" style="width: 100%; margin-top: 10px">
            {{-- <img src="../public/Imagenes/cartaTelefono.png" class="card-img-top imagenEmergencia" alt="..."> --}}
            <div class="card-body">
                <h5 class="card-title">Informació del trucant</h5>

                <div class="form-group row mb-2">
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" placeholder="Nom" aria-label="Nom" aria-describedby="button-addon2" name="nom_trucada">
                    </div>
                    <a class="col-sm-2 col-navbar-brand-sm" href="#">
                        <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                    </a>
                </div>
                <div class="form-group row mb-2">
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm" placeholder="Telèfon" aria-label="Telefono" aria-describedby="button-addon2" id="telefon" name="telefon">
                    </div>
                    <a class="col-sm-2 col-navbar-brand-sm" href="#">
                        <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                    </a>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1" id="nota_comuna">Nota comuna</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" id="nota_comuna" name="nota_comuna"></textarea>
                </div>

            </div>
        </div>

        {{-- Procedimiento de llamada --}}

        <div>
            <div class="card procedenciaLlamada bordeRedondo zoomCard" style="width: 100%; margin-top: 10px;">
                <div class="card-header">
                  <h5>Procedència de la trucada</h5>
                </div>
                <div class="card-body">

                    <div class="form-group row mb-2 gx-1">
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Procedència" aria-label="Procedencia" aria-describedby="button-addon2" name="procedencia_trucada">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Origen" aria-label="Origen" aria-describedby="button-addon2" name="origen_trucada">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm gx-4" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-group row mb-2 gx-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Municipi" aria-label="Municipi" aria-describedby="button-addon2" name="municipis_id_trucada">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-group row mb-2 gx-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Adreça" aria-label="Direccion" aria-describedby="button-addon2" name="dades_personals_id_adreca">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Informació del telèfon" aria-label="Informacion del telefono" aria-describedby="button-addon2" name="dades_personals_id_antecedents">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm gx-2" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>


                </div>
              </div>
        </div>

    </div>
</div>



<div class="modal fade zonaMapa bordeRedondo" id="exampleModalToggle" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">

                <h1 class="text-center">Recomanacions</h1>
                <div class="row" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="row text-center">
                    <div class="col-4 box1 pt-4">
                        <a href="tel:+123456789"><span><img src="../public/imagenes/cochePolicia.png" class="imagenAgenciaRecomendacion"></span>
                        <h3 class="d-none d-lg-block d-xl-block">Policia</h3>
                        <p class="d-none d-lg-block d-xl-block">Veure policies disponibles</p></a>
                    </div>
                    <div class="col-4 box2 pt-4">
                        <a href=""><span><img src="../public/imagenes/furgonAmbulancia.png" class="imagenAgenciaRecomendacion2"></span>
                        <h3 class="d-none d-lg-block d-xl-block">Ambulància</h3>
                        <p class="d-none d-lg-block d-xl-block">Veure ambulàncies disponibles</p></a>
                    </div>
                    <div class="col-4 box3 pt-4">
                        <a href="mailto:test@test.com"><span><img src="../public/imagenes/camionBomberos.png" class="imagenAgenciaRecomendacion3"></span>
                        <h3 class="d-none d-lg-block d-xl-block">Bombers</h3>
                        <p class="d-none d-lg-block d-xl-block">Veure bombers disponibles</p></a>
                    </div>
                </div>
                <button class="btn btn-light crearExpedienteRecomendacion" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Crear expedient</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="simularLlamada" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background-color: rgb(255, 0, 0); height: 100px">
        <div class="modal-body">
            <div class="bodySimuladorLlamada">
                <div>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" href="#Llamada" role="button">¡Trucant existent!</button>
                </div>
                <div>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" href="#Llamada" role="button">¡Trucant nou!</button>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade fondoSimuladorLLamada" id="Llamada" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  >
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content" style="border-radius: 20px; background-color:rgb(255, 0, 0)">
        <div class="modal-body tituloSimuladorLlamada">
            <img class="card-img-top imagenEmergencia" src="../public/Imagenes/Llamada.gif" alt="Card image cap">
            <div class="bodySimuladorLlamada2">
                <div>
                    <button type="button" class="btn btn-dark botonCogerLlamada" id="botonCogerLlamada" data-bs-dismiss='modal'>¡Agafar trucada!</button>
                </div>
            </div>
        </div>

      </div>
    </div>
</div>




@endsection
