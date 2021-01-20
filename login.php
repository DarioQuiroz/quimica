<?php

include("conexion.php");

if(isset($_POST['btnAccion'])){

    switch ($_POST['btnAccion']) {
		
		case 'Ingresar':
			


$email = $_POST["email"];
$pass = $_POST["pass"];
$tipo=0;
$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '".$email."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);



while($mostrar=mysqli_fetch_array($query)){
	echo $nombre=$mostrar['nombre'];
	$nombre=$mostrar['nombre'];
	$apellido=$mostrar['apellido'];
	$tipo=$mostrar['tipo'];
	
	

	if( $tipo==1){

	
			$sqlgrabar = "INSERT INTO usuarios (id, nombre, apellido, usuario, password, tipo) values
			 (NULL, '$nombre','$apellido','$email','$pass','$tipo')";
		
		if(mysqli_query($conn, $sqlgrabar))
		{
			echo "<script> alert('Usuario registrado: $email'); </script>";
		}else 
		{
			echo "Error: " .$sqlgrabar."<br>".mysql_error($conn);
		}
				
				
		 header("location:quimica1/php/principal.php");
	  

	}


	else if( $tipo==2)
	{
		$sqlgrabar = "INSERT INTO usuarios (id, nombre, apellido, usuario, password, tipo) values
		(NULL, '$nombre','$apellido','$email','$pass','$tipo')";
   
   if(mysqli_query($conn, $sqlgrabar))
   {
	   echo "<script> alert('Usuario registrado: $email'); </script>";
   }else 
   {
	   echo "Error: " .$sqlgrabar."<br>".mysql_error($conn);
   }
	   
	  header("location:quimica1/vendedor/php/principal.php");
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
  
        break;
    }

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