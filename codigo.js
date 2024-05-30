function calcula_magnitud_absoluta() {
    var magnitud_aparente = 8;
    var angulo_paralaje = 0.01;
    var magnitud_absoluta = magnitud_aparente + 5 * (Math.log10(angulo_paralaje) + 1);
    var resultado = document.getElementById("resultadoA");
    resultado.innerHTML = "La magnitud absoluta de la estrella es: " + magnitud_absoluta.toFixed(2);
}