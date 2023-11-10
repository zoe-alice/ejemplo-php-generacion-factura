<?php
include_once "./vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Hola mundo</h1><br><a href="#">By luisTapia</a>');
$dompdf->render();
$contenido = $dompdf->output();
$nombreDelDocumento = "1_hola.pdf";
$bytes = file_put_contents($nombreDelDocumento, $contenido);
