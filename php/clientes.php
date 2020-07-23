
<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['name3']))
  $files = get_client();

 else
 
  $files = get_client_busc($_POST['name3']);



  require_once "cavecera.php";
?>
<?php
  

  if (empty($_GET['precio'])) {
    if (count($files) > 0) : ?>
<div class="col-4" style="margin-bottom: 15%;"></div>
      <section id="principal"   class="container padding-top-3x padding-bottom">

      <form method="post" class="form-signin col-12">
                    <input type="search" name="name3" class="form-control" placeholder="Buscar" required>
                    <div class="space-10"></div>
                    <button class="add-to-cart" name="btnAccion" value="todo" type="submit" > <em>Buscar</em></button>

                  </form>
      <div class="row padding-top">
      
      <table class="table">
        <thead>
          <tr>
          <th scope="col"></th>
            <th scope="col">clave</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido paterno</th>
            <th scope="col">apellido materno</th>
            <th scope="col">domicilio</th>
          </tr>
        </thead>
      
                   
        <tbody>
        <?php foreach ($files as $f) : ?>
                    <tr>
                    <td scope="row">
                      <a data-toggle="modal" href="modif_client.php?clave=<?php echo $f->clave; ?>">Modificar</a>
                    </td>
                    
                      <td scope="row"><?php echo $f->clave; ?></td>
                      <td><?php echo $f->nombre; ?></td>
                      <td><?php echo $f->apellido_paterno; ?></td>
                      <td><?php echo $f->apellido_materno; ?></td>
                      <td><?php echo $f->domicilio; ?></td>
                      </tr>
         
          <?php endforeach; ?>
        </tbody>
      </table>

          <h4>No se encontraron resultados con esta busquedad</h4>
          <?php endif;
  }



  else
  {
      if (count($files) > 0) : ?>

<section id="principal"  class="container padding-top-3x padding-bottom">
<div class="row padding-top">

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">clave</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido paterno</th>
      <th scope="col">apellido materno</th>
      <th scope="col">domicilio</th>
    </tr>
  </thead>

             
  <tbody>
  <?php foreach ($files as $f) : ?>
              <tr>
              <td scope="row"> 
              <form action="pagar.php" method="POST">
             
             <input type="" value="<?php echo $f->clave; ?>" name="clave" size="40">
              <input type="" value="<?php echo $f->nombre; ?>" name="nombre" size="40">
              <input type="" value="<?php echo $_GET['precio'] ?>" name="total" size="40">
             



      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Cobrar</button>

            
              </td>

                <td scope="row"><?php echo $f->clave; ?></td>
                <td><?php echo $f->nombre; ?></td>
                <td><?php echo $f->apellido_paterno; ?></td>
                <td><?php echo $f->apellido_materno; ?></td>
                <td><?php echo $f->domicilio; ?></td>
                </tr>
   
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CRITERIOS DE ACEPTACION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Deseas cargar la cuenta al cliente <?php echo $f->nombre; ?>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" value="Seleccionar cliente">
      </div>
    </div>
  </div>
</div>

</form>
    <?php endforeach; ?>
  </tbody>
</table> 




      <?php else : ?>


    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif;
  }?>
</div>
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

</body><!-- <body> -->

</html>