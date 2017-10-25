<?php
include("../fpdf/fpdf.php");
$pdf = new FPDF('P');
$pdf->AddPage();
$pdf->SetFont('arial','BI',13);
$pdf->Text(50,20,'HOLA MUNDO');
$pdf->Output();
?>
