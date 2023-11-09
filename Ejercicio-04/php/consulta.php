<?php
$rutaEstilos = '../css';
require('./encabezado.php');

if (!empty($_POST['legajo'])) {

  $numeroLegajo = $_POST['legajo'];

  $archivo = fopen('../../sueldos.txt', 'r');
  $existeLegajo = false;

  if ($archivo) {

    while (!feof($archivo)) {
      $linea = fgets($archivo);
      if ($linea != '') {
        $empleado = explode(';', $linea);
        $legajoActual = trim($empleado[0]);

        if ($legajoActual === $numeroLegajo) {
          $apellido = $empleado[1];
          $nombres = $empleado[2];

          $nombreArray = explode(' ', $nombres);
          $nombreCompleto = $apellido . ', ';

          foreach ($nombreArray as $nombre) {
            $nombreCompleto .= $nombre . ' ';
          }

          $sueldo = $empleado[3];
          $sueldoFormateado = number_format($sueldo, '2', ',', '.');

          $existeLegajo = true;
        }
      }
    }
    fclose($archivo);
  }

  if ($existeLegajo) {

?>

    <main class="container">
      <section class="row">
        <article class="col-4 border rounded-1 border-info">
          <p><strong>Legajo</strong></p>
          <?php echo "<p>$numeroLegajo</p>" ?>
        </article>
        <article class="col-8 border rounded-1 border-warning">
          <p><strong>Apellido y Nombre</strong></p>
          <?php echo "<p>$nombreCompleto</p>" ?>


        </article>
        <article class="col-12 border rounded-1 border-danger text-center">
          <p><strong>Sueldo a cobrar</strong></p>
          <?php echo "<p>$". $sueldoFormateado ."</p>" ?>

        </article>

        <footer class="col-12 text-white text-center bg-dark py-2">
          <p class="m-0">
            Copyright 2023 - Cátedra Laboratorio II
          </p>
        </footer>
      </section>

    </main>

<?php
  } else {
    echo "<h1>Legajo inexistente</h1>";
    header('refresh:3;url=../index.php');
  }
} else {
  echo "<h1>Faltan datos</h1>";
}
?>