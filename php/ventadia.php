<?php 
include "conexion.php";
$credito=$_GET['cre'];
$contado=$_GET['conta'];
$existe=$_GET['existe'];
$total=$_GET['total'];
$retirar=$_POST['retirar'];
$caja=$_GET['caja'];
$transferencia=$_GET['trans'];

$quedacaja=$existe+$caja-$retirar;

$insertar2="INSERT INTO `ventadia` (`id`, `totaldia`, `totalcredito`, `totalcontado`, `totaltransfer`,  `totalmenos`, `caja`, `fecha`) 
VALUES (NULL, '$total', '$credito', '$contado', '$transferencia', '$existe', '$quedacaja', NOW())";
$resultado2=mysqli_query($conn, $insertar2);

?>
<script type="text/javascript">
//Global var to store a reference to the opened window

window.location.href='../../index.php';

//window.close();
</script>
<?php

if(!$resultado2)
{            echo("Error description: " . mysqli_error($conn));die;
   
  ?>
  <script type="text/javascript">
  //Global var to store a reference to the opened window
 
  window.location.href='../../index.php';

  window.close();
  </script>
<?php

}

else{
   
 

}


?>