
<?php
include 'carrito.php';
if ($_POST) {
    $conn = new mysqli("localhost", "root", "", "pruebas2");

    if (mysqli_connect_errno()) {
        die("No se puede conectar a la base de datos:" . mysqli_connect_error());
    } else {
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $total = $_POST['total'];
  



        $insertar="INSERT INTO 
`tblventas` (`id`, `fecha`, `correo`, `total`, `clave`) 
 VALUES ( CURDATE(), '$nombre', '$total', ' $clave')";
        $resultado=mysqli_query($conn, $insertar);

        if (!$resultado) {
            ?>
      <script type="text/javascript">
    alert("¡ Error al registrar venta!");
    window.location.href='';
 
</script>
   
<?php
        } else {
            ?>
    <script type="text/javascript">
	alert("!venta registrada!");
	window.location.href='provedores_public.php';
</script>
<?php
        }

        mysqli_close($conn);
    }
}
?>