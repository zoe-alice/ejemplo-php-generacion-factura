<?php
include_once "./vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Hola mundo</h1><br><a href="#">By luisTapia</a>');
$dompdf->render();
$dompdf->stream();
