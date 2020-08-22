



<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['name3']))
  $files = get_venta();

 else
 
  $files = get_todo($_POST['name3']);

  if (empty($_POST['name1']))
  {
    
  }
  //$files = get_imgs_porid();

 else
 
  $files = search_genricoid($_POST['name1']);





  require_once "cavecera.php";
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
   <form method="post" class="form-signin col-12">
                    <input type="search" name="name3" class="form-control" placeholder="Buscar" required>
                    <div class="space-10"></div>
                    <button class="add-to-cart" name="btnAccion" value="todo" type="submit" > <em>Buscar</em></button>

                  </form>
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
               
            
              </tr>
            </thead>
            <?php foreach ($files as $f) : ?>
              <tr>

              <?php  echo "<td > <a href='detalledeventa.php?no=".$f->id."''>"?><?php echo $f->id ?></a> </td>           
                <td><?php echo $f->fecha; ?></td>

                <td> <?php echo $f->nombre; ?></td>
                <td> $  <?php echo $f->total; ?></td>
             
                <td><?php echo $f->clave; ?></td>
             
               

              </tr>
              <?php endforeach; ?>
          </table>
        </div>
      </div>
      <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>
  </section>

   

    <div class="col-4" style="margin-bottom: 3%;"></div>

    <?php require_once "footer.php"; ?>

  
