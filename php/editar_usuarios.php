
<?php require_once "scripts.php"; ?>


<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['name3']))
  $files = get_usuarios();

 else 
 $files = search_usuarios($_POST['name3']);




?>


<html>

<head>

  <title>Ventas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>

    @media (max-width: 600px) {
      #busc_prov {
        flex-direction: column;
      }

      #encavezado {
        margin-bottom: 20%;
        display: flex;
        flex: 1 1 0px;
      }

      #busca_prov {
        display: flex;
        flex: 1 1 0px;
        margin-bottom: 35%;
      }
    }

    @media (max-width: 415px) {
      #busc_prov {
        flex-direction: column;
      }

      #encavezado {
        margin-bottom: 30%;
        display: flex;
        flex: 1 1 0px;
      }

      #busca_prov {
        display: flex;
        flex: 1 1 0px;
        margin-bottom: 45%;
      }
    }
  </style>
</head>

<body>
 


<?php require_once "cavecera.php"; ?>

<div class="col-4" style="margin-bottom: 15%;"></div>

  <section class="container">
    <div class="col-4 "></div>
    <h1>Editar Usuarios</h1>

  
  </section>


  

                  </div>
    <?php if (count($files) > 0) : ?>

   
      <section class="container">
     
    <form method="post" class="form-signin col-6">
                    <input type="search" name="name3" class="form-control" placeholder="Buscar" required>
                    <div class="space-10"></div>
                    <button class="add-to-cart" name="btnAccion" value="todo" type="submit" > <em>Buscar</em></button>

                  </form>
        <div class="table-responsive">
          <table style="align-items: center;" class="table">
            <thead>
              <tr>
                <th scope="col">
                <h2>Clave</h2>
             
                  </th>
                  <th scope="col">
                <h2>Nombre</h2>
                 
                </th>  <th scope="col">
                <h2>Apellido</h2>
                 
                </th>
                <th scope="col">
                <h2>COrreo</h2>
                 
                </th>
                <th scope="col">
                <h2>Clave
                </h2>
                 
                </th>
             
                <th scope="col">
                <h2>Tipo</h2>
                 
                </th>
                <th scope="col"></th>
                <th scope="col"></th>
             
                </th>
              </tr>
            </thead>
            <?php foreach ($files as $f) : ?>
              <tr>
                <td><?php echo $f->id; ?></td>
                <td><?php echo $f->nombre; ?></td>
                <td><?php echo $f->apellido; ?></td>
                <td><?php echo $f->usuario; ?></td>
                <td><?php echo $f->password; ?></td>
                <td><?php echo $f->tipo; ?></td>

             
                <td><a href="form_edit_user.php?rfc=<?php echo $f->id; ?>">Modificar</a></td>
    <td>              <?php  
  echo "<a class='text-danger' data-confirm='Esta acción no se puede revertir' rel='nofollow' data-method='delete' href='eliminarprovedor.php?rfc=".$f->rfc."''>"?>Borrar Provedor</a> </th>
    </td>
               
              
               
              </tr>
              <?php endforeach; ?>
          </table>
        </div>
      </section>
      <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>

   
  <div class="col-4" style="margin-bottom: 3%;"></div>
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        </div>
      </div>
    </div>
    <div class="col-4" style="margin-bottom: 3%;"></div>





  <footer class="footer text-muted bg-light">
    <div class="container">
      <span>© </span>
      <ul class="list-inline mb-0 float-right">
      </ul>
    </div>
  </footer>
</body>

</html>