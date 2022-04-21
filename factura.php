<?php

$idPedido = $_REQUEST['numeroPedidoFactura'];
$precioPedido = 0;

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // // Logo
    // $this->Image('logo.png',10,8,33);
    // // Arial bold 15
    // $this->SetFont('Arial','B',15);
    // // Movernos a la derecha
    // $this->Cell(80);
    // // Título
    // $this->Cell(30,10,'Title',1,0,'C');
    // // Salto de línea
    // $this->Ln(20);
}

// Pie de página
function Footer()
{
    // // Posición: a 1,5 cm del final
    // $this->SetY(-15);
    // // Arial italic 8
    // $this->SetFont('Arial','I',8);
    // // Número de página
    // $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('./images/navLogo.png',10,8,50);
$pdf->SetXY(140,20);
$pdf->SetFont('Times','B',12);
$pdf->Cell(50,8,'Bloste-Bikes S.A.',0,1,'R',0);
$pdf->setX(140);
$pdf->SetFont('Times','',12);
$pdf->Cell(50,8,'Avenida del Bloste, 45, Local',0,1,'R',0);
$pdf->SetX(140);
$pdf->Cell(50,8,'Pinto City, Madrid',0,1,'R',0);
$pdf->SetX(140);
$pdf->Cell(50,8,'CP: 28320',0,1,'R',0);
$pdf->Ln(20);
$pdf->SetX(15);
$pdf->SetFont('Times','B',16);
$pdf->Cell(50,8,'Factura del Pedido',0,1,'R',0);
$pdf->Ln(8);
$pdf->SetX(18);
$pdf->SetFont('Times','',12);
$pdf->Cell(130,6,'Numero de Pedido',1,0,'L',0);
$pdf->Cell(40,6,'Num: '.$idPedido,1,0,'R',0);
$pdf->Ln(6);
$pdf->SetX(18);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blostebikes";

$conexion = new mysqli($servername, $username, $password, $dbname);
if($seleccion = mysqli_query($conexion, "SELECT * FROM ventas WHERE IDPedido = '$idPedido'")){
    while($linea = mysqli_fetch_array($seleccion)){
        $pdf->Cell(25,6,'ID-Pro: '.$linea['IDProducto'],1,0,'L',0);
        $pdf->Cell(105,6,utf8_decode($linea['Producto']),1,0,'C',0);
        $pdf->Cell(40,6,number_format($linea['Precio'], 2, ',', '.').chr(128),1,0,'R',0);
        $pdf->Ln(6);
        $pdf->SetX(18);
        $precioPedido=$precioPedido+$linea['Precio'];
    }
}
$pdf->SetX(130);
$pdf->Cell(18,6,'Total: ',1,0,'L',0);
$pdf->Cell(40,6,number_format($precioPedido, 2, ',', '.').chr(128),1,0,'R',0);

$pdf->Ln(15);
$pdf->SetX(20);
$pdf->SetFont('Times','B',16);
$pdf->Cell(50,8,'Direccion de Entrega',0,1,'R',0);
$pdf->Ln(4);
$pdf->SetX(20);
if($traca = mysqli_query($conexion, "SELECT * FROM pedidos WHERE IDPedido = '$idPedido'")){
    while($ibuprofeno = mysqli_fetch_array($traca)){
        $phpdate = strtotime( $ibuprofeno['fecha'] );
        $fechote = date( 'd-m-Y', $phpdate );
        $pdf->SetFont('Times','',12);
        $pdf->SetX(20);
        $pdf->Cell(50,8,utf8_decode('Nombre Cliente: '.$ibuprofeno['nombreCli']),0,1,'L',0);
        $pdf->SetX(20);
        $pdf->Cell(50,8,utf8_decode('Calle: '.$ibuprofeno['direccionCli']),0,1,'L',0);
        $pdf->SetX(20);
        $pdf->Cell(50,8,'Fecha Pedido: '.$fechote,0,1,'L',0);
    }
}
$pdf->Ln(4);
$pdf->SetX(135);
$pdf->SetFont('Times','B',14);
$pdf->Cell(50,8,'Gracias por su compra.',0,1,'C',0);
$pdf->SetX(135);
$pdf->Cell(50,8,'Blote-Bikes Team.',0,1,'C',0);
$pdf->Image('./images/logo.jpeg',170,260,25);
$pdf->Output();

?>