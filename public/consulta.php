<?php
require '../apis/api.php';
include '../templates/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $dado = trim($_POST['dado']);

   if (!empty($dado)) {
       $resultado = verificarVazamento($dado);
       echo "<h2 class='mt-4'>Resultado da consulta:</h2>";
       echo "<pre class='bg-light p-3'>" . print_r($resultado, true) . "</pre>";
   } else {
        echo ">div class='alert alert-danger mt-4'>Por favor, informe um dado válido.</div>";
   }
} else {
    echo "<div class='alert alert-danger mt-4'>Método inválido.</div>";
}

include '../templates/footer.php';
?>