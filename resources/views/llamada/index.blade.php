@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Llamada
@endsection

@section('contenido')

<div class="principal">
    <div class="zonaFormulario">

        <div>
            <div class="card" style="width: 100%; margin-top: 15px;">
                <img class="card-img-top" src="../public/Imagenes/EMERGENCIA1.png" alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title">Emergencia</h5>
                </div>

                <div class="form-group row mb-2" style="margin-left: 5px;">
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" placeholder="Comarca" aria-label="Comarca" aria-describedby="button-addon2">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" placeholder="Provincia" aria-label="Provincia" aria-describedby="button-addon2">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Municipio" aria-label="Municipio" aria-describedby="button-addon2">
                    </div>
                    <a class="col-sm-1 col-navbar-brand-sm" href="#">
                        <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                    </a>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tipo de localizacion</li>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Default radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Second default radio
                        </label>
                      </div>
                      <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                        <label class="form-check-label" for="exampleRadios3">
                          Disabled radio
                        </label>
                      </div>
                </ul>


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
            <div class="card" style="width: 100%; margin-top: 15px;">
                <div class="card-body row mb-0 cronometro">
                    <h5>Nº Expediente</h5>
                    <div class="col-sm-6 mb-0">
                        <p>463824284</p>
                    </div>
                    <div class="col-sm-6">
                        <h2>00:00</h2>
                    </div>
                </div>
              </div>
        </div>

        <div class="card informacionLlamante" style="width: 100%; margin-top: 20px">
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

        <div>
            <div class="card procedenciaLlamada" style="width: 100%; margin-top: 20px;">
                <div class="card-header">
                  <h5>Procedencia de la llamada</h5>
                </div>
                <div class="card-body">

                    <div class="form-group row mb-2">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Procedencia" aria-label="Procedencia" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Municipio" aria-label="Municipio" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Direccion" aria-label="Direccion" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    {{-- Procedimiento de llamada --}}

                    <div class="form-inline row mb-2 gx-1">
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Tipo" aria-label="Tipo" aria-describedby="button-addon2">
                        </div>
                        <div class="col-sm-2">
                            <input type="number" class="form-control form-control-sm" placeholder="KM" aria-label="KM" aria-describedby="button-addon2">
                        </div>
                        <div class="col-sm-2">
                            <input type="number" class="form-control form-control-sm" placeholder="nº" aria-label="nº" aria-describedby="button-addon2">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Piso" aria-label="Piso" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm gx-4" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Informacion del telefono" aria-label="Informacion del telefono" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Fecha" aria-label="Fecha" aria-describedby="button-addon2">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Hora" aria-label="Hora" aria-describedby="button-addon2">
                        </div>
                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                            <img src="../public/Imagenes/informacion.png" alt="" width="20" height="20">
                        </a>
                    </div>
                </div>
              </div>
        </div>

    </div>
</div>


@endsection
