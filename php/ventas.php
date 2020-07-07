



<?php
include "conexion.php";

if (empty($_POST['name']))
  $files = get_prod();

 else 
  $files = search_genriconombre($_POST['name']);

  if (empty($_POST['name1']))
  {
    
  }

 else
 
  $files = search_genricoid($_POST['name1']);



?>



 


<?php require_once "cavecera.php"; ?>
  <section class="container">
    <div class="col-md-8 "></div>
    <h1>Ventas</h1>

  </section>


  <section class="container">
    
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3" style="text-align: right;"> <a href="Classes/generar_archivo.php" class="btn btn-success" > Generar Excel</a>
        </div>
      </div>
    </div>
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <?php if (count($files) > 0) : ?>

   
      <div class="container">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">
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
                <td>Agregar</td>
               
               
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

  
