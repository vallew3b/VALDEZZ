<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: Calcular la magnitud absoluta de la estrella</h2>
        <p>Descripción:</p>
        <p>El ángulo de paralaje de una estrella es de 0.01 segundos de arco y su magnitud aparente es 8.<br></p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/EST.jpeg" alt="Esquema de la estrella">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        M = m - 5 * (log(d) - 1)<br>
        Donde: <br>
        M es la magnitud absoluta de la estrella<br>
        m es la magnitud aparente de la estrella<br>
        p es el ángulo de paralaje en segundos de arco
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        m = 8.<br>
        p = 0.01 segundos.
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <button type="submit">Presiona para calcular</button>
        </form>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              function calcula_magnitud_absoluta($magnitud_aparente, $angulo_paralaje) {
                  return $magnitud_aparente + 5 * (log10($angulo_paralaje) + 1);
              }

              $magnitud_aparente = 8;
              $angulo_paralaje = 0.01;
              $magnitud_absoluta = calcula_magnitud_absoluta($magnitud_aparente, $angulo_paralaje);
              echo "La magnitud absoluta de la estrella es: " . number_format($magnitud_absoluta, 2);
          }
          ?>
        </div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
