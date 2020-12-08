
<?php
include 'carrito.php';
error_reporting(0);
    $conn = new mysqli("localhost", "root", "", "pruebas2");

    if (mysqli_connect_errno()) {
        die("No se puede conectar a la base de datos:" . mysqli_connect_error());
    } else {
        
    }
    $clave = $_GET['cliente'];
        $nombre = $_GET['nombre'];
        $pres = $_GET['precio'];
        $forma=$_GET['forma'];

       // $total = $_POST['total'];
  
        foreach ($_SESSION['carrito'] as $indice => $producto) {
            $total = $total + ($producto['CANTIDAD'] * $producto['PRECIO']);

          $sentencia="UPDATE `productos` SET `cantidad` = (`cantidad` -'".$producto['CANTIDAD']."') WHERE`productos`.`clave` = '".$producto['ID']."' ";
          $conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));
    
          }
           

          
        $insertar="INSERT INTO `tblventas`
        (`id`, `fecha`, `nombre`, `total`, `clave`, `forma`) 
        VALUES 
        (NULL, NOW(), '$nombre', '$total', '$clave', '$forma');";
        $resultado=mysqli_query($conn, $insertar);




       





        $consulta=consultarventa();

        function consultarventa()
        {
      
          $conn = new mysqli("localhost", "root", "", "pruebas2");
      
          if (mysqli_connect_errno()) {
          die("No se puede conectar a la base de datos:" . mysqli_connect_error());
          }else{
          
             
          }
      
      
      
          $sentencia="SELECT * FROM tblventas   ORDER BY id DESC   LIMIT    0, 1";
          $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
         $fila=$resultado->fetch_assoc();
      
         return [
            $fila['id'],
            $fila['fecha']
        
             ];
        }

        $idconsulta=$consulta[0];
       $fechadenota=$consulta[1];

        foreach ($_SESSION['carrito'] as $indice => $producto) {

            $total = ($producto['CANTIDAD'] * $producto['PRECIO']);

            $insertar="INSERT INTO `detalleventa` (`id`, `idventa`, `idproducto`, `preciounitario`, `cantidad`, `vendido`, `total`) 
            VALUES 
            (NULL, '$idconsulta', '".$producto['ID']."', '".$producto['PRECIO']."','".$producto['CANTIDAD']."','".$producto['modelo']."', '$total')";
            $resultado=mysqli_query($conn, $insertar);


          }
        if (!$resultado) {
         //   echo("Error description: " . mysqli_error($conn));die;
         }
         if ($nombre=="" && $clave=="") {
           } else {
            $insertar2="INSERT INTO `adeudo` (`id`, `idcliente`, `nombrecliente`, `total`, `idventa`, `forma`, `adeudo`) 
            VALUES 
            (NULL, '$clave', '$nombre', '$pres','$idconsulta', '1', '$pres')";
            $resultado=mysqli_query($conn, $insertar2);     
            if (!$resultado) {
           //   echo("Error description: " . mysqli_error($conn));die;
           }
         }
         if ($_GET['cliente']!="") {
          $nombre=$_GET['nombre'];
          $dom=$_GET['dom'];
         } else {
          $nombre=$_POST['nombre'];
          $dom=$_POST['domicilio'];
         }
        
         $ape=$_GET['ape'];
        
     //   header("location:../fpdf/fpdf-basic.php?cliente=$nombre&forma=$forma&&dom=$dom&&folio=$idconsulta&&fec=$fechadenota&&ape=$ape");
        
    
         ?>

<script type="text/javascript">
//alert("¡Datos Actualizados Exitosamante!");
window.open("../fpdf/fpdf-basic.php?cliente=<?php echo $nombre ?>&forma=<?php echo $forma ?>&&dom=<?php echo $dom ?>&&folio=<?php echo $idconsulta ?>&&fec=<?php echo $fechadenota ?>&&ape=<?php echo $_GET['ape'];?>", "_blank", "toolbar=yes");

	window.location.href='principal.php';
</script>