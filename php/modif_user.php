<?php
	
modifusuario(
    $_POST['id'],
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['email'],
        $_POST['pass'],
        $_POST['color']
        );
        function modifusuario($id, $Nombre, $apellido, $usuario, $password, $tipo)
	{
		
                $conn = new mysqli("localhost", "root", "", "pruebas2");

                if (mysqli_connect_errno()) {
                die("No se puede conectar a la base de datos:" . mysqli_connect_error());
                }else{
                
        
                }
	 $sentencia="UPDATE usuarios SET id='".$id."',
     nombre='".$Nombre."',
     apellido='".$apellido."',
     usuario='".$usuario."',
     password='".$password."',
     tipo='".$tipo."'
         WHERE id='".$id."' ";
	$conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));
}
        






?>

