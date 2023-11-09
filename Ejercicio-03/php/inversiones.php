<?php
  $rutaEstilos = '../css';
  require('../php/encabezado.php');
  require('../php/funciones.php');

  if(!empty($_POST['plazo'])) {
    $plazo = $_POST['plazo'];

    $montosPorPlazo = obtenerMontosPorPlazo($plazo, '../../Ejercicio-02/txt/inversiones.txt');

?>

  <main class="">
    <header>
      <?php 
        echo '<h1 class="text-center">Inversiones a '. $plazo .' días</h1>';
      ?>
    </header>

    <section>
      <?php
        $count = 1;

        foreach($montosPorPlazo as $nombre => $monto) {
          crearTarjeta($nombre, $monto, $plazo, $count);
          $count ++;
        }
      ?>
    </section>

    <footer class="text-white text-center bg-dark py-2">
      <p class="m-0">
        Copyright 2023 - Cátedra Laboratorio II
      </p>
    </footer>
  </main>


<?php
  } else {
    echo '<h1>Faltan datos</h1>';
  }
?>