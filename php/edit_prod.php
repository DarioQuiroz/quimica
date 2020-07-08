
<?php require_once "scripts.php"; ?>


<?php
include "conexion.php";

if (empty($_POST['name']))
  $files = get_prod();

 else 
  $files = search_genriconombre($_POST['name']);

  if (empty($_POST['name1']))
  {
    
  }

 else
 
  $files = search_genricoid($_POST['name1']);



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

<div class="container" style="margin: 15%">
    <div class="col-md-8 "></div>
    <h1>Editar provedor</h1>

  </section>


  <section class="container">
    
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3" style="text-align: right;"> <a href="Classes/generar_archivo.php" class="btn btn-success" > Generar Excel</a>
        </div>
      </div>
    </div>
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <?php if (count($files) > 0) : ?>

   
      <div class="container">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">
                <form method="post" class="form-signin col-12">
                <h2>Clave</h2>
                    <input type="search" name="name1" class="form-control" placeholder="id" required>
                    <div class="space-10"></div>
                    <button id="VER_FAC" class="btn btn-sm vervacantes btn-block" style="    margin-top: 5%; background-color: blue; color: white;" type="submit" name="submit" value="Submit Form">Buscar archivos</button>
                  </form>
                  </th>
                <th scope="col">
                  <form method="post" class="form-signin col-12">
                  <h2>Nombre</h2>
                    <input type="search" name="name" class="form-control" placeholder="Parte del nombre" required>
                    <div class="space-10"></div>
                    <button id="VER_FAC" class="btn btn-sm vervacantes btn-block" style="    margin-top: 5%; background-color: blue; color: white;" type="submit" name="submit" value="Submit Form">Buscar archivos</button>
                  </form>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <form method="post" class="form-signin col-12">
                <h2>Ingrediente activo</h2>
                <a href="files_fecha.php" class="btn btn-sm vervacantes btn-block" style="margin-top: 5%; background-color: blue; color: white;"> Ordenar por fecha</a>
               
                </form></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <form method="post" class="form-signin col-12">
                
                <a href="files_estado.php" class="btn btn-sm vervacantes btn-block" style="margin-top: 5%; background-color: blue; color: white;"> Ordenar por estado</a>
               
                </form></th>

                </th>
              </tr>
            </thead>
            <?php foreach ($files as $f) : ?>
              <tr>
                <td><?php echo $f->clave; ?></td>
                <td><?php echo $f->nombre; ?></td>
                <td><?php echo $f->in_act; ?></td>
                <td><a href="form_edit_prod.php?id=<?php echo $f->clave; ?>">Modificar</a></td>
                <td><a href="sumar_prod.php?id=<?php echo $f->clave; ?>">Sumar</a></td>
               
               
              </tr>
              <?php endforeach; ?>
          </table>
        </div>
      </div>
      <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>
  </section>

   
  <div class="col-4" style="margin-bottom: 3%;"></div>
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3" style="text-align: right;"> <a href="Classes/generar_archivo.php" class="btn btn-success" > Pagar</a>
        </div>
      </div>
    </div>
    <div class="col-4" style="margin-bottom: 3%;"></div>





  <footer class="footer text-muted bg-light">
    <div class="container">
      <span>© 2019 Parque Industrial Queretaro</span>
      <ul class="list-inline mb-0 float-right">
      </ul>
    </div>
  </footer>
</body>

</html>