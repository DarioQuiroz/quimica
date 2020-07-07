



<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';
if (empty($_POST['name']))
  $files = get_prod();

 else 
  $files = search_genriconombre($_POST['name']);

  if (empty($_POST['name1']))
  {
    
  }

 else
 
  $files = search_genricoid($_POST['name1']);


  require_once "cavecera.php";
?>



<?php //require_once "cavecera.php"; ?>
<div class="col-4" style="margin-bottom: 3%;"></div>
  <section class="container">
    <div class="col-4 "></div>
    <h1>Ventas</h1>

  </section>


  <section class="container">
    
    
    
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <?php
    echo "ello";
    echo "$mensaje";
    if (count($files) > 0) : ?>

   
      <div class="container">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col-4">
                <form method="post" class="form-signin col-12">
                <h2>Clave</h2>
                    <input type="search" name="name1" class="form-control" placeholder="id" required>
                    <div class="space-10"></div>
                    <button id="VER_FAC" class="btn btn-sm vervacantes btn-block" style="    margin-top: 5%; background-color: blue; color: white;" type="submit" name="submit" value="Submit Form">Buscar archivos</button>
                  </form>
                  </th>
                <th scope="col">
                  <form method="post" class="form-signin col-12">
                  <h2>Nombre</h2>
                    <input type="search" name="name" class="form-control" placeholder="Parte del nombre" required>
                    <div class="space-10"></div>
                    <button id="VER_FAC" class="btn btn-sm vervacantes btn-block" style="    margin-top: 5%; background-color: blue; color: white;" type="submit" name="submit" value="Submit Form">Buscar archivos</button>
                  </form>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <form method="post" class="form-signin col-12">
                <h2>Ingrediente activo</h2>
                <a href="files_fecha.php" class="btn btn-sm vervacantes btn-block" style="margin-top: 5%; background-color: blue; color: white;"> Ordenar por fecha</a>
               
                </form></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <form method="post" class="form-signin col-12">
                
                <a href="files_estado.php" class="btn btn-sm vervacantes btn-block" style="margin-top: 5%; background-color: blue; color: white;"> Ordenar por estado</a>
               
                </form></th>

                </th>
              </tr>
            </thead>
            <?php foreach ($files as $f) : ?>
              <tr>
                <td><?php echo $f->clave; ?></td>
                <td><?php echo $f->nombre; ?></td>
                <td><?php echo $f->in_act; ?></td>
             
               

                <td> <form action="" method="POST">
                <input type="Text" name="Cantidad" id="Cantidad" value="">
                    <input type="" name="id" id="id" value="<?php echo  openssl_encrypt($f->clave,code,key); ?>">
                    <input type="" name="modelo" id="modelo" value="<?php echo openssl_encrypt( $f->nombre,code,key); ?>">
                    <input type="" name="precio" id="precio" value="<?php echo openssl_encrypt( $f->precio,code,key); ?>">
                    <td>  <button class="add-to-cart" name="btnAccion" value="agregar" type="submit" > <em>Comprar</em></button></td>
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
        <div class="col-3" style="text-align: right;"> <a href="Classes/generar_archivo.php" class="btn btn-success" > Pagar</a>
        </div>
      </div>
    </div>
    <div class="col-4" style="margin-bottom: 3%;"></div>

    <?php require_once "footer.php"; ?>

  
