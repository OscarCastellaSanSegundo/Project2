document.addEventListener('DOMContentLoaded', () => {

    let minutos = 00,
        segundos = 00,
        llamadaCrono,
        crono = document.getElementById("timer");
        boton = document.querySelector("botonCogerLlamada");

    function cronometro() {

        segundos++;

        if (segundos < 10) {
            segundos = `0` + segundos;
        }

        if (segundos > 59) {
            segundos = `00`;
            minutos++;
        }

        if (minutos < 10) {
            minutos = `0` + minutos;
        }

        crono.innerHTML = `${minutos}:${segundos}`
    }

    boton.addEventListener("click", myFunction);

    function myFunction() {
        llamadaCrono = setInterval(cronometro, 1000)
    }





})
