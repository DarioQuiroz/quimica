
<?php require_once "cavecera.php"; 
require_once "conexion.php"; 
echo $_GET['fec'];

if ($_GET['fec']==1) {

    $files = get_venta();
    
    # code...
} else if ($_GET['fec']=2) {
    # code...
} else  if ($_GET['fec']=3) {
    # code...
}
else {
   
}



if (count($files) > 0) :

?>

<div class="container" style="margin: 15%">

<table class="table">
  <thead>
    <tr>
      <th scope="col"># de Venta</th>
      <th scope="col">Fec</th>
      <th scope="col">Nombre</th>
      <th scope="col">Clave del producto</th>
      <th scope="col">Detalle de venta</th>
    </tr>
  </thead>


  <?php foreach ($files as $f) : ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $f->id; ?></th>
      <td><?php echo $f->fecha; ?></td>
      <td><?php echo $f->nombre; ?></td>
      <td><?php echo $f->total; ?></td>
      <td><?php echo $f->clave; ?></td>
    </tr>
    </tr>

        </tbody>
        <?php endforeach; ?>
      </table>
      <?php else : ?>
          <h4>No se encontraron resultados con esta busquedad</h4>
          <?php endif;
 
require_once "footer.php"; ?>

  