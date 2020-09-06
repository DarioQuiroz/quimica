<?php
	
ModificarProveedor(
        $_POST['RFC'],
        $_POST['Nombre']
        );
        function ModificarProveedor($RFC, $Nombre)
	{
		
                $conn = new mysqli("localhost", "root", "", "pruebas2");

                if (mysqli_connect_errno()) {
                die("No se puede conectar a la base de datos:" . mysqli_connect_error());
                }else{
                
        
                }
	 $sentencia="UPDATE proveedores SET rfc='".$RFC."',
         razonsocial='".$Nombre."'
         WHERE rfc='".$RFC."' ";
	$conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));
        }
        






?>

<script type="text/javascript">
	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='edit_prov.php';
</script>
