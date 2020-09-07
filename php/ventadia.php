<?php 
include "conexion.php";
$credito=$_GET['cre'];
echo $credito;
$contado=$_GET['conta'];
echo $contado;
$existe=$_GET['existe'];
echo "esto exixte $existe jeje";
$total=$_GET['total'];
echo $total;
$retirar=$_POST['retirar'];
echo $retirar;
$caja=$_GET['caja'];
echo $caja;

$quedacaja=$existe+$caja-$retirar;
echo "esto queda en caja $ $quedacaja";
    
$insertar2="INSERT INTO `ventadia` (`id`, `totaldia`, `totalcredito`, `totalcontado`, `totalmenos`, `caja`, `fecha`) 
VALUES (NULL, '$total', '$credito', '$contado', '$existe', '$quedacaja', NOW())";
$resultado2=mysqli_query($conn, $insertar2);
if(!$resultado2)
{            echo("Error description: " . mysqli_error($conn));die;



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