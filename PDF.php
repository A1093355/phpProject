<?php
require_once('TCPDF/tcpdf.php');
$pdf=new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setFont('msungstdlight','',10);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

$html='<h1>Test Hello PDF</h1>';

$pdf->writeHTML($html);

$path='/test.pdf';
$pdf->Output(__DIR__.$path,'D');
?>