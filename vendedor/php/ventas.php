



<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';


require_once "cavecera.php";
$opcion=$_GET['opc'];

if ($opcion==1) {
  
if (empty($_POST['feinf']) && empty($_POST['fesu']))
$files = get_venta();
else

$files=get_todo_fecha($_POST['feinf'], $_POST['fesu']);

?>



<div class="col-4" style="margin-bottom: 15%;"></div>
  <section class="container">
    <div class="col-4 "></div>
    <h1>Resumen de Ventas</h1>

  </section>


  <section class="container">
    
    
    
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <?php
  
 
    if (count($files) > 0) : ?>
     <div class="container"> 
     <form method="post" class="form-signin col-6">
    
                  <p> Fecha inferior: <input type="date" name="feinf" class="form-control "min="2017-04-01"  placeholder="Fecha inferior" required></p> 
                    <p>Fecha superior: <input type="date" name="fesu" class="form-control "  max="" placeholder="Fecha superior" required></p>

                    <button class="add-to-cart" name="btnAccion" value="todo" type="submit" > <em>Buscar</em></button>

                  </form>
                  </div>
   
                  <div class="col-4" style="margin-bottom: 3%;"></div>

      <div class="container">
        <div class="table-responsive">               
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col-4">
                
                <h2>id</h2>
                  </th>
                <th scope="col">
                <h2>Fecha</h2>
                </th>
            
                <th scope="col">
                <h2>Nombre</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Total</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Venta realizada por:</h2>
             
               
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Forma</h2>
             
               
                </th>
               
            
              </tr>
            </thead>
            <?php
            $total=0;
             foreach ($files as $f) : ?>
              <tr>

              <?php  echo "<td > <a href='detalledeventa.php?no=".$f->id."''>"?><?php echo $f->id ?></a> </td>           
                <td><?php echo $f->fecha; ?></td>

                <td> <?php echo $f->nombre; ?></td>
                <td> $  <?php echo $f->total; ?></td>
             
              
                <td><?php echo $f->clave; ?></td>
                <td>     <?php if ($f->forma==1) {
echo '<h1 style="
background-color: red;
font-size: medium;
color: black;
color: black;
">Venta de credito</h1>';
         } else if ($f->forma==2) {
          echo '<h1 style="
          background-color: green;
          font-size: medium;
          color: black;
          color: black;
      ">Venta de contado</h1>';
         }
         else if ($f->forma==3) {
          echo '<h1 style="
          background-color: yellow;
          font-size: medium;
          color: black;
          color: black;
      ">Venta en transferencia</h1>';
         }
         else if ($f->forma==4) {
          echo '<h1 style="
          background-color: yellow;
          font-size: medium;
          color: black;
          color: black;
      ">Abono de cliente en Transferencia</h1>';
         }

         else if ($f->forma==5) {
          echo '<h1 style="
          background-color: orange;
          font-size: medium;
          color: black;
          color: black;
      ">Abono de cliente en Efectivo</h1>';
         }
         ?></td>

              
              </tr>
              <?php
              $total=$total+$f->total;
               endforeach; ?>
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
    <?php endif; ?>
  </section>

   

    <div class="col-4" style="margin-bottom: 3%;"></div>



    <?php 
}
























else {

  if (empty($_POST['feinf']) && empty($_POST['fesu']))
  $files = get_ventadia();
  else$files=get_ventasdias($_POST['feinf'], $_POST['fesu']);


  
?>



<div class="col-4" style="margin-bottom: 15%;"></div>
  <section class="container">
    <div class="col-4 "></div>
    <h1>Resumen de Días</h1>

  </section>


  <section class="container">
    
    
    
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <?php
  
 
    if (count($files) > 0) : ?>
     <div class="container"> 
     <form method="post" class="form-signin col-6">
    
                  <p> Fecha inferior: <input type="date" name="feinf" class="form-control "min="2017-04-01"  placeholder="Fecha inferior" required></p> 
                    <p>Fecha superior: <input type="date" name="fesu" class="form-control "  max="" placeholder="Fecha superior" required></p>

                    <button class="add-to-cart" name="btnAccion" value="todo" type="submit" > <em>Buscar</em></button>

                  </form>
                  </div>
   
                  <div class="col-4" style="margin-bottom: 3%;"></div>

      <div class="container">
        <div class="table-responsive">               
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col-4">
                
                <h2>id</h2>
                  </th>
                <th scope="col">
                <h2>Total del Día</h2>
                </th>
            
                <th scope="col">
                <h2>Total de Crédito</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Total de contado</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Total de Transferencia</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Total Menos los Gastos</h2>
             
               
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Quedo en Caja</h2>
                </th>

                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Fecha</h2>
                </th>
               
               
            
              </tr>
            </thead>
            <?php
            $total=0;
             foreach ($files as $f) : ?>
              <tr>

                 <td><?php echo $f->id ?></td>           
             
                <td> $ <?php echo $f->totaldia; ?></td>
                <td> $  <?php echo $f->totalcredito; ?></td>
             
                <td><?php echo $f->totalcontado; ?></td>
                <td><?php echo $f->totaltransfer; ?></td>

                <td> $  <?php echo $f->totalmenos; ?></td>
             
                <td> $  <?php echo $f->caja; ?></td>
             
                <td> $  <?php echo $f->fecha; ?></td>
           

              
              </tr>
              <?php
              $total=$total+$f->total;
               endforeach; ?>
                </tr>
        
          </table>
        </div>
      </div>
      <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>
  </section>

   

    <div class="col-4" style="margin-bottom: 3%;"></div>



    <?php 
}



?>


    <?php require_once "footer.php"; ?>

  
