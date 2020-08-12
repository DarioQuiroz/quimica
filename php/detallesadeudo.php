    <?php 

include "conexion.php";
include 'config.php';
include 'carrito.php';

                $conexion=mysqli_connect('localhost','root','','pruebas2');
                error_reporting(0);
                require_once "cavecera.php";
              
if ($_GET['opc']=2) {
  ?>

  <div class="col-4" style="margin-bottom: 15%;"></div>
    <section class="container">
      <div class="col-4 "></div>
      <h1>Adeudos alprovedor con RFC <?php echo $_GET['clave'] ?>
  
    </section>
  
    <section class="container">
      
      
  
    <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
  
                <th  scope="col-4"><h2>Id de la deuda</h2></th>
                        <th ><h2>Fecha</h2></th>
                       <th ><h2>Folio de compra</h2></th>
                       
               
                </tr>
              </thead>
  
                      <?php 
  
  
  $clave=$_GET['clave'];
  $total=0;

  
      $sql='select * from adeudoproveedoores where rfc like "%'.$clave.'%"';
      $result=mysqli_query($conexion,$sql);
      if (!$result) {
          echo("Error description: " . mysqli_error($conexion));die;
       }
      while($mostrar=mysqli_fetch_array($result)){
   ?>
                  <tbody>
                    <tr>
                      <th ><?php echo $mostrar['id'] ?></th>
                      <th ><?php echo $mostrar['fecha'] ?></th>
                      <th ><?php echo $mostrar['foliocompra'] ?></th>
                      <th ><?php echo $mostrar['total'] ?></th>
                            </tr>
                    <?php
                    $total=$total+$mostrar['total'];
                       }
                      ?>   <th ></th>
                       <th ></th>
                      <th ><h1>Total</h1></th>
                      <th ><?php echo $total ?></th>
                     
                 </tbody>
              </table>
              <div class="space-20"></div>
         
    </section>
    <?php 
} else {
  ?>

<div class="col-4" style="margin-bottom: 15%;"></div>
<section class="container">
<div class="col-4 "></div>
<h1>Adeudos del cliente con clave <?php echo $_GET['clave'] ?>

</section>

<section class="container">



<table class="table table-striped table-bordered table-hover">
 <thead>
   <tr>

   <th  scope="col-4"><h2>Id de la deuda</h2></th>
           <th ><h2>Clave del Cliente</h2></th>
           <th ><h2>Nombre del Clinte</h2></th>
           <th ><h2>Total de la Nota</h2></th>	
           <th ><h2>Id de LA Venta</h2></th>	
        
  
   </tr>
 </thead>

         <?php 


$clave=$_GET['clave'];

echo $clave;


$sql='select * from adeudo where idcliente like "%'.$clave.'%"';
$result=mysqli_query($conexion,$sql);
if (!$result) {
echo("Error description: " . mysqli_error($conexion));die;
}
while($mostrar=mysqli_fetch_array($result)){
?>
     <tbody>
       <tr>
         <th ><?php echo $mostrar['id'] ?></th>
         <th ><?php echo $mostrar['idcliente'] ?></th>
         <th ><?php echo $mostrar['nombrecliente'] ?></th>
         <th ><?php echo $mostrar['total'] ?></th>
         <th ><?php echo $mostrar['idventa'] ?></th>
               </tr>
       <?php
          }
         ?>
    </tbody>
 </table>
 <div class="space-20"></div>

</section>
<?php 

}
