<?php
require __DIR__.'/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

ob_start();
require_once 'maqueta.php';
$html = ob_get_clean();
$html2pdf = new Html2Pdf('P','A4','es',1,'UTF-8');
$html2pdf->writeHTML($html);
ob_end_clean();
$html2pdf->output('PdfGeneradoPHP.pdf');