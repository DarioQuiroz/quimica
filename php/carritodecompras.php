<?php
error_reporting(0);
include 'config.php';
include 'carrito.php';
include 'cavecera.php' ?>
<!-- Container -->
<section class="container padding-top-3x padding-bottom">

  <h1 class="space-top-half">Productos por cobrar</h1>
  
  <?php
  if (!empty($_SESSION['carrito'])) {



    ?>
    <div class="row padding-top">

      <!-- Cart -->
      <div class="col-sm-8 padding-bottom-2x">
        <p class="text-sm">
          <span class="text-gray">Agregados</span> <?php
                                                    echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);
                                                    ?> productos
          <span class="text-gray"> a la venta</span>
        </p>
        <div class="shopping-cart">
          <?php
      global $total;





          
        

function testfun()
{
  $act=$_POST['act'];
$pres=$_POST['pres'];
  $total =($act * $pres);
   echo "Your test function on button click is working";
   echo "$total";
}

if(array_key_exists('test',$_POST)){
   testfun();
}

?>
          <?php
          foreach ($_SESSION['carrito'] as $indice => $producto) {
            ?>
            <!-- Item -->
            <div class="item">
             
              <div class="item-details">
                <h3 class="item-title"><a href="shop-single.html"> <?php echo $producto['modelo']; ?> </a></h3>
                <h4 class="item-price">$ <?php echo $producto['PRECIO']; ?></h4>
                <input class="quantity" type="" id="pres" value="<?php echo $producto['PRECIO']; ?>">
                <div class="count-input">
                  <a class="incr-btn" id='aumentar' onclick="carrito(this)" value="aumentar" data-action="decrease" href="#">–</a>
                  <input class="quantity" type="text" id="act" value="<?php echo $producto['CANTIDAD']; ?>">
                  <a class="incr-btn" id='disminuir'  onclick="carrito(this)" value="disminuir" data-action="increase" href="#">+</a>
                </div>
              </div>
          
              <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt($producto['modelo'], code, key); ?>">
                <button class="btn btn-danger" data-toggle="tooltip" type="submit" data-placement="top" name="btnAccion" value="eliminar" title="Remove">
                  <i class="material-icons remove_shopping_cart"></i>
                </button>
              </form>
             
            </div><!-- .item -->
            <?php
            $total = $total + ($producto['CANTIDAD'] * $producto['PRECIO']);
          }
          ?>

        </div><!-- .shopping-cart -->

        <!-- Coupon -->
        <div class="">

        </div>
      </div><!-- .col-sm-8 -->

      <!-- Sidebar -->
      <div class="col-md-3 col-md-offset-1 col-sm-4 padding-bottom-2x">
        <aside>
          <h3 class="toolbar-title">Subtotal del carrito:</h3>
          <h4 class="amount">$ <?php echo number_format($total, 2) ?> </h4>
          <p class="text-sm text-gray">* Nota: Esta cantidad no incluye los gastos de envío internacional. Podrás calcular los gastos de envío en la caja.</p>
       
          <a href="#" class="btn btn-default btn-block waves-effect waves-light">Actualización de la compra</a>
          <a href="checkout.php" class="btn btn-primary btn-block waves-effect waves-light space-top-none">Proceder a Pagar</a>
        </aside>
      </div><!-- .col-md-3.col-sm-4 -->
    </div><!-- .row -->
  </section><!-- .container -->
<?php  } else { ?>
  <div class="alert alert-success">no hay productos en el carro...</div>
<?php
}
?>





<?php include 'footer.php'; ?>
</div><!-- .page-wrapper -->

<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="../js/vendor/jquery-2.1.4.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/vendor/smoothscroll.js"></script>
<script src="../js/vendor/velocity.min.js"></script>
<script src="../js/vendor/waves.min.js"></script>
<script src="../js/scripts.js"></script>

</body><!-- <body> -->

</html>