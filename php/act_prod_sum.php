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
$forma=$_POST['forma'];
$nombre=$_POST['nombre'];
$folio=$_POST['folio'];
$rs=$_POST['rs'];
echo $forma;

if($forma == 'De Contado'){
	
    
		$insertar2="INSERT INTO comprasproducto ( `id`, `fecha`, `claveproducto`, `total`, `foliocompra`, `rfc`, `razonsocial`, `forma`)
		VALUES (NULL, NOW(), '$clave', '$totaldesuma', '$folio', ' $rfcprov ', ' $rs ', '2')";
		$resultado2=mysqli_query($conn, $insertar2);
		if(!$resultado2)
		{            echo("Error description: " . mysqli_error($conn));die;
		
		   ?>
		
			 <script type="text/javascript">
		   alert("¡La compra no registró!");
		window.location.href='captura_producto.php?clave=<?php $rfcprov  ?>&&rs=<?php $rs  ?>&&opc=2';
		
		</script>
		  
		<?php
		
		}
		
		else{
		   
			?>
		   <script type="text/javascript">
		   alert("!Compra registrada con éxito!");
		  window.location.href='captura_producto.php?clave=<?php echo $rfcprov  ?>&&rs=<?php echo $rs  ?>&&opc=2';
		</script>
		<?php
		
		}
		
		
			# code...
		
    echo "la compra es de contado";
} else {
	echo "la compra es de credito";
	{
    
		$insertar2="INSERT INTO adeudoproveedoores ( `id`, `fecha`, `claveproducto`, `total`, `foliocompra`, `rfc`, `razonsocial`)
		VALUES (NULL, NOW(), '$clave', '$totaldesuma', '$folio', ' $rfcprov ', ' $rs ')";
		$resultado2=mysqli_query($conn, $insertar2);
		
		
		
		
		
		$insertar2="INSERT INTO comprasproducto ( `id`, `fecha`, `claveproducto`, `total`, `foliocompra`, `rfc`, `razonsocial`, `forma`)
		VALUES (NULL, NOW(), '$clave', '$totaldesuma', '$folio', ' $rfcprov ', ' $rs ', '1')";
		$resultado2=mysqli_query($conn, $insertar2);
		if(!$resultado2)
		{            echo("Error description: " . mysqli_error($conn));die;
		
		   ?>
		
			 <script type="text/javascript">
		   alert("¡La compra no registró!");
		window.location.href='edit_prod.php';

		</script>
		  
		<?php
		
		}
		
		else{
		   
			?>
		   <script type="text/javascript">
		   alert("!Compra registrada con éxito!");
		  window.location.href='edit_prod.php';
		</script>
		<?php
		
		}
		
		
		
		
		if(!$resultado2)
		{            echo("Error description: " . mysqli_error($conn));die;
		
		   ?>
		
			 <script type="text/javascript">
		   alert("¡ Error al registrar adeudo!");
		window.location.href='edit_prod.php';
		
		</script>
		  
		<?php
		
		}
		
		else{
		   
			?>
		   <script type="text/javascript">
		   alert("!adeudo registrado exitosamente!");
		 window.location.href='edit_prod.php';
		</script>
		<?php
		
		}
		
		
			# code...
		}
}
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
















