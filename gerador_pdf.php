<?php
require_once 'vendor/autoload.php';

use Mpdf\Mpdf;

$mpdf = new Mpdf();

$mpdf->WriteHTML('<h1>Meu primeiro PDF para Desenvolvimento Web II</h1>');

$mpdf->Output('meu_pdf.pdf', 'D');
