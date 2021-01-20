
<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';



  require_once "cavecera.php";
?>
<?php
  
  if ($_GET['ver']==3) {
    $files = get_gasto();
    if (count($files) > 0) : ?>
  <section class="container">
    <div class="col-4 "></div>

<div class="col-4" style="margin-bottom:15%;"></div>
    <h1>Gastos realizados</h1>

  </section>


<div class="col-4" style="margin-bottom:1%;"></div>
      <section id="principal"   class="container padding-top-3x padding-bottom">

   
      <div class="row padding-top">
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Concepto</th>
            <th scope="col">Cantidad</th>

          </tr>
        </thead>
      
                   
        <tbody>
        
        <?php if ($_GET['ver']==3) {
$total=0;
       foreach ($files as $f) : ?>
        <tr>
      
          <td scope="row"><?php echo $f->id; ?></td>
          <td><?php echo $f->concepto; ?></td>
          <td>$<?php echo $f->cantidad; ?></td>
          <?php
          $total=$total+$f->cantidad;
          ?>


        </tr>

<?php endforeach; 

        } 
       ?>
       <td> <h1></h1></td>
       <td> <h1>Total=</h1></td>
<td> <h1>$ <?php echo $total; ?></h1> </td>
  
        </tbody>
      </table>

          <?php endif;
  }









  if ($_GET['ver']==2) {
    $files = get_gasto();
    if (count($files) > 0) : ?>
  <section class="container">
    <div class="col-4 "></div>

<div class="col-4" style="margin-bottom:15%;"></div>
    <h1>Modificar o Eliminar gastos realizados</h1>

  </section>


<div class="col-4" style="margin-bottom:1%;"></div>
      <section id="principal"   class="container padding-top-3x padding-bottom">

   
      <div class="row padding-top">
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Concepto</th>
            <th scope="col">Cantidad</th>

          </tr>
        </thead>
      
                   
        <tbody>
        
        <?php if ($_GET['ver']==2) {
$total=0;
       foreach ($files as $f) : ?>
        <tr>
      
          <td scope="row"><?php echo $f->id; ?></td>
          <td><?php echo $f->concepto; ?></td>
          <td>$<?php echo $f->cantidad; ?></td>
          <td><a href="form_edit_gasto.php?id=<?php echo $f->id; ?>">Modificar</a></td>
 
          <?php
          $total=$total+$f->cantidad;
          ?>


        </tr>

<?php endforeach; 

        } 
       ?>
       <td> <h1></h1></td>
       <td> <h1>Total=</h1></td>
<td> <h1>$ <?php echo $total; ?></h1> </td>
  
        </tbody>
      </table>

          <?php endif;
  }


  


 
?>
</div>
</section>


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