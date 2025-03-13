<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Carrega as bibliotecas instaladas pelo Composer
require '../vendor/autoload.php'; 

// Limpa qualquer saída anterior
ob_clean(); 


// Criando um novo documento PDF
$pdf = new TCPDF();
$pdf->SetCreator('Vazei?');
$pdf->SetTitle('Resultado da Consulta');
$pdf->AddPage();

// Exemplo de texto no PDF
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 10, 'Este é um teste de geração de PDF!', 0, 1, 'C');

// Nome do arquivo PDF
$fileName = "consulta.pdf";

// Retorna o PDF para download
$pdf->Output($fileName, 'D');
