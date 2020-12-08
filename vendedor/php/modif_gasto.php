<?php
	
ModificarProveedor($_POST['id'],
                    $_POST['Concepto'],
                    $_POST['Cantidad']
        );
        function ModificarProveedor($id, $concepto, $cantidad)
	{
		
                $conn = new mysqli("localhost", "root", "", "pruebas2");

                if (mysqli_connect_errno()) {
                die("No se puede conectar a la base de datos:" . mysqli_connect_error());
                }else{
                
        
                }
	 $sentencia="UPDATE gastos SET concepto='".$concepto."',
         cantidad='".$cantidad."'
         WHERE id='".$id."' ";
	$conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));
        }
        






?>

<script type="text/javascript">
	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='gastos.php?ver=2';
</script>
