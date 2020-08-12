<?php 
$opccion=$_GET;
if ($opccion==1) {

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
                          
                            <td scope="row"><?php echo $f->rfc; ?></td>
                            <td><?php echo $f->razonsocial; ?></td>
                            <td><?php echo $f->apellido_paterno; ?></td>
                            <td><?php echo $f->apellido_materno; ?></td>
                            <td><?php echo $f->domicilio; ?></td>
                            </tr>
               
                <?php endforeach; ?>
              </tbody>
            </table>
      
                <?php endif;
        }
    # code...
} else {
    # code...
}
