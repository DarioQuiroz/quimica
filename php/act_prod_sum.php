<?php
	$clave=$_POST['clave'];
	$Cantidad=$_POST['cantidad'];
	echo "$clave";
	echo "$Cantidad";
		
SumarProducto($clave, $Cantidad);

        function SumarProducto($clave,$Cantidad)
	{
		$conn = new mysqli("localhost", "root", "", "pruebas2");
	  
		if (mysqli_connect_errno()) {
		die("No se puede conectar a la base de datos:" . mysqli_connect_error());
		}else{
		
		   
		}
		   
		 $sentencia="UPDATE `productos` SET `cantidad` = '".$Cantidad."' WHERE `productos`.`clave` = '".$clave."' ";
	  
	  $sentencia="UPDATE productos SET cantidad='".$Cantidad."'       WHERE clave='".$clave."' ";
	  $conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));

			}
?>

<script type="text/javascript">
//	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='edit_prod.php';
</script>