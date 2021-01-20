<?php
EliminarProducto($_GET['id']);
            
            function EliminarProducto($clave)
            {
                include 'conexion.php';
                $sentencia="DELETE FROM gastos WHERE id='".$clave."' ";
                $conn->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
        
            }
        ?>
        
        <script type="text/javascript">
            alert("¡ Gasto Eliminado !");
            window.location.href='gastos.php?ver=3';
        </script>
         