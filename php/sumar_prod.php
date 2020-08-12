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


$consulta=consultarprod($_GET['id']);

function consultarprod( $no_prod )
{


  $conn = new mysqli("localhost", "root", "", "pruebas2");

  if (mysqli_connect_errno()) {
  die("No se puede conectar a la base de datos:" . mysqli_connect_error());
  }else{
  
     
  }


 $sentencia="SELECT * FROM productos WHERE clave='".$no_prod."' ";
 $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
 $fila=$resultado->fetch_assoc();

 return [
  $fila['clave'],
  $fila['nombre'],
  $fila['in_act'],
  $fila['presentacion'],
  $fila['cantidad'],
  $fila['cantdad_total'],
  $fila['valor_unitario'],
  $fila['valor_total'],
   ];
}
?>

    
    <?php  
     
      require_once "cavecera.php";
   
 ?>
 
 <div class="container" style="margin: 15%">
      <h1>Sumar Producto</h1>



      <form action="act_prod_sum.php" method="POST">
  <p> Nombre:<label for="provider_name"><?php echo $consulta[1] ?></label></p>
  
  <p>Clave:<label for="provider_name"><?php echo $consulta[0] ?></label></p>
  <p>Cantidad Actual:<label for="provider_name"><?php echo $consulta[4] ?></label></p>
  <input type="hidden" value="<?php echo $consulta[4] ?>" name="actual" >

<input type="hidden" value="<?php echo $consulta[0] ?>" name="clave" >

  <p> Cantidad a Sumar <input type="text" name="cantidad" ></p>

  <p> Folio de la nota <input type="text" name="folio" ></p>
  <p> RFC del Poveedor <input type="text" name="rfcprov" ></p>

  <p>
    <input type="submit" value="Enviar">
  
  </p>
</form>












 <!--


      <form  accept-charset="UTF-8" method="post">

  <div class="form-group">
    <h2 for="provider_name">clave</h2>
    
    <input class="form-control" type="text"  id="claves" value="" required/>

  </div>

 

  <div class="form-group">
    <h2 for="provider_phone">Cantidad existente</ <h2>
    <label for="provider_phone"><?php /*echo $consulta[4] ?></label>
  </div>

 
  <div class="form-group">
    <label for="provider_rfc">Cantidad a sumar</label>
    <input class="form-control" type="text"  maxlength="12" type="text"  id="cantidad" value="" required/>
  </div>


  <div class="form-group">
  <div class="float-right">
        
      </div>
  <p>    <input type="submit"  value="Actualizar" class="btn btn-primary" data-disable-with="Actualizar" /></p>

      <a class="btn btn-primary" href="edit_prod.php">Cancelar</a>
  </div>
</form>
-->
    </div>

    <?php */require_once "footer.php"; ?>
