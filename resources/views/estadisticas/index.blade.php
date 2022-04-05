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

<?php

?>

<div class="generalEstadisticas">
    <div class="principalEstadisticas">
        <div id="carouselExampleCaptions" class="carousel slide carroselEstadisticas" data-bs-ride="carousel">
            <div class="carousel-indicators" style="margin-bottom: -20px;">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 50px; height: 7px;"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="width: 50px; height: 7px;"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="width: 50px; height: 7px;"></button>
            </div>
            <div class="carousel-inner carrouselInnerEstadisticas">
              <div class="carousel-item active grafico1" data-bs-interval="999999999">
                    <div>
                        <canvas id="myChart2" ></canvas>
                    </div>
              </div>
              <div class="carousel-item grafico1" data-bs-interval="999999999">
                <div>
                    <canvas id="myChart3" ></canvas>
                </div>
              </div>
              <div class="carousel-item grafico2" data-bs-interval="999999999">
                <div style="width: 50%; margin-left: 25%">
                    <canvas id="myChart" ></canvas>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 45px; height: 90px"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true" style="width: 45px; height: 90px"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- <div class="grafico2i3">
            <div>
                <canvas id="myChart2" class="grafico1"></canvas>
            </div>
            <div>
                <canvas id="myChart3" class="grafico1"></canvas>
            </div>
        </div>
        <div>
            <canvas id="myChart" class="grafico2"></canvas>
        </div> --}}
    </div>
</div>



<script>
    const data = {
        labels: [
            'Barcelona',
            'Girona',
            'Lleida',
            'Tarragona',
            'Fora de Catalunya'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [<?php echo $provincies[0] ?>, <?php echo $provincies[1] ?>,
            <?php echo $provincies[2] ?>, <?php echo $provincies[3] ?>, <?php echo $provincies[4] ?>],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(20, 50, 235)',
            'rgb(255, 205, 86)',
            'rgb(125, 14, 60)'
            ],
            hoverOffset: 5
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
            'Fuita',
            'Altres incidències',
            'Seguretat',
            'Trànsit',
            'Civisme',
            'Medi ambient',
            'Meteorologia'
        ],
    datasets: [{
        label: 'My First Dataset',
        data: [<?php echo $incidentes[0] ?>, <?php echo $incidentes[1] ?>, <?php echo $incidentes[2] ?>, <?php echo $incidentes[3] ?>, <?php echo $incidentes[4] ?>,
         <?php echo $incidentes[5] ?>, <?php echo $incidentes[6] ?>, <?php echo $incidentes[7] ?>, <?php echo $incidentes[8] ?>, <?php echo $incidentes[9] ?>],
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



    // const data3 = {
    // labels: [
    //         'Accidents',
    //         'Assistència sanitària',
    //         'Incendi',
    //         'Fuita (Aigua, gas, altres)',
    //         'Altres incidències',
    //         'Seguretat',
    //         'Trànsit',
    //         'Civisme',
    //         'Medi ambient',
    //         'Meteorologia'
    //     ],
    // datasets: [{
    //     label: 'My First Dataset',
    //     data: [65, 59, 80, 81, 56, 55, 40, 30, 20, 10],
    //     backgroundColor: [
    //     'rgba(92, 67, 14, 0.2)',
    //     'rgba(0, 0, 255, 0.2)',
    //     'rgba(255, 0, 0, 0.2)',
    //     'rgba(56, 113, 187, 0.2)', //
    //     'rgba(54, 162, 235, 0.2)',
    //     'rgba(153, 102, 255, 0.2)',
    //     'rgba(201, 203, 207, 0.2)'
    //     ],
    //     borderColor: [
    //     'rgb(92, 67, 14, 0.8)',
    //     'rgb(0, 0, 255, 0.8)',
    //     'rgb(255, 0, 0, 0.8)',
    //     'rgb(56, 113, 187, 0.8)',
    //     'rgb(54, 162, 235)',
    //     'rgb(153, 102, 255)',
    //     'rgb(201, 203, 207)'
    //     ],
    //     borderWidth: 1
    // }]
    // };

    // const config3 = {
    //     type: 'line',
    //     data: data3,
    //     options: {
    //     scales: {
    //         y: {
    //         beginAtZero: true
    //         }
    //     }
    //     },
    // };

    // const myChart3 = new Chart(
    //   document.getElementById('myChart3'),
    //   config3
    // );





    const data3 = {
        labels: [
            'Gener',
            'Febrer',
            'Març',
            'Abril',
            'Maig',
            'Juny',
            'Juliol',
            'Agost',
            'Septembre',
            'Octubre',
            'Novembre',
            'Decembre'
        ],
    datasets: [{
        label: 'Numero de trucades per mesos',
        data: [<?php echo $meses[0] ?>, <?php echo $meses[1] ?>,
        <?php echo $meses[2] ?>, <?php echo $meses[3] ?>, <?php echo $meses[4] ?>,
        <?php echo $meses[5] ?>, <?php echo $meses[6] ?>, <?php echo $meses[7] ?>, <?php echo $meses[8] ?>,
        <?php echo $meses[9] ?>, <?php echo $meses[10] ?>, <?php echo $meses[11] ?>],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
    }]
    };

    const config3 = {
        type: 'line',
        data: data3,
    };

    const myChart3 = new Chart(
      document.getElementById('myChart3'),
      config3
    );


</script>
@endsection
