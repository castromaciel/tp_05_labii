<?php
$rutaEstilos = './css';
require_once("./php/encabezado.php");
?>

<main class="container d-flex align-items-center justify-content-center text-white">

  <form class="bg-black col-6 d-flex flex-column align-items-center justify-content-center p-4 gap-3 border border-light-subtle rounded shadow" action="./php/consulta.php" method="POST">
    <header>
      <h3>Consulta de sueldo</h3>
      <p class="text-secondary">Ingrese su numero de legajo</p>
    </header>

    <section>
      <input type="text" id="legajo" name="legajo" class="form-control" required />
    </section>

    <input type="submit" value="consultar" class="btn btn-outline-light" />
  </form>
</main>

<?php
require_once("./php/pie.php");
?>