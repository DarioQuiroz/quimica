
<?php  

include 'config.php';
include 'carrito.php';

require_once "cavecera.php";
?>


<div class="container" style="margin: 15%">
      <h1>Nuevo Proveedor</h1>
            <form method="post"  enctype="multipart/form-data">
            <div class="form-group">
    <label for="provider_name">clave</label>
    <input class="form-control" type="text" name="clave" id="clave" required/>
  </div>

  <div class="form-group">
    <label for="provider_focus">Razón social </label>
    <input class="form-control" type="text" name="nombre" id="nombre" required/>
  </div>



             <input class="btn btn-primary" type="submit" name="btnAccion" value="Registrar proveedor">
<a class="btn btn-primary" href="principal.php">cancelar</a>
            </form>
        </div>
        </div>
<?php  
require_once "footer.php";

?>
