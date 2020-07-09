<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>titulo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--SEO Meta Tags-->
  <meta name="description" content="M-Store - Modern E-Commerce Template" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />

  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Material Icons -->
  <link href="../css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  <!-- Brand Icons -->
  <link href="../css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  <!-- Bootstrap -->
  <link href="../css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Theme Styles -->
  <link href="../css/theme.min.css" rel="stylesheet" media="screen">
  <link href="../css/theme.css" rel="stylesheet" media="screen">

  <!-- Page Preloading -->
  <script src="../js/vendor/page-preloading.js"></script>

  <!-- Modernizr -->
  <script src="../js/vendor/modernizr.custom.js"></script>
</head>

<!-- Body -->
<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head> of the document. -->

<body class="page-preloading">

  <!-- Page Pre-Loader 
  <div class="page-preloader">
    <div class="preloader">
      <img src="img/preloader.gif" alt="Preloader">
    </div>
  </div> .page-preloader -->

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Navbar -->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page. -->
    <header class="navbar navbar-sticky">



      <!-- Site Logo -->
      <a href="ventas.php" class="site-logo visible-desktop">
        <img id="logo" src="img/office class logo.jpg" style="width:100%;     margin-left: 25%;" alt="logo">
      </a><!-- site-logo.visible-desktop -->
      <!-- site-logo.visible-mobile -->

      <!-- Language Switcher -->
      <!-- .lang-switcher -->

      <!-- Main Navigation -->
      <!-- Control the position of navigation via modifier classes: "text-left, text-center, text-right" -->
      <nav class="main-navigation text-center">


        <ul class="menu">

          <li class="menu-item-has-children">
            <a href="ventas.php">Ventas</a>
            

          </li>
          <li class="menu-item-has-children">
            <a href="#">Producto</a>
            <ul class="sub-menu">

            <li><a  href="captura_producto.php">Registrar nuevo producto </a></li>
          <li><a  href="edit_prod.php">Agregar a producto existetnte</a></li>
          <li><a  href="edit_prod.php">Editar producto</a></li>

            </ul>
          </li>
         

          <li class="menu-item-has-children">
            <a href="#">Clientes</a>
            <ul class="sub-menu" id="sub1">
              <li><a href="bancas.php">Resumen de la semana</a></li>
              <li><a href="bancas.php">Resumen del mes</a></li>
              <li><a href="bancas.php">Resumen del año</a></li>
            </ul>
          </li>

          <li><a href="#">RECEPCIÓN</a>
          </li>


          <li class="menu-item-has-children">
            <a href="blog.html">Diseño</a>
            <ul class="sub-menu" id="sub1">
            <li><a href="Sillasdedisegno.php">SILLAS DE DISEÑO</a></li>
              <li><a href="bancosdedisegno.php">BANCOS DE DISEÑO</a></li>
              <li><a href="Sillasdedisegno.php">SOFAS DE DISEÑO</a></li>
              <li><a href="Sillasdedisegno.php">MESAS DE DISEÑO</a></li>
             
            </ul>
          </li>

        </ul><!-- .menu -->
      </nav><!-- .main-navigation -->

      <!-- Toolbar -->
      <div class="toolbar">
        <div class="inner">
          <a href="#" class="mobile-menu-toggle"><i class="material-icons menu"></i></a>
          <!--   <a href="account.html"><i class="material-icons person"></i></a>-->
          <div class="cart-btn">
            <a href="carritodecompras.php">
              <i>
                <span class="material-icons shopping_basket"></span>
                <span class="count"><?php error_reporting(0);
                                    echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);
                                    ?></span>
              </i>
            </a>
            <!-- Cart Dropdown -->
            <?php
            $total = 0;
            ?>
            <?php
            foreach ($_SESSION['carrito'] as $indice => $producto) {
              ?>
        
              <div class="cart-dropdown">
                <div class="cart-item">
                  <a href="carritodecompras.php" class="item-thumb">
                    
                  </a>
                  <div class="item-details">
                    <h3 class="item-title"><a href="shop-single.html"> <?php echo $producto['modelo']; ?></a></h3>
                    <h4 class="item-price"><?php echo $producto['PRECIO']; ?></h4>
                  </div>


                  <form action="" method="post">
                  <input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt($producto['modelo'], code, key); ?>">                    <button class="btn btn-danger close-btn material-icons close" data-toggle="tooltip" type="submit" data-placement="top" name="btnAccion" value="eliminar" title="Remove">
                    </button>
                  </form>


                </div>
                <?php
                $total = $total + ($producto['CANTIDAD'] * $producto['PRECIO']);
              }
              ?>
             
              <!-- .cart-item -->


              <!-- .cart-item -->
            
            </div><!-- .cart-dropdown -->
          </div><!-- .cart-btn -->
        </div><!-- .inner -->
      </div><!-- .toolbar -->
    </header><!-- .navbar.navbar-sticky -->