@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Llamada
@endsection

@section('contenido')

<div class="principalCarta">
    <div class="zonaFormulario">

        <div>
            <div class="card" style="width: 100%; margin-top: 10px;">
                <img class="card-img-top" src="../public/Imagenes/EMERGENCIA1.png" alt="Card image cap">

                <div class="card-body">
                    <h4 class="card-title">Localització de la Emergencia</h4>

                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
                            <label class="form-check-label" for="inlineCheckbox1">Fora de Catalunya</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <div class="col provinciaMunicipio">

                                <div class="form-group row mb-2">
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" placeholder="Municipio" aria-label="Provincia" aria-describedby="button-addon2">

                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" placeholder="Provincia" aria-label="Provincia" aria-describedby="button-addon2">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="collapse show multi-collapse" id="multiCollapseExample4">

                                <div class="form-group row mb-2">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-sm" placeholder="Comarca" aria-label="Comarca" aria-describedby="button-addon2">
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
                        <div class="col-4">
                            <h4>Tipus d'incident</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1" style="margin-right: 15px">
                            <div class="col provinciaMunicipio">

                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
                                    <label class="form-check-label" for="inlineRadio1">Provincia</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="collapse show multi-collapse" id="multiCollapseExample4">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    <label class="form-check-label" for="inlineRadio2">Calle</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                    <label class="form-check-label" for="inlineRadio3">Punt singular</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
                                    <label class="form-check-label" for="inlineRadio4">Carretera</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
                                    <label class="form-check-label" for="inlineRadio5">Entitat població</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-1 gx-0">

                            <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                            </a>

                        </div>
                        <div class="col-1 gx-0">

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Tipo</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="col-2 gx-0">

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Incidente</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">

                                    <div class="form-group row mb-2 gx-2">
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" placeholder="Tipo de via" aria-label="Tipo de via" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" placeholder="Direccion" aria-label="Direccion" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control form-control-sm" placeholder="nº" aria-label="nº" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm" placeholder="Escalera" aria-label="Escalera" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm" placeholder="Piso" aria-label="Piso" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm" placeholder="Puerta" aria-label="Puerta" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control form-control-sm" placeholder="Otras referencias (Opcional)" aria-label="Otras referencias" aria-describedby="button-addon2">
                                        </div>
                                        <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body">

                                    <div class="form-group row mb-2 gx-2">
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" placeholder="Nombre del punto singular" aria-label="Nombre del punto singular" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-sm" placeholder="Otras referencias (Opcional)" aria-label="Otras referencias" aria-describedby="button-addon2">
                                        </div>
                                        <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample3">
                                <div class="card card-body">

                                    <div class="form-group row mb-2 gx-2">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control form-control-sm" placeholder="Nombre de la carretera" aria-label="Nombre de la carretera" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control form-control-sm" placeholder="KM" aria-label="KM" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" placeholder="Sentido de la marcha" aria-label="Sentido de la marcha" aria-describedby="button-addon2">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" placeholder="Otras referencias (Opcional)" aria-label="Otras referencias" aria-describedby="button-addon2">
                                        </div>
                                        <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample5">
                                <div class="card card-body">

                                    <div class="form-group row mb-2 gx-2">
                                        <div class="col-sm-11">
                                            <input type="text" class="form-control form-control-sm" placeholder="Otras referencias (Opcional)" aria-label="Otras referencias" aria-describedby="button-addon2">
                                        </div>
                                        <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>




                </div>

                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
        </div>

        <div>
            Casos Similares
        </div>

    </div>


    <div class="zonaTelefono">

        <div>
            <div class="card" style="width: 100%; margin-top: 10px;">
                <div class="card-body row mb-0 cronometro">
                    <h5>Nº Llamada</h5>
                    <div class="col-sm-6 mb-0">
                        <p>463824284</p>
                    </div>
                    <div class="col-sm-6">
                        <h2>00:00</h2>
                    </div>
                </div>
              </div>
        </div>

        <div class="card informacionLlamante" style="width: 100%; margin-top: 10px">
            <img src="../public/Imagenes/cartaTelefono.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Informació del trucant</h5>

                <div class="form-group row mb-2">
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" placeholder="Nombre" aria-label="Nombre" aria-describedby="button-addon2">
                    </div>
                    <a class="col-sm-2 col-navbar-brand-sm" href="#">
                        <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                    </a>
                </div>

                <div class="form-group row mb-2">
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" placeholder="Apellidos" aria-label="Apellidos" aria-describedby="button-addon2">
                    </div>
                    <a class="col-sm-2 col-navbar-brand-sm" href="#">
                        <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                    </a>
                </div>

                <div class="form-group row mb-2">
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" placeholder="Relacion de la emergencia" aria-label="Relacion de la emergencia" aria-describedby="button-addon2">
                    </div>
                    <a class="col-sm-2 col-navbar-brand-sm" href="#">
                        <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                    </a>
                </div>

                <div class="form-group row mb-2">
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm" placeholder="Telefono" aria-label="Telefono" aria-describedby="button-addon2">
                    </div>
                    <a class="col-sm-2 col-navbar-brand-sm" href="#">
                        <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                    </a>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripcion de los  hechos</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>

            </div>
        </div>

        {{-- Procedimiento de llamada --}}

        <div>
            <div class="card procedenciaLlamada" style="width: 100%; margin-top: 10px;">
                <div class="card-header">
                  <h5>Procedencia de la llamada</h5>
                </div>
                <div class="card-body">

                    <div class="form-group row mb-2 gx-1">
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Procedencia" aria-label="Procedencia" aria-describedby="button-addon2">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Municipio" aria-label="Municipio" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm gx-4" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    {{-- <div class="form-group row mb-2">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Municipio" aria-label="Municipio" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div> --}}

                    <div class="form-group row mb-2 gx-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Direccion" aria-label="Direccion" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-inline row mb-2 gx-1">
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Tipo" aria-label="Tipo" aria-describedby="button-addon2">
                        </div>
                        <div class="col-sm-5">
                            <input type="number" class="form-control form-control-sm" placeholder="KM" aria-label="KM" aria-describedby="button-addon2">
                        </div>

                        <a class="col-sm-2 col-navbar-brand-sm gx-4" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-inline row mb-2 gx-1">
                        <div class="col-sm-3">
                            <input type="number" class="form-control form-control-sm" placeholder="nº" aria-label="nº" aria-describedby="button-addon2">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Piso" aria-label="Piso" aria-describedby="button-addon2">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" placeholder="Otro" aria-label="Otro" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm gx-4" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Informacion del telefono" aria-label="Informacion del telefono" aria-describedby="button-addon2">
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


@endsection
