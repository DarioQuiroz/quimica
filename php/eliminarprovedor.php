<?php
EliminarProducto($_GET['rfc']);
            
            function EliminarProducto($clave)
            {
                include 'conexion.php';
                $sentencia="DELETE FROM proveedores WHERE rfc='".$clave."' ";
                $conn->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
        
            }
        ?>
        
        <script type="text/javascript">
            alert("¡ Provedor Eliminado !");
            window.location.href='edit_prov.php';
        </script>
         