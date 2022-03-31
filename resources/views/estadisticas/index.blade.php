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
<div class="generalEstadisticas">
    <div class="principalEstadisticas">
        <div class="grafico2i3">
            <div>
                <canvas id="myChart2" class="grafico1"></canvas>
            </div>
            <div>
                <canvas id="myChart3" class="grafico1"></canvas>
            </div>
        </div>
        <div>
            <canvas id="myChart" class="grafico2"></canvas>
        </div>
    </div>
</div>



<script>
    const data = {
        labels: [
            'Barcelona',
            'Girona',
            'Lleida',
            'Tarragona'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100, 60],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(20, 50, 235)',
            'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
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
        label: 'My First Dataset',
        data: [65, 59, 80, 81, 56, 55, 40, 30, 20, 10],
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
      document.getElementById('myChart2'),
      config2
    );



    const data3 = {
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
        label: 'My First Dataset',
        data: [65, 59, 80, 81, 56, 55, 40, 30, 20, 10],
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

    const config3 = {
        type: 'bar',
        data: data3,
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        },
    };

    const myChart3 = new Chart(
      document.getElementById('myChart3'),
      config3
    );



</script>
@endsection
