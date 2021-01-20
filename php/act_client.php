<?php
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$a_pat=$_POST['a_pat'];
    $a_mat=$_POST['a_mat'];
	$domicilio=$_POST['domicilio'];

	
	
		$conn = new mysqli("localhost", "root", "", "pruebas2");
	  
		if (mysqli_connect_errno()) {
		die("No se puede conectar a la base de datos:" . mysqli_connect_error());
		}else{
		
		   
		}
           
        


        $sentencia="UPDATE clientes SET clave='".$clave."',
        nombre='".$nombre."',
        apellido_paterno='".$a_pat."',
        apellido_materno='".$a_mat."',
        domicilio='".$domicilio."'
        WHERE clave='".$clave."' ";
       $conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));





	
			
?>

<script type="text/javascript">
//	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='clientes.php?editar=1';
</script>