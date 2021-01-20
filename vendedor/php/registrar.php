<?php
include("conexion.php");
require_once "cavecera.php";



$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email = $_POST["email"];
$pass = $_POST["pass"];
$color=$_POST['color'];

echo $email;
echo $pass;
echo $color;
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO usuarios (id, nombre, apellido, usuario, password, tipo) values
	 (NULL, '$nombre','$apellido','$email','$pass','$color')";

if(mysqli_query($conn,$sqlgrabar))
{
	echo "<script> alert('Usuario registrado: $email');window.location= 'index.php' </script>";
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>
	
	


                         