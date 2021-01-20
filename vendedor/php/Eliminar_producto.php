<?php
EliminarProducto($_GET['no']);
            
            function EliminarProducto($clave)
            {
                include 'conexion.php';
                $sentencia="DELETE FROM productos WHERE clave='".$clave."' ";
                $conn->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
        
            }
        ?>
        
        <script type="text/javascript">
            alert("¡ Producto Eliminado !");
            window.location.href='edit_prod.php';
        </script>
         