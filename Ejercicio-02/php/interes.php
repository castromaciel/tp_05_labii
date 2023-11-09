<?php
$rutaEstilos = '../css';
require_once './encabezado.php';
require_once './funciones.php';

if (!empty($_POST['nombre']) && !empty($_POST['deposito']) && !empty($_POST['plazo'])) {

  $nombreUsuario = $_POST['nombre'];
  $depositoInicial = $_POST['deposito'];
  $cantidadDias = $_POST['plazo'];

  $interesesObtenidos = calcularIntereses($depositoInicial, $cantidadDias);

  $interesesObtenidos = number_format($interesesObtenidos, '2', ',', '.');
  $depositoInicial = number_format($depositoInicial, '2', ',', '.');

  $linea = implode(';', $_POST);
  $carpeta = '../txt/';

  if (!file_exists($carpeta)) {
    mkdir($carpeta);
  }

  $nombre = 'inversiones.txt';
  $archivo = fopen($carpeta . $nombre, 'a');
  fputs($archivo, $linea . PHP_EOL);
  fclose($archivo);

?>
  <main class="container">
    <header>
      <?php 
        echo '<h1>Hola '.$nombreUsuario.'!</h1>';
      ?>
    </header>
    <section>
      <h2 class="text-center">Simulador de plazos fijos</h1>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>Plazo</th>
            <?php echo '<td>' . $cantidadDias . ' días</td>' ?>
          </tr>
          <tr>
            <th>Depósito inicial</th>
            <?php echo '<td>$' . $depositoInicial . '</td>' ?>
          </tr>
          <tr>
            <th>Intereses ganados </th>
            <?php echo '<td>$' . $interesesObtenidos . '</td>' ?>
          </tr>
        </tbody>
      </table>
    </section>
    <hr>
  </main>

<?php
} else {
  echo 'Faltan datos para simular su plazo fijo!';
  header('refresh=3; url="../index.php"');
}
?>