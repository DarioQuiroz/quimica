    <?php 

include "conexion.php";
include 'config.php';
include 'carrito.php';

                $conexion=mysqli_connect('localhost','root','','pruebas2');
               error_reporting(0);
                require_once "cavecera.php";
              
if($_GET['opc']==3){

$clave=$_GET['clave'];


$sql='select * from adeudo where idcliente like "%'.$clave.'%"';
$result=mysqli_query($conexion,$sql);
if (!$result) {
echo("Error description: " . mysqli_error($conexion));die;
}
  ?>

<div class="col-4" style="margin-bottom: 15%;"></div>
<section class="container">
<div class="col-4 "></div>
<h1>Adeudos del cliente con clave <?php echo $_GET['clave'] ?>

</section>

<section class="container">
<form action="abonar.php?cla=<?php echo $_GET['clave'] ?>&&opcion=3" method="POST">
<input type="text" name="cantidad" id="cantidad">
<input type="submit" value="Abonar">
</form>


<table class="table table-striped table-bordered table-hover">
 <thead>
   <tr>
  
   <th  scope="col-4"><h2>Id de la deuda</h2></th>
           <th ><h2>Clave del Cliente</h2></th>
           <th ><h2>Nombre del Clinte</h2></th>
           <th ><h2>Total de la Nota</h2></th>	
           <th ><h2>Id de LA Venta</h2></th>	
           <th ><h2>Adeudo</h2></th>	
           <th ><h2>Estado</h2></th>	
  
   </tr>
 </thead>

         <?php 

$total=0;


while($mostrar=mysqli_fetch_array($result)){
?>
     <tbody>
       <tr>



      
         <th ><?php echo $mostrar['id'] ?></th>
         <th ><?php echo $mostrar['idcliente'] ?></th>
         <th ><?php echo $mostrar['nombrecliente'] ?></th>
         <th ><?php echo $mostrar['total'] ?></th>
       
         <?php  echo "<td > <a href='detalledeventa.php?no=".$mostrar['idventa'] ."''>"?>Detalle de venta</a> </td>           

         <?php $total=$total+$mostrar['adeudo'];?>
         <th><?php echo $mostrar['adeudo'] ?></th>
         <th ><?php if ($mostrar['forma']==1) {
echo '<h1 style="
background-color: red;
font-size: medium;
color: black;
color: black;
">Nota Pendiente</h1>';
         } else {
          echo '<h1 style="
          background-color: green;
          font-size: medium;
          color: black;
          color: black;
      ">Nota Pagada</h1>';
         }
         ?>
       <?php 
          }
         ?>
         </th>
         <tr>
         <td></td>
         <td></td>
        <td></td> <td></td>
     
        <td> <h1>Total=</h1></td>
        <td> <h1>$ <?php echo $total; ?></h1> </td>
        </tr>
    </tbody>
 </table>
 <div class="space-20"></div>

</section>
<?php 

}if ($_GET['opc']==2) {
  ?>

  <div class="col-4" style="margin-bottom: 15%;"></div>
    <section class="container">
    
      <div class="col-4 "></div>
      <h1>Adeudos al Provedor con RFC <?php echo $_GET['clave'] ?></h1>
  
<form action="abonar.php?cla=<?php echo $_GET['clave'] ?>&&opcion=2" method="POST">
<input type="text" name="cantidad" id="cantidad">
<input type="submit" value="Abonar">
</form>
    </section>
  
    <section class="container">
      
      
  
    <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                <th ><h2></h2></th>

                <th  scope="col-4"><h2>Id de la deuda</h2></th>
                        <th ><h2>Fecha</h2></th>
                       <th ><h2>Folio de compra</h2></th>
                       
               
                </tr>
              </thead>
              <tbody>
              <?php 

   
  
  $clave=$_GET['clave'];
  $total=0;

  
      $sql='select * from adeudoproveedoores where rfc like "%'.$clave.'%"';
      $result2=mysqli_query($conexion,$sql);
      if (!$result2) {
          echo("Error description: " . mysqli_error($conexion));die;
       }
      while($mostrar=mysqli_fetch_array($result2)){
   ?>
                  <tbody>
                    <tr>         <?php  echo "<td > <a href='detalledecompra.php?foco=".$mostrar['foliocompra'] ."''>"?>Detalle de Nota</a> </td>           

                      <th ><?php echo $mostrar['id'] ?></th>
                      <th ><?php echo $mostrar['fecha'] ?></th>
                      <th ><?php echo $mostrar['foliocompra'] ?></th>
                            </tr>
                    <?php
                    $total=$total+$mostrar['total'];
                       }
                      ?>   <th ></th>
                       <th ></th>
                       
                       <?php 

                       
                  /*     $sql2='SELECT SUM(adeudo) FROM adeudo;';
      $result2=mysqli_query($conexion,$sql2);
      
*/
$sql_qry='SELECT SUM(total) AS count FROM adeudoproveedoores  where rfc like  "%'.$clave.'%" ';

$duration = $conexion->query($sql_qry);
while($record = $duration->fetch_array()){
    $total = $record['count'];
   
}
   
      ?>
      
                      <th ><h1>Total</h1></th>
                      <th ><h1>$ <?php 
echo "$total";
   ?></h1></th>
                     
                 </tbody>
              </table>
              <div class="space-20"></div>
         
    </section>
    <?php 
} 
