<?php
include_once('formulario.php');

$doc=new clientes();


$doc->addpage();
$doc->SetFont('Arial','',11);
$doc->Ln();
$doc->Cell(50,9,'nombre: ',0,2,'L');

$doc->output();

?>