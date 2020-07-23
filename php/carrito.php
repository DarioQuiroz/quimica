<?php
session_start();


         $total = 0;
$mensaje="";
if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion'])
    {
        case 'agregar':
        if(is_string(openssl_decrypt($_POST['id'],code,key))){
            $id=openssl_decrypt($_POST['id'],code,key);
          $mensaje.="ok id coorecto".$id."<br>";
        }
        else
        {  echo "<script>alert('el producto error' )</script>";
        }
        if(is_string(openssl_decrypt($_POST['modelo'],code,key))){
            $modelo=openssl_decrypt($_POST['modelo'],code,key);
                $mensaje.="ok modelo coorecto".$modelo."<br>";
        }
        else
        {    $mensaje.="ups, modelo error";
        }
        if(is_string(openssl_decrypt($_POST['precio'],code,key))){
            $precio=openssl_decrypt($_POST['precio'],code,key);
                $mensaje.="ok precio coorecto".$precio."<br>";
        }
        else  {
            $mensaje.="ups, precio error";
        }
            $cantidad=$_POST['Cantidad'];
       

         
        if(!isset($_SESSION['carrito'])){
            $producto=array(
                'ID'=>$id,
                'modelo'=>$modelo,
                'CANTIDAD'=>$cantidad,
                'PRECIO'=>$precio
            );
            $_SESSION['carrito'][0]=$producto;
            $mensaje="Producto agregado al carrito";
        }
        else{

            
            $idproductos=array_column($_SESSION['carrito'],"modelo");
            if(in_array($modelo,$idproductos)){
                
                
echo "<script>alert('el producto ya existe')</script>";
$mensaje="";
            }
            
            else{
            $numeroproductos=count($_SESSION['carrito']);
            $producto=array(
                'ID'=>$id,
                'modelo'=>$modelo,
                'CANTIDAD'=>$cantidad,
                'PRECIO'=>$precio
            );
            $_SESSION['carrito'][$numeroproductos]=$producto;
            $mensaje="Producto agregado al carrito";
        }
        }
       
       // session_destroy();
        break;
       
        case 'eliminar':
            if(is_string(openssl_decrypt($_POST['id'],code,key)))
            {
            $id=openssl_decrypt($_POST['id'],code,key);
            
            foreach($_SESSION['carrito'] as $indice=>$producto){
                if($producto['modelo']==$id){
                    unset($_SESSION['carrito'][$indice]);
echo "<script> alert('elemento borrado'); </script>";
                }
            }
        
    }
        break;



        case 'Registrar':
        
            $conn = new mysqli("localhost", "root", "", "pruebas2");
    
            if (mysqli_connect_errno()) {
            die("No se puede conectar a la base de datos:" . mysqli_connect_error());
            }else{
            
               
            }
            
            
            $clave= $_POST['clave'];
            $nombre=$_POST['nombre'];
            $apellido_paterno=$_POST['apellido_paterno'];
            $apellido_materno=$_POST['apellido_materno'];
            $domicilio=$_POST['domicilio'];

            $insertar="INSERT INTO clientes ( `clave`, `nombre`, `apellido_paterno`, `apellido_materno`, `domicilio`)
             VALUES ('$clave', '$nombre', '$apellido_paterno', ' $apellido_materno', ' $domicilio')";
            $resultado=mysqli_query($conn, $insertar);
            if(!$resultado)
            {
                ?>
                  <script type="text/javascript">
                alert("¡ Error al registrar cliente!");
                window.location.href='registro_cliente.php';
             
            </script>
               
            <?php
            
            }
            
            else{
                
                 ?>
                <script type="text/javascript">
                alert("!Cliente registrado exitosamente!");
                window.location.href='registro_cliente.php';
            </script>
            <?php
            
            }
            
            mysqli_close($conn);
            
            
            break;



        case 'Agregrar':
        
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
$Linea=$_POST['Linea'];





$insertar="INSERT INTO productos ( `clave`, `nombre`, `in_act`, `presentacion`, `cantidad`, `cantdad_total`, `valor_unitario`, `valor_total`, `linea`)
 VALUES ('$nombre', '$giro', '$contacto', '$direccion', ' $telefono', ' $rfc', '$correo', '$sitioweb', '$Linea')";
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

            break;


            




        
    }


}
 ?>


