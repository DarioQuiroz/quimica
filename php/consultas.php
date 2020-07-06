

<?php 

$conn = new mysqli("localhost", "root", "", "pruebas2");

if (mysqli_connect_errno()) {
die("No se puede conectar a la base de datos:" . mysqli_connect_error());
}else{

   
}


$nombre= $_POST['nombre'];
$giro=$_POST['giro'];
$contacto=$_POST['contacto'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$rfc =$_POST['rfc'];
$correo=$_POST['correo'];
$sitioweb=$_POST['sitioweb'];





$insertar="INSERT INTO productos ( `clave`, `nombre`, `in_act`, `presentacion`, `cantidad`, `cantdad_total`, `valor_unitario`, `valor_total`)
 VALUES ('$nombre', '$giro', '$contacto', '$direccion', ' $telefono', ' $rfc', '$correo', '$sitioweb')";
$resultado=mysqli_query($conn, $insertar);
if(!$resultado)
{
    ?>
      <script type="text/javascript">
    alert("¡ Error al registrar Producto!");
    window.location.href='captura_producto.php';
 
</script>
   
<?php

}

else{
    
     ?>
    <script type="text/javascript">
	alert("!Producto registrado exitosamente!");
	window.location.href='captura_producto.php';
</script>
<?php

}

mysqli_close($conn);


?>