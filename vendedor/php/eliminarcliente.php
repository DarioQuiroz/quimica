<?php
EliminarProducto($_GET['no']);
            
            function EliminarProducto($clave)
            {
                include 'conexion.php';
                $sentencia="DELETE FROM `clientes` WHERE `clientes`.`clave`='".$clave."' ";
     
                $conn->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
        
            }
        ?>
        
        <script type="text/javascript">
            alert("¡ Cliente Eliminado !");
            window.location.href='clientes.php?editar=1';
        </script>
         