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

//Seteamos el inicio del margen superior en 25 pixeles
$pdf->SetDrawColor(0,128,0);

$y_axis_initial = 25;


//Seteamos el tiupo de letra y creamos el titulo de la pagina. No es un encabezado no se repetira
$pdf->SetFont('Arial','B',12);
//$pdf->Image('assets/LOGO.jpg', null, null, 120);


$pdf->Cell(40,6,'',0,0,'C'); 

$pdf->Cell(140,6,$pdf->Image('assets/LOGO.jpg', null, null, 90),0,0,'L');
$pdf->Ln(6);
$pdf->SetFillColor(0,143,57);
$pdf->SetTextColor(255,255,255);

$pdf->Cell(30,6,'NOTA No.',1,0,'C',true); 
$pdf->Cell(40,6,'',0,0,'C'); 
$pdf->SetTextColor(1,1,1);
$pdf->Cell(40,6,'R.F.C AAR171129NC2',0,0,'C',); 
$pdf->Ln(6);

$pdf->Cell(30,6,'',1,0,'C'); 
$pdf->Cell(40,6,'',0,0,'C'); 

$pdf->Cell(40,6,'MANUEL CASTAÑEDA 879 COL. ROSALES',0,0,'C',); 
$pdf->Ln(8);


$pdf->SetFont('Arial','B',10);

$pdf->SetFillColor(0,143,57);
$pdf->SetTextColor(255,255,255);

$pdf->Cell(40,6,'Fecha de la nota',1,0,'C', true);
$pdf->SetTextColor(1,1,1);
$pdf->Cell(30,6,'',0,0,'C'); 

$pdf->Cell(40,6,'C.P. 61830 ARIO DE ROSALES',0,0,'C',); 
$pdf->Ln(6);

$pdf->SetTextColor(1,1,1);
$pdf->Cell(40,6,'',1,0,'C');
$pdf->Cell(30,6,'',0,0,'C');
$pdf->Cell(40,6,'4251339453',0,0,'C',); 


$pdf->SetFont('Arial','B',10);

$pdf->SetFillColor(0,143,57);
$pdf->SetTextColor(255,255,255);


$pdf->Ln(10);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,143,57);

$pdf->Cell(40,6,"Cliente: ",1,0,'L', true);
$pdf->SetTextColor(1,1,1);

$pdf->Cell(100,6,"",1,0,'L');
$pdf->Ln(6);
$pdf->SetTextColor(0,143,57);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(40,6,"Domicilio:",1,0,'L', true);
$pdf->SetTextColor(1,1,1);
$pdf->Cell(100,6,"",1,0,'L');
$pdf->Ln(6);
$pdf->SetTextColor(0,143,57);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(40,6,"Ciudad:",1,0,'L', true);
$pdf->Cell(100,6,"",1,0,'l');
$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(10,6,'por aqui el folio',1,0,'C');
$pdf->Ln(10);

//Creamos las celdas para los titulo de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232,232,232);

$pdf->SetFont('Arial','B',10);

$pdf->SetFillColor(0,143,57);
$pdf->SetTextColor(255,255,255);

$pdf->Cell(30,6,'CANT.',1,0,'C',true );

$pdf->Cell(50,6,'DESCRIPCION',1,0,'C',true);

$pdf->Cell(40,6,'P/UNIT.',1,0,'C',true);

$pdf->Cell(40,6,'IMPORTE',1,0,'C',true);

$pdf->Ln(8);

//Comienzo a crear las fiulas de productos según la consulta mysql






$loquefue=0;
foreach ($_SESSION['carrito'] as $indice => $producto) {
    $titulo =  $producto['modelo'];
    $modelo = $producto['ID'];
    $cantidad = $producto['CANTIDAD'];
    $precio = $producto['PRECIO'];
    $pdf->SetTextColor(1,1,1);
    $pdf->Cell(30, 8, $cantidad, 1, 0, 'L', 0);

    $pdf->Cell(50, 8, $titulo, 1, 0, 'L', 0);

    $pdf->Cell(40, 8,"$ $precio" , 1, 0, 'R', 0);
    $loquees=$cantidad*$precio;
    $loquefue=$loquefue+$loquees;
    $pdf->Cell(40, 8, "$ $loquees", 1, 0, 'R', 0);
    $pdf->Ln(8);
}
$pdf->Cell(40, 15,"" , 0, 0, 'R', 0);
$pdf->SetTextColor(0,143,57);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(40, 15,"GRACIAS POR SU PREFERENCIA" , 0, 0, 'R', 0);
$pdf->SetFillColor(0,143,57);
$pdf->SetTextColor(255,255,255);

$pdf->SetFont('Arial','B',18);

$pdf->Cell(40, 15, 'Total', 0, 0, 'R', 1);
$pdf->SetTextColor(1,1,1);
$pdf->Cell(40, 15,"$ $loquefue" , 1, 0, 'R', 0);
$pdf->Ln(20);
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0,143,57);
$pdf->Cell(160, 15, 'IMPORTE CON LETRA:', 1, 0, 'L', 1);
$pdf->SetTextColor(1,1,1);
//$pdf->Cell(120, 15,"" , 1, 0, 'R', 0);

//Mostramos el documento pdf
$pdf->Output('ficha.pdf','I');

/*
session_start();
session_destroy();*/
?>