<?php

include("conexion.php");

$nombre = $_POST["email"];
$pass = $_POST["pass"];
$tipo=0;
$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);



while($mostrar=mysqli_fetch_array($query)){
	$tipo=$mostrar['tipo'];

	if( $tipo==1){
	  header("location:quimica1/php/principal.php?us=$tipo");
	}


	else if( $tipo==2)
	{
	  header("location:quimica1/vendedor/php/principal.php?us=$tipo");
	}
	else
	{
	  ?>
	  <script type="text/javascript">
  alert("¡Los datos que ingresaste no corresponden a ninguna cuenta!");
  window.location.href='index.php';
  </script>
	 <?php
  
	}
	echo '<br>';
  
  
  }
  

/*

if($nr == 1)
{
	echo "<script> window.location= 'quimica1/php/principal.php' </script>";
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}
	*/


?>