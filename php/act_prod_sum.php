<?php
	$clave=$_POST['clave'];
	$Cantidad=$_POST['cantidad'];
	$actual=$_POST['actual'];
	$rfcprov=$_POST['rfcprov'];
	
$real=$Cantidad+$actual;
	
		$conn = new mysqli("localhost", "root", "", "pruebas2");
	  
		if (mysqli_connect_errno()) {
		die("No se puede conectar a la base de datos:" . mysqli_connect_error());
		}else{
		
		   
		}
		   

		$sentencia="UPDATE `productos` SET `cantidad` = '".$real."' WHERE `productos`.`clave` = '".$clave."' ";
		$conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));
  
	  $conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));




$precio=$_GET['precio'];
$totaldesuma=$Cantidad*$precio;

$insertar2="INSERT INTO adeudoproveedoores ( `id`, `fecha`, `claveproducto`, `total`, `foliocompra`, `rfc`)
 VALUES (NULL, NOW(), '$clave', '$totaldesuma', '$folio', ' $rfcprov ')";
$resultado2=mysqli_query($conn, $insertar2);
if(!$resultado2)
{            echo("Error description: " . mysqli_error($conn));die;

    ?>
      <script type="text/javascript">
    alert("¡ Error al registrar adeudo!");
   window.location.href='captura_producto.php?clave=<?php $rfcprov  ?>';
 
</script>
   
<?php

}

else{
    
     ?>
    <script type="text/javascript">
	alert("!adeudo registrado exitosamente!");
    window.location.href='captura_producto.php?clave=<?php $rfcprov  ?>';
</script>
<?php

}
?>
















			
?>

<script type="text/javascript">
//	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='edit_prod.php';
</script>