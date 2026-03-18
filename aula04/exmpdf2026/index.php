<?php
// http://localhost/DesenvWeb2/aula04/exmpdf2026/index.php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->WriteHTML('<h2>Exemplo geração PDF com mpdf</h2>');
$mpdf->Output();
?>