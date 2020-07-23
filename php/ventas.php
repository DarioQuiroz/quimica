



<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['name3']))
  $files = get_prod();

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



<?php //require_once "cavecera.php"; ?>
<div class="col-4" style="margin-bottom: 15%;"></div>
  <section class="container">
    <div class="col-4 "></div>
    <h1>Ventas</h1>

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
   
      <div class="container">
        <div class="table-responsive">               
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col-4">
                
                <h2>Linea</h2>
                  </th>
                <th scope="col">
                <h2>Nombre</h2>
                </th>
                <th scope="col">
                <h2>Precio</h2>
                </th>
                <th scope="col">
                <h2>existencia</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Ingr. activo</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Cantidad</h2>
             
               
                </th>
               
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <form method="post" class="form-signin col-12">
                </form></th>

                </th>
              </tr>
            </thead>
            <?php foreach ($files as $f) : ?>
              <tr>
                <td><?php echo $f->linea; ?></td>
                <td><?php echo $f->nombre; ?></td>

                <td>$ <?php echo $f->valor_unitario; ?></td>
                <td>   <?php echo $f->cantidad; ?></td>
             
                <td><?php echo $f->in_act; ?></td>
             
               

                <td> <form action="" method="POST">
                <input type="number" name="Cantidad" id="Cantidad" min="1" max="<?php echo $f->cantidad; ?>" value="" required>
                    <input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt($f->clave,code,key); ?>">
                    <input type="hidden" name="modelo" id="modelo" value="<?php echo openssl_encrypt( $f->nombre,code,key); ?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt( $f->valor_unitario,code,key); ?>">
                    <td>  <button class="add-to-cart" name="btnAccion" value="agregar" type="submit" > <em>Agregar</em></button></td>
                  </form>
                  </td>
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
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3" style="text-align: right;"> <a href="carritodecompras.php" class="btn btn-success" > Pagar</a>
        </div>
      </div>
    </div>
    <div class="col-4" style="margin-bottom: 3%;"></div>

    <?php require_once "footer.php"; ?>

  
