<?php 
include "conexion.php";
$credito=$_GET['cre'];
$contado=$_GET['conta'];
$existe=$_GET['existe'];
$total=$_GET['total'];
$retirar=$_POST['retirar'];
$caja=$_GET['caja'];

$quedacaja=$existe+$caja-$retirar;

$insertar2="INSERT INTO `ventadia` (`id`, `totaldia`, `totalcredito`, `totalcontado`, `totalmenos`, `caja`, `fecha`) 
VALUES (NULL, '$total', '$credito', '$contado', '$existe', '$quedacaja', NOW())";
$resultado2=mysqli_query($conn, $insertar2);
if(!$resultado2)
{            echo("Error description: " . mysqli_error($conn));die;
   
  ?>
  <script type="text/javascript">
  //Global var to store a reference to the opened window
 

  window.close();
  </script>
<?php

}

else{
   
    ?>
   <script type="text/javascript">
   alert("!Compra registrada con éxito!");
  window.location.href='captura_producto.php?clave=<?php echo $rfcprov  ?>&&rs=<?php echo $rs  ?>&&opc=2';
</script>
<?php

}


?>