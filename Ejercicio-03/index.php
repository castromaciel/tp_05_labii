<?php 
  $rutaEstilos = './css';
  require_once("./php/encabezado.php");
?>

<main class="d-flex flex-column align-items-center bg-info pt-4 pb-0">
  <header>
    <h1>Consulta por plazo</h1>
  </header>
  
  <form class="col-8 d-flex flex-column gap-3" method="POST" action="./php/inversiones.php">

    <section>
      <h3>Plazo</h3>
      <section class="form-check form-switch">
        <input class="form-check-input" type="radio" role="switch" id="plazo30" name="plazo" value="30"/>
        <label class="form-check-label" for="plazo30">30 días</label>
      </section>
      <section class="form-check form-switch">
        <input class="form-check-input" type="radio" role="switch" id="plazo45" name="plazo" value="45"/>
        <label class="form-check-label" for="plazo45">45 días</label>
      </section>
      <section class="form-check form-switch">
        <input class="form-check-input" type="radio" role="switch" id="plazo60" name="plazo" value="60"/>
        <label class="form-check-label" for="plazo60">60 días</label>
      </section>
      <section class="form-check form-switch">
        <input class="form-check-input" type="radio" role="switch" id="plazo90" name="plazo" value="90"/>
        <label class="form-check-label" for="plazo90">90 días</label>
      </section>
    </section>

    <input type="submit" value="consultar" class="btn btn-warning" />
  </form>

  <footer class="text-white text-center bg-dark w-100">
    <p class="m-0 py-2">
      Copyright 2023 - Cátedra Laboratorio II
    </p>
  </footer>
</main>

<?php
  require_once("./php/pie.php");
?>