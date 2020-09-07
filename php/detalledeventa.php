



<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['name3']))
  $files = get_detalleventa($_GET['no']);

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

<div class="container">
  <div class="row">
    <div class="col-4">
    <h1>Detalle de la venta con el id <?php echo $_GET['no']; ?></h1>
        </div>
    <div class="col-4">
      
    </div>
    <div class="col-4" style="text-align: center;">
    
    <a href="../fpdf/fpdf-advanced.php?re=<?php echo $_GET['no']; ?>" class="btn btn-success" style="text-align: center;"> Reimprimir</a>

    </div>
  </div>
</div>



  <section class="container">
    
    
    
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <?php
  
  
    if (count($files) > 0) : ?>
  
   
      <div class="container">
        <div class="table-responsive">               
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
              <th scope="col-4">
                
                <h2>Id</h2>
                  </th>
                <th scope="col-4">
                
                <h2>Id de Venta</h2>
                  </th>
                <th scope="col">
                <h2>Id de Producto</h2>
                </th>
                <th scope="col">
                <h2>Precio Unitario</h2>
                </th>
                <th scope="col">
                <h2>Cantidad</h2>
                </th>
              
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>producto</h2> 
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>total por producto</h2> 
                </th>
               
               
              </tr>
            </thead>

            <?php
            $pa=0;
             foreach ($files as $f) : ?>
              <tr>
                <td><?php echo $f->id; ?></td>
                <td><?php echo $f->idventa; ?></td>

                <td> <?php echo $f->idproducto; ?></td>
                <td>  $ <?php echo $f->preciounitario; ?></td>
             
                <td><?php echo $f->cantidad; ?></td>
                <td><?php echo $f->vendido; ?></td>
                <td>$<?php echo $f->total; ?></td>
              </tr>

              <?php 
            $pa=$pa+$f->total;
            endforeach; ?>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><h1>Total: </h1></td>
            <td><h1>$ <?php echo $pa; ?> </h1></td>
          </table>
        </div>
      </div>
      <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>
  </section>

   

    <div class="col-4" style="margin-bottom: 3%;"></div>

    <?php require_once "footer.php"; ?>

  
