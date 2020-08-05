
<?php
include 'carrito.php';

    $conn = new mysqli("localhost", "root", "", "pruebas2");

    if (mysqli_connect_errno()) {
        die("No se puede conectar a la base de datos:" . mysqli_connect_error());
    } else {
        
    }
    $clave = $_GET['cliente'];
        $nombre = $_GET['nombre'];
        $pres = $_GET['precio'];

       // $total = $_POST['total'];
  
        foreach ($_SESSION['carrito'] as $indice => $producto) {
            $total = $total + ($producto['CANTIDAD'] * $producto['PRECIO']);

          $sentencia="UPDATE `productos` SET `cantidad` = (`cantidad` -'".$producto['CANTIDAD']."') WHERE`productos`.`clave` = '".$producto['ID']."' ";
          $conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));
    
          }
           

          
        $insertar="INSERT INTO `tblventas`
        (`id`, `fecha`, `nombre`, `total`, `clave`) 
        VALUES 
        (NULL, NOW(), '$nombre', '$total', '$clave');";
        $resultado=mysqli_query($conn, $insertar);




       





        $consulta=consultarventa();

        function consultarventa()
        {
      
          $conn = new mysqli("localhost", "root", "", "pruebas2");
      
          if (mysqli_connect_errno()) {
          die("No se puede conectar a la base de datos:" . mysqli_connect_error());
          }else{
          
             
          }
      
      
      
          $sentencia="SELECT MAX(id) AS id FROM tblventas";
          $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
         $fila=$resultado->fetch_assoc();
      
         return [
            $fila['id'],
        
             ];
        }

        $idconsulta=$consulta[0];
       

        foreach ($_SESSION['carrito'] as $indice => $producto) {

            $total = ($producto['CANTIDAD'] * $producto['PRECIO']);

            $insertar="INSERT INTO `detalleventa` (`id`, `idventa`, `idproducto`, `preciounitario`, `cantidad`, `vendido`, `total`) 
            VALUES 
            (NULL, '$idconsulta', '".$producto['ID']."', '".$producto['PRECIO']."','".$producto['CANTIDAD']."','".$producto['modelo']."', '$total')";
            $resultado=mysqli_query($conn, $insertar);


          }
        if (!$resultado) {
            echo("Error description: " . mysqli_error($conn));die;
         }
         if ($nombre=="" && $clave=="") {
           } else {
            $insertar2="INSERT INTO `adeudo` (`id`, `idcliente`, `nombrecliente`, `total`, `idventa`) 
            VALUES 
            (NULL, '$clave', '$nombre', '$pres','$idconsulta')";
            $resultado=mysqli_query($conn, $insertar2);     
            if (!$resultado) {
              echo("Error description: " . mysqli_error($conn));die;
           }
         }
         
         $nombre=$_GET['cliente'];
         header("location:../fpdf/fpdf-basic.php?cliente=$nombre");
        
    
         ?>