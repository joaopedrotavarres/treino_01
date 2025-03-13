<?php
require '../src/config.php';

function verificarVazamento($dado) {
    $apiKey = getenv('...');

    $url = "..." . urlencode($dado) . "&type-email";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    return json_decode($response, true);
}
?>