



<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['name3']))
  $files = get_detallecompras($_GET['opc']);

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
    <h1>Detalle de la Compra con el id <?php echo $_GET['foco']; ?></h1>

  </section>


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
                
                <h2>Id de Compra</h2>
                  </th>
                <th scope="col-4">
                
                <h2>Fecha</h2>
                  </th>
                <th scope="col">
                <h2>Clave de Producto</h2>
                </th>
                <th scope="col">
                <h2> Total</h2>
                </th>
                <th scope="col">
                <h2>Folio de Compra</h2>
                </th>
              
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>RFC</h2> 
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Razón Social</h2> 
                </th>
               
               
              </tr>
            </thead>

            <?php
            $pa=0;
             foreach ($files as $f) : ?>
              <tr>
                <td><?php echo $f->id; ?></td>
                <td><?php echo $f->fecha; ?></td>

                <td> <?php echo $f->claveproducto; ?></td>
                <td>   <?php echo $f->total; ?></td>
             
                <td><?php echo $f->foliocompra; ?></td>
                <td><?php echo $f->rfc; ?></td>
                <td><?php echo $f->razonsocial; ?></td>

                <td>     <?php if ($mostrar['forma']==1) {
echo '<h1 style="
background-color: red;
font-size: medium;
color: black;
color: black;
">Producto No Pagado</h1>';
         } else {
          echo '<h1 style="
          background-color: green;
          font-size: medium;
          color: black;
          color: black;
      ">Producto Pagado</h1>';
         }
         ?></td>




           
              </tr>

              <?php 
            $pa=$pa+$f->total;
            endforeach; ?>
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

  
