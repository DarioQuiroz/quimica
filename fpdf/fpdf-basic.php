<?php
//error_reporting(0);
// include class
require('vendor/fpdf/fpdf.php');
require('../php/carrito.php');


//Conecto a la base de datos


//Consulta la tabla productos solicitando todos los productos

//$resultado = mysql_query("SELECT * FROM producto", $link);
//$query=$con->query("SELECT * FROM producto order by nombre");
//Instaciamos la clase para genrear el documento pdf
$pdf=new FPDF();
$pdf->SetTitle('Nota de venta');
//Agregamos la primera pagina al documento pdf
$pdf->AddPage();
$nom=$_GET['cliente'];
//Seteamos el inicio del margen superior en 25 pixeles

$y_axis_initial = 25;

//Seteamos el tiupo de letra y creamos el titulo de la pagina. No es un encabezado no se repetira
$pdf->SetFont('Arial','B',12);

$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(100,6,'Nota de remision',1,0,'C');
$pdf->Ln(15);
$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(100,6,'LISTA DE PRODUCTOS',1,0,'C');
$pdf->Ln(10);
$pdf->Cell(40,6,"$nom",1,0,'C');
$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(40,6,'por aqui el folio',1,0,'C');
$pdf->Ln(10);

//Creamos las celdas para los titulo de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232,232,232);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Nombre',1,0,'C',1);

$pdf->Cell(40,6,'Precio',1,0,'C',1);
$pdf->Cell(40,6,'cantidad',1,0,'C',1);
$pdf->Cell(40,6,'clave',1,0,'C',1);

$pdf->Ln(10);

//Comienzo a crear las fiulas de productos según la consulta mysql






$loquefue=0;
foreach ($_SESSION['carrito'] as $indice => $producto) {
    $titulo =  $producto['modelo'];
    $modelo = $producto['ID'];
    $cantidad = $producto['CANTIDAD'];
    $precio = $producto['PRECIO'];

    $pdf->Cell(40, 15, $titulo, 1, 0, 'L', 0);

    $pdf->Cell(40, 15,"$ $precio" , 1, 0, 'R', 1);
    $pdf->Cell(40, 15, $cantidad, 1, 0, 'R', 0);
    $loquees=$cantidad*$precio;
    $loquefue=$loquefue+$loquees;
    $pdf->Cell(40, 15, $modelo, 1, 0, 'R', 1);
    $pdf->Ln(15);
}
$pdf->Cell(40, 15,"" , 0, 0, 'R', 1);
$pdf->Cell(40, 15,"" , 0, 0, 'R', 1);
$pdf->Cell(40, 15, 'Total', 0, 0, 'R', 1);
$pdf->Cell(40, 15,"$ $loquefue" , 1, 0, 'R', 1);

//Mostramos el documento pdf
$pdf->Output('ficha.pdf','I');

/*
session_start();
session_destroy();*/
?>