<?php
error_reporting(0);
include 'php/config.php';
include 'carrito.php';
include 'cavecera.php' ?>
<!-- Container -->
<section class="container padding-top-3x padding-bottom">

  <h1 class="space-top-half">Shopping Cart</h1>
  <?php
  if (!empty($_SESSION['carrito'])) {



    ?>
    <div class="row padding-top">

      <!-- Cart -->
      <div class="col-sm-8 padding-bottom-2x">
        <p class="text-sm">
          <span class="text-gray">Currently</span> <?php
                                                    echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);
                                                    ?> items
          <span class="text-gray"> in cart</span>
        </p>
        <div class="shopping-cart">
          <?php
          $total = 0;
          ?>
          <?php
          foreach ($_SESSION['carrito'] as $indice => $producto) {
            ?>
            <!-- Item -->
            <div class="item">
              <a href="shop-single.html" class="item-thumb">
                <img src="img/FOTOS OFFICE CLASS/todas/<?php echo  $producto['modelo'];  ?>.png" alt="Item">
              </a>
              <div class="item-details">
                <h3 class="item-title"><a href="shop-single.html"> <?php echo $producto['modelo']; ?> </a></h3>
                <h4 class="item-price">$ <?php echo $producto['PRECIO']; ?></h4>
                <div class="count-input">
                  <a class="incr-btn" data-action="decrease" href="#">–</a>
                  <input class="quantity" type="text" value="<?php echo $producto['CANTIDAD']; ?>">
                  <a class="incr-btn" data-action="increase" href="#">+</a>
                </div>
              </div>
              <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt($producto['ID'], code, key); ?>">
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
<script src="js/vendor/jquery-2.1.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/smoothscroll.js"></script>
<script src="js/vendor/velocity.min.js"></script>
<script src="js/vendor/waves.min.js"></script>
<script src="js/scripts.js"></script>

</body><!-- <body> -->

</html>