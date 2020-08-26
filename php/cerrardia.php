<?php 

include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['name3']))
  $files = get_ventanow();

 else
 
  $files = get_todo($_POST['name3']);

  if (empty($_POST['name1']))
  {
    
  }
  //$files = get_imgs_porid();

 else
 
  $files = search_genricoid($_POST['name1']);

?>



<?php
  
 
    if (count($files) > 0) : ?>
     <div class="container"> 
   
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
                <h2>Clave</h2>
             
               
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
         } else {
          echo '<h1 style="
          background-color: green;
          font-size: medium;
          color: black;
          color: black;
      ">Venta de contado</h1>';
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

   


<?php include 'footer.php'; ?>
</div><!-- .page-wrapper -->

<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="../js/vendor/jquery-2.1.4.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/vendor/smoothscroll.js"></script>
<script src="../js/vendor/velocity.min.js"></script>
<script src="../js/vendor/waves.min.js"></script>
<script src="../js/scripts.js"></script>

<script src="../js/validar.js"></script>
<link rel="stylesheet" href="../css/style.css" />
