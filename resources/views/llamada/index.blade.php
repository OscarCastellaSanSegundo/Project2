@extends('plantillas.principal')

@section('titulo')
Llamada de emergencia
@endsection

@section('tituloNav')
Llamada
@endsection

@section('contenido')

<div class="card informacionLlamante" style="width: 18rem;">
    <img src="../public/Imagenes/cartaTelefono.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Informació del trucant</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endsection
