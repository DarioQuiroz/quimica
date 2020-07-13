
<?php
include 'carrito.php';

    $conn = new mysqli("localhost", "root", "", "pruebas2");

    if (mysqli_connect_errno()) {
        die("No se puede conectar a la base de datos:" . mysqli_connect_error());
    } else {
        
    }
    $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
       // $total = $_POST['total'];
  
        foreach ($_SESSION['carrito'] as $indice => $producto) {
            $total = $total + ($producto['CANTIDAD'] * $producto['PRECIO']);
          }
           

echo  $clave ;
echo $nombre;
echo $total;
        $insertar="INSERT INTO `tblventas`
        (`id`, `fecha`, `nombre`, `total`, `clave`) 
        VALUES 
        (NULL, NOW(), '$nombre', '$total', '$clave');";
        $resultado=mysqli_query($conn, $insertar);



        if (!$resultado) {
            echo("Error description: " . mysqli_error($conn));die;
         }
    
         session_start();
     
         session_destroy();
         header("location:ventas.php");
         ?>