<?php
   $conexion=mysqli_connect('localhost','root','','pruebas2');

$cantidad=$_POST['cantidad'];

$clave=$_GET['cla'];
$opcion=$_GET['opcion'];

if ($opcion==3) {
   $sql='select * from adeudo where idcliente like "%'.$clave.'%" order by id';
   $result=mysqli_query($conexion,$sql);
   $row_cnt = $result->num_rows;
   
   
   if (!$result) {
   echo("Error description: " . mysqli_error($conexion));die;
   }
   $disminuir=0;
   while($mostrar=mysqli_fetch_array($result)){
   ?>
        <tbody>
          <tr>
   
   
          <?php 
        
        $id=$mostrar['id'];
        if ($cantidad>=$mostrar['adeudo']) {
            
           $sentencia="UPDATE adeudo SET adeudo='0', forma='2' where  total<='".$cantidad."' and id='".$id."'";
           $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
           $cantidad=$cantidad-$mostrar['adeudo'];
    
        } else {
            $disminuir= $mostrar['adeudo']-$cantidad;
           $sentencia="UPDATE adeudo SET adeudo='".$disminuir."', forma='1' where  id='".$id."'";
           $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
           $cantidad=$cantidad-$mostrar['adeudo'];
        }
        
          // $cantidad=$abonito;
          
   
   
          ?>
          <script type="text/javascript">
         
             window.location.href='detallesadeudo.php?clave=<?php echo $clave; ?>&&opc=3';
          </script>
             <?php
            
            
   
         
  }
    
} 


if ($opcion==2) {
   $sql='select * from adeudoproveedoores where rfc like "%'.$clave.'%" order by id';
   $result=mysqli_query($conexion,$sql);
   $row_cnt = $result->num_rows;
   
   
   if (!$result) {
   echo("Error description: " . mysqli_error($conexion));die;
   }
   $disminuir=0;
   while($mostrar=mysqli_fetch_array($result)){
   ?>
        <tbody>
          <tr>
   
   
          <?php 
        
        $id=$mostrar['id'];
        if ($cantidad>=$mostrar['total']) {
            
           $sentencia="UPDATE adeudoproveedoores SET total='0',  forma='2' where  total<='".$cantidad."' and id='".$id."'";
           $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
           $cantidad=$cantidad-$mostrar['total'];
    
        } else {
            $disminuir= $mostrar['total']-$cantidad;
           $sentencia="UPDATE adeudoproveedoores SET total='".$disminuir."',  forma='1' where  id='".$id."'";
           $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
           $cantidad=$cantidad-$mostrar['total'];
        }
         echo "la cantidad es $cantidad";
          
   
   
           
            
             ?>
   
   
         
   <table class="table table-striped table-bordered table-hover">
    <thead>
            <th ><?php echo $mostrar['id'] ?></th>
         
            <th ><?php echo $mostrar['fecha'] ?></th>
            <th ><?php echo $mostrar['claveproducto'] ?></th>
            <th ><?php echo $mostrar['total'] ?></th>
            <th ><?php echo $mostrar['foliocompra'] ?></th>
            <th ><?php echo $mostrar['rfc'] ?></th>
            <th ><?php echo $mostrar['razonsocial'] ?></th>
         
            <?php  echo "<td > <a href='detallesadeudo.php?no=".$mostrar['foliocompra'] ."''>"?>Detalle de Compra</a> </td>           
   
            <th><?php echo $mostrar['total'] ?></th>
              
          <?php
             }
             if ($cantidad>0) {
               ?>
               <script type="text/javascript">
               alert("Debes retornar <?php echo $cantidad?> de cambio");
             
                  window.location.href='detallesadeudo.php?clave=<?php echo $clave; ?>&&opc=2';
               </script>
                  <?php
             } else {
               ?>
               <script type="text/javascript">
              
                  window.location.href='detallesadeudo.php?clave=<?php echo $clave; ?>&&opc=2';
               </script>
                  <?php
             }
             
            ?>
       </tbody>
    </table>
   
    <?php
 
}




?>