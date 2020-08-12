<?php
	
ModificarProducto(
        $_POST['clave'],
        $_POST['comercial'],
        $_POST['activo'],
        $_POST['Presentacion'],
        $_POST['Cantidad'],
        $_POST['total'],
        $_POST['unitario'],
        $_POST['valor_total'],
        $_POST['Linea']
        );
        function ModificarProducto($clave, $comercial, $activo, $Presentacion, $Cantidad, $total, $unitario, $valor_total, $linea)
	{
		
                $conn = new mysqli("localhost", "root", "", "pruebas2");

                if (mysqli_connect_errno()) {
                die("No se puede conectar a la base de datos:" . mysqli_connect_error());
                }else{
                
        
                }
	 $sentencia="UPDATE productos SET clave='".$clave."',
         nombre='".$comercial."',
         in_act='".$activo."',
         presentacion='".$Presentacion."',
         cantidad='".$Cantidad."',
         cantdad_total='".$total."',
         valor_unitario='".$unitario."',
         valor_total='".$valor_total."',
         linea='".$linea."'
         WHERE clave='".$clave."' ";
	$conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));
        }
        







$rfcprov=$_GET['clave'];


$insertar2="INSERT INTO adeudoproveedoores ( `id`, `fecha`, `claveproducto`, `total`, `foliocompra`, `rfc`)
 VALUES (NULL, NOW(), '$clave', '$valor_total', '$folio', ' $rfcprov ')";
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

<script type="text/javascript">
	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='edit_prod.php';
</script>
