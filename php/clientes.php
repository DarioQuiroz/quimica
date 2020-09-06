
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
  
  if ($_GET['editar']==1) {
    if (count($files) > 0) : ?>
  <section class="container">
    <div class="col-4 "></div>
    <h1>Modificar clientes</h1>

  </section>


<div class="col-4" style="margin-bottom:1%;"></div>
      <section id="principal"   class="container padding-top-3x padding-bottom">

   
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

          <?php endif;
  }


  if ($_GET['ver']==2) {
    if (count($files) > 0) : ?>
<div class="col-4" style="margin-bottom: 15%;"></div>
      <section id="principal"   class="container padding-top-3x padding-bottom">
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
                   
                      <td scope="row"><?php echo $f->clave; ?></td>
                      <td><?php echo $f->nombre; ?></td>
                      <td><?php echo $f->apellido_paterno; ?></td>
                      <td><?php echo $f->apellido_materno; ?></td>
                      <td><?php echo $f->domicilio; ?></td>
                      </tr>
         
          <?php endforeach; ?>
        </tbody>
      </table>

          <?php endif;
  }


  if ($_GET['adeudo']==3) {
    if (count($files) > 0) : ?>
<section class="container">
    <div class="col-4 "></div>
    <h1>Ver Adeudos</h1>

  </section>
      <section id="principal"   class="container padding-top-3x padding-bottom">

  
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
                      
                      <a data-toggle="modal" href="detallesadeudo.php?clave=<?php echo $f->clave; ?>&&opc=3">Ver Deudas</a>
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

          <?php endif;
  }


  

  if ($_GET['precio'])
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
              <a class="btn btn-primary" href="pagar.php?cliente=<?php echo $f->clave; ?>&&nombre=<?php echo $f->nombre; ?>&&precio=<?php echo $_GET['precio'] ?>&&forma=1&&dom=<?php echo $f->domicilio?>">cobrar</a>
           
            
      <!-- Button trigger modal -->
    

              </td>

                <td scope="row"><?php echo $f->clave; ?></td>
                <td><?php echo $f->nombre; ?></td>
                <td><?php echo $f->apellido_paterno; ?></td>
                <td><?php echo $f->apellido_materno; ?></td>
                <td><?php echo $f->domicilio; ?></td>
                </tr>


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