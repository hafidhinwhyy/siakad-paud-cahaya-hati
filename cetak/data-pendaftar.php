<?php 

include('../config/koneksi.php');

// // somewhere early in your project's loading, require the Composer autoloader
// // see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

// // reference the Dompdf namespace
use Dompdf\Dompdf;

// // instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = ' <style>
table, th, td {
    font-size: 12px;
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
}
</style>

<img src="../assets1/img/logopaudd.png" style="float: left; height: 80px">

<div style="text-align: center;">
    <div style="font-size: 18px"">Data Pendaftaran Siswa Baru | Tahun 2022</div>
    <div style="font-size: 20px">PAUDQU NURUL HIDAYAH</div>
    <div style="font-size: 12px">Jl. Masjid Al-Baliyah Rt. 05/011 Kebon Kopi Pabuaran Cibinong Bogor 16916</div>
</div>

<hr style="border: 0.5px solid black; margin: 17px 5px 10px 5px;>

<div style="font-size: 12px; margin-left: 5px;">&nbsp; Tanggal Cetak: '. date("d-m-Y") .'</div>

<table width="100%">
<tr>
    <th width="5%">No</th>
    <th width="17%">Nama</th>
    <th width="20%">TTL</th>
    <th width="13%">Jenis Kelamin</th>
    <th>Alamat</th>
    <th width="10%">Kelas</th>
</tr>';

//tabel pendaftar
$all_pendaftar = mysqli_query($conn, "SELECT * FROM pendaftar order by nama");

$no = 1;
while($p = mysqli_fetch_array($all_pendaftar)) {  


$html .='
<tr>
    <td align="center">'. $no++ . '</td>
    <td>'. $p['nama'] . '</td>
    <td>'. $p['tempat_lahir'] . ', '. $p['tanggal_lahir'] . '</td>
    <td align="center">'. $p['jenis_kelamin'] . '</td>
    <td>'. $p['alamat'] . '</td>
    <td>'. $p['kelas'] . '</td>
</tr>';

}

$html .= '
</table>';


$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("data pendaftar.pdf", array("Attachment"=>0));
?>