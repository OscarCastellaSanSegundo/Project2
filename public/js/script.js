document.addEventListener('DOMContentLoaded', () => {

    let minutos = 00,
        segundos = 00,
        llamadaCrono,
        crono = document.getElementById("crono");
        boton = document.getElementById("botonCogerLlamada");

    function cronometro() {

        segundos++;

        if (segundos < 10) {
            segundos = `0` + segundos;
        }

        if (segundos > 59) {
            segundos = `00`;
            minutos++;
        }

/*         if (minutos < 10) {
            minutos = `0` + minutos;
        } */

        crono.innerHTML = minutos+":"+segundos;
    }

    boton.addEventListener("click", llamarTimer);

    function llamarTimer() {
        llamadaCrono = setInterval(cronometro, 1000)
    }





})
