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









        
    }


}
 ?>


