<?php /*
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion==null || $varsesion='')
{
    echo'usted no tiene autorizacion';
    header("location:loguin_porv.php");
die();
  }*/
?><?php require_once "scripts.php"; ?>

<?php
include 'carrito.php';

  $consulta=consultarprod($_GET['clave']);

  function consultarprod( $clave )
  {

    $conn = new mysqli("localhost", "root", "", "pruebas2");

    if (mysqli_connect_errno()) {
    die("No se puede conectar a la base de datos:" . mysqli_connect_error());
    }else{
    
       
    }



   $sentencia="SELECT * FROM clientes WHERE clave='".$clave."' ";
   $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['clave'],
    $fila['nombre'],
    $fila['apellido_paterno'],
    $fila['apellido_materno'],
    $fila['domicilio']
     ];
  }
?>


  <?php require_once "cavecera.php"; ?>

    

    <div class="container">
      <h1>Editar producto</h1>


      <form  action="act_client.php" accept-charset="UTF-8" method="post">
<input name="utf8" type="hidden" value="&#x2713;" />
 
  <div class="form-group">
    <label  for="provider_name">clave</label>
    <input class="form-control" type="hidden" name="clave" id="clave" value="<?php echo $consulta[0] ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_focus">Nombre </label>
    <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $consulta[1] ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_contact">Apellido Paterno</label>
    <input class="form-control" type="text" name="a_pat" id="a_pat" value="<?php echo $consulta[2] ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_address">Apellido Materno</label>
    <input class="form-control" type="text" name="a_mat" id="a_mat" value="<?php echo $consulta[3] ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_phone">Domicilio</label>
    <input class="form-control" type="text" name="domicilio" id="domicilio" value="<?php echo $consulta[4] ?>" required/>
  </div>



  <div class="form-group">
  <div class="float-right">
  <?php  
  echo "<a class='text-danger' data-confirm='Esta acción no se puede revertir' rel='nofollow' data-method='delete' href='Eliminar_producto.php?no=". $_GET['id']."''>"?>Borrar Cliente</a> </th>
        
      </div>
  <p>    <input type="submit" name="commit" value="Actualizar" class="btn btn-primary" data-disable-with="Actualizar" /></p>

      <a class="btn btn-primary" href="edit_prod.php">Cancelar</a>
  </div>
</form>

    </div>

    <footer class="footer text-muted bg-light">
  <div class="container">
    <span>© 2019 Parque Industrial Queretaro</span>
    <ul class="list-inline mb-0 float-right">
    </ul>
  </div>
</footer>

  </body>
</html>
