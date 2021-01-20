<?php 

include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['name3']))
{
  $files = get_ventanow();
  $files2=get_gastosnow();
  $files3=get_existecaja();
}
  
 else
 
  $files = get_todo($_POST['name3']);


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<body>
  





<div class="container">
  <div class="row">
    <div class="col-6">

    <?php
  
    $total=0;
          $credito=0;
          $contado=0;
          $totalsalida=0;
          $transferencia=0;
           
  if (count($files) > 0) : ?>
   <div class="container"> 
 
                </div>
 
                <div class="col-4" style="margin-bottom: 3%;"></div>
                <section class="container">
  <div class="col-4 "></div>
  <h1>Ventas del día</h1>

</section>
    <div class="container">
      <div class="table-responsive">               
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col-4">
              
              <h2>id</h2>
                </th>
              
          
              <th scope="col">
              <h2>Nombre</h2>
              </th>
              <th scope="col" style="display: table-cell; vertical-align: middle;">
              <h2>Total</h2>
              </th>
              <th scope="col" style="display: table-cell; vertical-align: middle;">
              <h2>Clave</h2>
           
             
              </th>
              <th scope="col" style="display: table-cell; vertical-align: middle;">
              <h2>Forma</h2>
           
             
              </th>
             
          
            </tr>
          </thead>
          <?php
       
           foreach ($files as $f) : ?>
            <tr>

            <?php  echo "<td > <a href='detalledeventa.php?no=".$f->id."''>"?><?php echo $f->id ?></a> </td>           
            
              <td> <?php echo $f->nombre; ?></td>
              <td> $  <?php echo $f->total; ?></td>
           
              <td><?php echo $f->clave; ?></td>
              <td>     <?php if ($f->forma==1) {
                    $credito=$credito+$f->total;
echo '<h1 style="
background-color: red;
font-size: medium;
color: black;
color: black;
">Venta de credito</h1>';
       } else if ($f->forma==2||$f->forma==5) {
        echo '<h1 style="
        background-color: green;
        font-size: medium;
        color: black;
        color: black;
    ">Venta de contado</h1>';
    $contado=$contado+$f->total;
       }
       else if ($f->forma==3||$f->forma==4) {
        echo '<h1 style="
        background-color: yellow;
        font-size: medium;
        color: black;
        color: black;
    ">Venta en transferencia</h1>';
     $transferencia=$transferencia+$f->total;
       }
   

       
       ?></td>

            
            </tr>

            <?php
            $total=$total+$f->total;
             endforeach; ?>
              </tr>
              </tr>
      <tr><td></td>
      <td></td>
  
      <td> <h1 style="
background-color: red;

color: black;
color: black;
">Total de credito=</h1></td>
      <td> <h1>$ <?php echo $credito; ?></h1> </td>
</tr>

<tr><td></td>
      <td></td>
  
      <td> <h1  style="
        background-color: green;
       
        color: black;
        color: black;
    ">Total de contado=</h1></td>
      <td> <h1>$ <?php echo $contado; ?></h1> </td>
</tr>

<tr><td></td>
      <td></td>
  
      <td> <h1  style="
        background-color: yellow;
       
        color: black;
        color: black;
    ">Total en transferencia=</h1></td>
      <td> <h1>$ <?php echo $transferencia; ?></h1> </td>
</tr>
      <tr><td></td>
      <td></td>
  
      <td> <h1>Total=</h1></td>
      <td> <h1>$ <?php echo $total; ?></h1> </td>
</tr>
        </table>
      </div>
    </div>
    <?php else : ?>
  <h4>No se encontraron resultados con esta busquedad</h4>
  <?php endif; 
?>
     </div>
  
    <div class="col-6" style="text-align: center;">
    

<?php

$caja=0;
  if (count($files2) > 0) : ?>
     <div class="container"> 
   
                  </div>
   
                  <div class="col-4" style="margin-bottom: 31%;"></div>
                  <section class="container">
    <div class="col-4 "></div>
    <h1>GASTOS DEL DÍA</h1>

  </section>
      <div class="container">
        <div class="table-responsive">               
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                
                <th scope="col">
                <h2>id</h2>
             
            
                <th scope="col">
                <h2>concepto</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Total</h2>
                </th>
              
               
            
              </tr>
            </thead>
            <?php
          
             foreach ($files2 as $f2) : ?>
              <tr>

                         
                <td><?php echo $f2->id; ?></td>

                <td> <?php echo $f2->concepto; ?></td>
                <td> $  <?php echo $f2->cantidad; ?></td>
             
               
              

              
              </tr>
              <?php
              $totalsalida=$totalsalida+$f2->cantidad;
               endforeach; ?>
                </tr>
        <tr>
        <td></td>
    
        <td> <h1>Total=</h1></td>
        <td> <h1>$ <?php echo $totalsalida; ?></h1> </td>
</tr>
          </table>

          <?php
    
          foreach ($files3 as $f3) : ?>
              <tr>

                         
                <td><?php echo $f3->id; ?></td>

                <td> <?php echo $f3->totaldia; ?></td>
                <td> $  <?php echo $f3->totalcredito; ?></td>
                <td> <?php echo $f3->totalcontado; ?></td>
                <td> $  <?php echo $f3->totalmenos; ?></td>

                <td> <?php echo $f3->caja; 
                $caja=$f3->caja;?></td>
             
               
              

              
              </tr>
              <?php
           $contado= $contado-$totalsalida+$caja; 
               endforeach; ?>
      
    <?php endif; ?>
  </section>
  <section>
  <strong> <b><h1> El día se inicio con $<?php echo $caja; ?> en la caja  </h1> </b></strong>

<strong> <b><h1> Total de dinero existente en la caja $ <?php echo $contado-$totalsalida+$caja; ?> </h1> </b></strong>
<h4>No se realizaron gastos el día de oy</h4>
  <form action="ventadia.php?cre=<?php echo $credito; ?>&&conta=<?php echo $contado; ?>&&trans=<?php echo $transferencia; ?>&&existe=<?php echo $contado-$totalsalida; ?>&&total=<?php echo $total; ?>&&caja=<?php echo $caja; ?>" method="POST">

<h4>Se realizará retiro para deposito?</h4>

<p>Cantidad: <input type="number" step="0.01" max="<?php echo $contado-$totalsalida+$caja;  ?>" name="retirar" value="0" size="40"></p>

  <p>    <input type="submit" name="commit" value="RETIRAR PARA DEPOSITAR" class="btn btn-primary" data-disable-with="RETIRAR PARA DEPOSITAR" /></p>



</form>
  </div>

</div>

</section>

    </div>
  </div>

</div>




                        


<?php include 'footer.php'; ?>
</div><!-- .page-wrapper -->

</body>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="../js/vendor/jquery-2.1.4.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/vendor/smoothscroll.js"></script>
<script src="../js/vendor/velocity.min.js"></script>
<script src="../js/vendor/waves.min.js"></script>
<script src="../js/scripts.js"></script>

<script src="../js/validar.js"></script>
<link rel="stylesheet" href="../css/style.css" />
<script>
function cerrarse(){
window.close();
}
</script>