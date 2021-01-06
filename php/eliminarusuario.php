<?php
EliminarProducto($_GET['rfc']);
            
            function EliminarProducto($clave)
            {
                include 'conexion.php';
                $sentencia="DELETE FROM usuarios WHERE id='".$clave."' ";
                $conn->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
        
            }
        ?>
        
        <script type="text/javascript">
            alert("¡ Usuario Eliminado !");
            window.location.href='editar_usuarios.php';
        </script>
         