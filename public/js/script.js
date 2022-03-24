document.addEventListener('DOMContentLoaded', () => {

    let minutos = 00,
        segundos = 00,
        segundosContador = 00,
        llamadaCrono,
        crono = document.getElementById("crono");
        boton = document.getElementById("botonCogerLlamada"),
        codigoLlamada = document.getElementById("codiTrucadaP"),
        codigo = 0;


        crearCodigo();

        document.getElementById("temps_trucada").setAttribute('value',segundosContador); /* por hacer */

    function cronometro() {

        segundos++;
        segundosContador++;

        if (segundos < 10) {
            segundos = `0` + segundos;
        }

        if (segundos > 59) {
            segundos = `00`;
            minutos++;
        }
        crono.innerHTML = minutos+":"+segundos;
    }

    boton.addEventListener("click", llamarTimer);

    function llamarTimer() {
        llamadaCrono = setInterval(cronometro, 1000);
    }

    function crearCodigo() {

        codigo = Date.now();
        let codigoFinal = String(codigo).slice(-10)
        codigoLlamada.innerHTML = codigoFinal;
    }



})
