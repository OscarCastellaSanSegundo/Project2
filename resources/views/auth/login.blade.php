@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Menu
@endsection

@section('contenido')
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-8">
                @include('partials.mensajes')
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="../public/imagenes/Logo1Vector.png" class="img-fluid" alt="..." width="400px">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <form action="{{ action([App\Http\Controllers\UsuariController::class, 'login']) }}" method="POST">
                                    @csrf
                                    <h1 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia la sessió</h1>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="codi" class="form-control form-control-lg" name="codi" value="{{ old('codi') }}"/>
                                        <label class="form-label" for="codi">Usuari</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="contrassenya" class="form-control form-control-lg" name="contrassenya" value="{{ old('contrassenya') }}"/>
                                        <label class="form-label" for="contrassenya">Contrasenya</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Iniciar sessió</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
