<?php

function obtenerMontosPorPlazo($plazo, $direccionArchivo) {
  $archivo = fopen($direccionArchivo, 'r');
  $montos = [];

  if ($archivo) {

    while (!feof($archivo)) {
      $linea = fgets($archivo);
      if ($linea != '') {
        $detalleInversion = explode(';', $linea);
        $plazoActual = trim($detalleInversion[2]);

        if ($plazoActual === $plazo) {
          $nombre = $detalleInversion[0];
          $monto = $detalleInversion[1];

          $montos[$nombre] = $monto;
        }
      }
    }
    fclose($archivo);
  }

  return $montos;
}

function crearTarjeta($nombre, $monto, $plazo, $count = 1) {
  echo '<article class="bg-warning p-3 d-flex flex-row border">';

  echo '<p>'. $count . '.</p>'; 

  echo '<section class="w-100">';
  echo '<section class="d-flex justify-content-between">';
  echo '<p class="m-0"><strong> '. $nombre . '</strong></p>';
  echo '<span class="badge text-bg-primary">'. $plazo .'</span>';
  echo '</section>';
  
  $montoFormateado = number_format($monto, '2', ',', '.');
  echo '<p class="m-0"> $' . $montoFormateado . '</p>';
  echo '</section>';


  echo '</article>';

}
?>