<?php
require_once 'vendor/autoload.php';

use Mpdf\Mpdf;

// Cria uma instância do objeto Mpdf
$mpdf = new Mpdf();

// Adiciona conteúdo ao PDF
$mpdf->WriteHTML('<h1>Meu primeiro PDF para Desenvolvimento Web II</h1>');

// Salva o PDF no servidor ou envia para o navegador
$mpdf->Output('meu_pdf.pdf', 'D');
