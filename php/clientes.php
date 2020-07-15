
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
                    <td scope="row"><a href="modif_client.php?clave=<?php echo $f->clave; ?>">Modificar</a></td>
                    
                      <td scope="row"><?php echo $f->clave; ?></td>
                      <td><?php echo $f->nombre; ?></td>
                      <td><?php echo $f->apellido_paterno; ?></td>
                      <td><?php echo $f->apellido_materno; ?></td>
                      <td><?php echo $f->domicilio; ?></td>
                      </tr>
         
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php else : ?>
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
             
             <input type="hidden" value="<?php echo $f->clave; ?>" name="clave" size="40">
              <input type="hidden" value="<?php echo $f->nombre; ?>" name="nombre" size="40">
              <input type="hidden" value="<?php echo $_GET['precio'] ?>" name="total" size="40">
              <input type="submit" value="Seleccionar cliente">
              </form>
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