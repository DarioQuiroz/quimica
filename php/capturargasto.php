



<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';




  require_once "cavecera.php";
?>


<div class="container" style="margin: 15%">
      <h1>Nuevo gasto</h1>
            <form method="post"  enctype="multipart/form-data">
            <div class="form-group">
    <label for="provider_name">Concepto</label>
    <input class="form-control" type="text" name="Concepto" id="Concepto" required/>
  </div>

  <div class="form-group">
    <label for="provider_focus">Cantidad $ </label>
    <input class="form-control" type="text" name="Cantidad" id="Cantidad" required/>
  </div>


             <input class="btn btn-primary" type="submit" name="btnAccion" value="Registrar gasto">
<a class="btn btn-primary" href="principal.php">cancelar</a>
            </form>
        </div>
        </div>
<?php  
require_once "footer.php";

?>

