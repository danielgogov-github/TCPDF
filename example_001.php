<?php

require_once('TCPDF/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->AddPage();

// Page color
$pdf->Rect(0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'DF', "",  array(0, 255, 255));

$pdf->setX(20);
$pdf->setY(20);

$border = 1;
$align = 'L';
$fill = false;
$ln = 1;

$pdf->SetFont('times', 'BI', 20);
$text = 'Lorem ipsum Lorem ipsum Lorem ipsum';

$pdf->MultiCell(0, 0, $text, $border, $align, $fill, $ln, $pdf->getX(), $pdf->getY());
$pdf->MultiCell(0, 0, $text, $border, $align, $fill, $ln, $pdf->getX(), $pdf->getY());
$pdf->MultiCell(0, 0, $text, $border, $align, $fill, $ln, $pdf->getX(), $pdf->getY());

$pdf->Cell(0, 10, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
$pdf->AddPage();
$pdf->Cell(0, 10, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');

// $PgNo= "This is the page " . $pdf->getAliasNumPage() . " of " . $pdf->getAliasNbPages();



// $txt = 
// <<<EOD
// Lorem ipsum

// Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, perferendis. Veritatis, recusandae velit aspernatur sint totam eum aliquid dicta praesentium, labore quam eos magnam nemo ea quod dolorem, vel sapiente.
// EOD;
// $pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);


$pdf->Output('example_001.pdf');
