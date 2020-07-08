<?php 
//session_start();
/*
$varsesion = $_SESSION['usuario'];
if($varsesion==null || $varsesion='')
{
    echo'usted no tiene autorizacion';
    header("location:loguin_porv.php");
die();
  }
?>
<?php
  
  $consulta=consultarprovedor($_GET['no']);

  function consultarprovedor( $no_prod )
  {
   include 'conexionvacante.php';
   $sentencia="SELECT * FROM prooductos WHERE id='".$no_prod."' ";
   $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['id'],
    $fila['nombre'],
    $fila['giro'],
    $fila['contacto'],
    $fila['direccion'],
    $fila['telefono'],
    $fila['rfc'],
    $fila['correo'],
    $fila['sitioweb'],
    $fila['Referencia1'],
    $fila['Referencia2'],
    $fila['Referencia3'],
    $fila['pdf']
    

   ];
  }*/
?>
    
    <?php   require_once "cavecera.php";
 ?>
 
 <div class="container" style="margin: 15%">
      <h1>Sumar Producto</h1>


      <form  action="actualizar_prov.php" accept-charset="UTF-8" method="post">
<input name="utf8" type="hidden" value="&#x2713;" />
<input type="hidden" name="authenticity_token" value="wj40OKzZpnUsCBJ/7ILDclQi8Hf+HAp65Qsh3D0G+p5PuiQdKcTLwXYdm1AJmTPfrbwbdu1kCGRFrblg9RImhg==" />
<input type="hidden" class="form-control" name="no"  value="<?php echo $_GET['no']?>">
  <div class="form-group">
    <label for="provider_name">clave</label>
    <input class="form-control" type="text" name="nombre" id="provider_name" value="<?php echo $consulta[1] ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_address">Presentacion</label>
    <select name="transporte">

<option>1 litro</option>

<option>5 litros</option>

<option>10 litro</option>

</select> </div>

  <div class="form-group">
    <label for="provider_phone">Cantidad</label>
    <input class="form-control" type="text" name="telefono" id="provider_phone" value="<?php echo $consulta[5] ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_rfc">Cantidad total</label>
    <input class="form-control" type="text"  maxlength="12" type="text" onKeyUp="this.value=this.value.toUpperCase();" name="rfc" id="provider_rfc" value="<?php echo $consulta[6] ?>" required/>
  </div>


  


  <div class="form-group">
  <div class="float-right">
  <?php  echo "<a class='text-danger' data-confirm='Esta acción no se puede revertir' rel='nofollow' data-method='delete' href='eliminar_prov.php?no=". $_GET['no']."''>"?>Borrar Producto</a> </th>
        
      </div>
  <p>    <input type="submit" name="commit" value="Actualizar" class="btn btn-primary" data-disable-with="Actualizar" /></p>

      <a class="btn btn-primary" href="registro_provedor.php">Cancelar</a>
  </div>
</form>

    </div>

    <?php require_once "footer.php"; ?>
