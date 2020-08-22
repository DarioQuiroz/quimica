
<?php  

include 'config.php';
include 'carrito.php';

require_once "cavecera.php";
?>


<div class="container" style="margin: 15%">
      <h1>Nuevo cliente</h1>
            <form method="post"  enctype="multipart/form-data">
            <div class="form-group">
    <label for="provider_name">clave</label>
    <input class="form-control" type="text" name="clave" id="clave" required/>
  </div>

  <div class="form-group">
    <label for="provider_focus">Nombre </label>
    <input class="form-control" type="text" name="nombre" id="nombre" required/>
  </div>

  <div class="form-group">
    <label for="provider_contact">Apellido paterno </label>
    <input class="form-control" type="text" name="apellido_paterno" id="apellido_paterno" required/>
  </div>

  <div class="form-group">
    <label for="provider_address">Apellido Materno</label>
    <input class="form-control" type="text" name="	apellido_materno" id="	apellido_materno" required/>
  </div>

  <div class="form-group">
    <label for="provider_phone">Domicilio</label>
    <input class="form-control" type="text" name="domicilio" id="domicilio" required/>
  </div>


             <input class="btn btn-primary" type="submit" name="btnAccion" value="Registrar">
<a class="btn btn-primary" href="principal.php">cancelar</a>
            </form>
        </div>
        </div>
<?php  
require_once "footer.php";

?>
