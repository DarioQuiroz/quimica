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
   
   
         
   <table class="table table-striped table-bordered table-hover">
    <thead>
            <th ><?php echo $mostrar['id'] ?></th>
         
            <th ><?php echo $mostrar['idcliente'] ?></th>
            <th ><?php echo $mostrar['nombrecliente'] ?></th>
            <th ><?php echo $mostrar['total'] ?></th>
          
            <?php  echo "<td > <a href='detalledeventa.php?no=".$mostrar['idventa'] ."''>"?>Detalle de venta</a> </td>           
   
            <th><?php echo $mostrar['adeudo'] ?></th>
              
          <?php
             }
             if ($cantidad>0) {
               ?>
               <script type="text/javascript">
               alert("Debes retornar <?php echo $cantidad?> de cambio");
             
                  window.location.href='detallesadeudo.php?claveclave=<?php echo $clave; ?>&&opc=3';
               </script>
                  <?php
             } else {
               ?>
               <script type="text/javascript">
              
                  window.location.href='detallesadeudo.php?claveclave=<?php echo $clave; ?>&&opc=3';
               </script>
                  <?php
             }
             
            ?>
       </tbody>
    </table>
   
    <?php
    
} 


if ($opcion==2) {
   $sql='select * from comprasproducto where rfc like "%'.$clave.'%" order by id';
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
            
           $sentencia="UPDATE comprasproducto SET total='0', forma='2' where  total<='".$cantidad."' and id='".$id."'";
           $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
           $cantidad=$cantidad-$mostrar['total'];
    
        } else {
            $disminuir= $mostrar['total']-$cantidad;
           $sentencia="UPDATE comprasproducto SET total='".$disminuir."', forma='1' where  id='".$id."'";
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
         
            <?php  echo "<td > <a href='detalledecompra.php?no=".$mostrar['foliocompra'] ."''>"?>Detalle de Compra</a> </td>           
   
            <th><?php echo $mostrar['total'] ?></th>
              
          <?php
             }
             if ($cantidad>0) {
               ?>
               <script type="text/javascript">
               alert("Debes retornar <?php echo $cantidad?> de cambio");
             
                  window.location.href='detalledecompra.php?claveclave=<?php echo $clave; ?>&&opc=3';
               </script>
                  <?php
             } else {
               ?>
               <script type="text/javascript">
              
                  window.location.href='detalledecompra.php?claveclave=<?php echo $clave; ?>&&opc=3';
               </script>
                  <?php
             }
             
            ?>
       </tbody>
    </table>
   
    <?php
 
}




?>