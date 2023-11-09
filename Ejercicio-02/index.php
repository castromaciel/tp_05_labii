<?php 
  $rutaEstilos = './css';
  require_once("./php/encabezado.php");
?>

<main class="container d-flex flex-column align-items-center">
  <header>
    <h1>Financiera</h1>
  </header>
  
  <form class="col-8 bg-info p-4 d-flex flex-column gap-3" method="POST" action="./php/interes.php">
    <section>
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control">
    </section>

    <section>
      <label for="deposito" class="form-label">Depósito inicial</label>
      <input type="text" name="deposito" id="deposito" class="form-control">
    </section>

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

    <input type="submit" value="simular" class="btn btn-danger" />
  </form>
</main>

<?php
  require_once("./php/pie.php");
?>