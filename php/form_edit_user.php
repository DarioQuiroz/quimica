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

  $consulta=consultarprod($_GET['rfc']);

  function consultarprod( $no_prod )
  {

    $conn = new mysqli("localhost", "root", "", "pruebas2");

    if (mysqli_connect_errno()) {
    die("No se puede conectar a la base de datos:" . mysqli_connect_error());
    }else{
    
       
    }



   $sentencia="SELECT * FROM usuarios WHERE id='".$no_prod."' ";
   $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['id'],
    $fila['nombre'],
    $fila['apellido'],
    $fila['usuario'],
    $fila['password'],
    $fila['tipo']
     ];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Piqueretaro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="emH/NWYpe9Jc4LJ6xsLkXihIfOyySJ0V5xU67cwuxX+SROOfkrq+GBvSzYhF6YQSCOWAgom9M0zH5ZgZEPnFdg==" />
<link rel="stylesheet" media="all" href="../assets/application-6eaf635c425c1686eab15669fd509649ff45060b315fe52358f8f7aef81136c8.css" data-turbolinks-track="reload" />
<script src="../assets/application-c2684059e5b98adb61b71a5d9ac339856999beefb748deb1e974ab2a7c2943d0.js" data-turbolinks-track="reload"></script>

  </head>

  <body>
    

  <?php require_once "cavecera.php"; ?>

    
    <div class="container">
    <div class="col-4" style="margin-bottom: 15%;"></div>

      <h1>Editar Usuario</h1>


      <form  action="modif_user.php" accept-charset="UTF-8" method="post">
<input name="utf8" type="hidden" value="&#x2713;" />
 
<div class="form-group">
										<input type="text" name="id" id="id" tabindex="3" class="form-control" placeholder="<?php echo $consulta[0] ?>" required>
									</div>

  <div class="form-group">
										<input type="text" name="nombre" id="nombre" tabindex="3" class="form-control" placeholder="<?php echo $consulta[1] ?>" required>
									</div>

							
									<div class="form-group">
										<input type="text" name="apellido" id="apellido" tabindex="4" class="form-control" placeholder="<?php echo $consulta[2] ?>" required>
									</div>

							<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="" value="<?php echo $consulta[3] ?>" required>
									</div>
									<div class="form-group">
										<input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="<?php echo $consulta[4] ?>" required>
									</div>
								
									<div class="form-group">
									<label for="cars">tipo de usuario:</label>
									<select  name="color">
									 <option value="1"> administrador</option>
									 <option value="2"> solo ventas</option>

									</select>							
								</div>
								
  <div class="form-group">
  <div class="float-right">
  <?php  
  echo "<a class='text-danger' data-confirm='Esta acción no se puede revertir' rel='nofollow' data-method='delete' href='eliminarusuario.php?rfc=". $consulta[0] ."''>"?>Borrar Usuario</a> </th>
        
      </div>
  <p>    <input type="submit" name="commit" value="Actualizar Usuario" class="btn btn-primary" data-disable-with="Actualizar" /></p>

      <a class="btn btn-primary" href="editar_usuario.php">Cancelar</a>
  </div>
</form>

    </div>

    <footer class="footer text-muted bg-light">
  <div class="container">
    <ul class="list-inline mb-0 float-right">
    </ul>
  </div>