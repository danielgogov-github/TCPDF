<?php

require_once('TCPDF/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->AddPage();

$pdf->SetFont('times', 'BI', 20);
$txt = 'Lorem ipsum QRCODE';
$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 11);
$style = array(
    'border' => 2,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
);
$pdf->write2DBarcode('www.rudybohrer.com', 'QRCODE', 20, 50, 50, 50, $style, 'N');
$pdf->Text(20, 45, 'QRCODE Rudy');

$pdf->Output('example_003.pdf');
