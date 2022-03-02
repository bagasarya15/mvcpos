<?php 
require '../public/vendor/dompdf/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1> Laporan Data Supplier </h1>
    <table border="1px">
        <tr>
            <th>No</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>Tlp</th>
            <th>Deskripsi</th>
        </tr>';

    $i = 1;
    foreach ($data['sup'] as $sup) {
        $html.= '<tr>
            <td>'. $i++ .'</td>
            <td style="width:20px">'.$sup['namaSupplier'].'</td>
            <td>'.$sup['alamatSupplier'].'</td>
            <td>'.$sup['tlpSupplier'].'</td>
            <td>'.$sup['deskripsi'].'</td>
        </tr>';
    }

$html .='</table>
</body>
</html>';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Data Supplier.pdf", array("Attachement" => 0));

?>