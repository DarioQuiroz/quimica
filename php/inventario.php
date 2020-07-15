
<?php require_once "cavecera.php"; 
require_once "conexion.php"; 


    $files = get_prod();
    
    # code...
if ($_GET['fec']=2) {
    # code...
} else  if ($_GET['fec']=3) {
    # code...
}



if (count($files) > 0) :

?>

<div class="col-4" style="margin-bottom: 15%;"></div>
  <section class="container">
    <div class="col-4 "></div>
    <h1>Inventario</h1>

  </section>
      <div class="container">
        <div class="table-responsive">               
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col-4">
                
                <h2>Clave</h2>
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
                <h2>$Dinero invertido</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
               
                </th>
               
               
                </th>
              </tr>
            </thead>
            <?php 
            
            $total=0;
            foreach ($files as $f) : ?>

              <tr>
                <td><?php echo $f->clave; ?></td>
                <td><?php echo $f->nombre; ?></td>

                <td>$ <?php echo $f->valor_unitario; ?></td>
                <td>   <?php echo $f->cantidad; ?></td>
                <td>$ <?php echo $f->valor_unitario* $f->cantidad?></td>
                <?php 
            $total=$total+$f->valor_unitario* $f->cantidad;
            endforeach; ?>
              </tr>
        <tr><td></td>
        <td></td>
        <td></td>
        <td> <h1>Total=</h1></td>
        <td> <h1>$ <?php echo $total; ?></h1> </td>
</tr>
          </table>
          <?php  echo $total;
          ?>
        </div>
      </div>
      <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>
  </section>
  <?php
require_once "footer.php"; ?>

  