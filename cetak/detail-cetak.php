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
    padding: 5px;
    vertical-align: top;
}

.judul {
    margin-bottom: 0px;
    font-size: 16px;
    font-weight: bold;
}    
</style>

<img src="../assets1/img/logopaudd.png" style="float: left; height: 80px">

<div style="text-align: center;">
    <div style="font-size: 18px">Data Pendaftaran Siswa Baru | Tahun 2022</div>
    <div style="font-size: 20px">PAUDQU NURUL HIDAYAH</div>
    <div style="font-size: 12px">Jl. Masjid Al-Baliyah Rt. 05/011 Kebon Kopi Pabuaran Cibinong Bogor 16916</div>
</div>

<hr style="border: 0.5px solid black; margin: 17px 5px 10px 5px;">';

$id_pendaftar = $_GET['id'];

// echo $id_pendaftar;
// die;

$sql_pendaftar = "SELECT * FROM pendaftar where id = '$id_pendaftar'";
$result_pendaftar = mysqli_query($conn, $sql_pendaftar);
$data_pendaftar = mysqli_fetch_array($result_pendaftar);


if(!$result_pendaftar) {
    die('query error : '. mysqli_error($conn));
}

if($data_pendaftar['foto'] != '') {
    $gambar = '../uploads/siswa/' . $data_pendaftar['foto'];
} else {
    $gambar = '../assets1/img/avatar.jpg';
}

if($data_pendaftar['jenis_kelamin'] == 'L') {
    $kelamin = "Laki-Laki";
} else {
    $kelamin = "Perempuan";
}

if($data_pendaftar['kelas'] == 'Play Grup') {
    $kelas = 'Play Grup';
} else if($data_pendaftar['kelas'] == 'Kelas A') {
    $kelas = 'Kelas A';
} else {
    $kelas = 'Kelas B';
}

$html .= '
<h3 class="judul">DETAIL PENDAFTAR</h3>
<table width="100%">
    <tr>
        <td><b>Identitas Anak</b></td>
    </tr>
    <tr>
        <td width="32%">Nama</td>
        <td width="1%">: </td>
        <td width="60%">'. $data_pendaftar['nama'] .'</td>
        <td rowspan="7" align="right"><img src="'.$gambar.'" width="130px" height="150px"></td>
    </tr>
    <tr>
        <td>Nama Panggilan</td>
        <td>: </td>
        <td>'. $data_pendaftar['nama_panggil'] .'</td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>: </td>
        <td>'. $data_pendaftar['tempat_lahir'] .', '. $data_pendaftar['tanggal_lahir'] .'</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: </td>
        <td>'. $kelamin .'</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>: </td>
        <td>'. $kelas .'</td>
    </tr>
    <tr>
        <td>Anak Ke-</td>
        <td>: </td>
        <td>'. $data_pendaftar['anak_ke'] .'</td>
    </tr>
    <tr>
        <td>Berat Badan</td>
        <td>: </td>
        <td>'. $data_pendaftar['berat_badan'] .'</td>
    </tr>
    <tr>
        <td>Tinggi Badan</td>
        <td>: </td>
        <td>'. $data_pendaftar['tinggi_badan'] .'</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: </td>
        <td>'. $data_pendaftar['alamat'] .'</td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td><b>Kondisi Anak</b></td>
    </tr>
    <tr>
        <td>Berat Badan Lahir</td>
        <td>: </td>
        <td>'. $data_pendaftar['berat_badan_lahir'] .'</td>
    </tr>
    <tr>
        <td>Penyakit yang Sering Diderita</td>
        <td>: </td>
        <td>'. $data_pendaftar['penyakit_sering_diderita'] .'</td>
    </tr>
    <tr>
        <td>Penyakit yang Pernah Diderita</td>
        <td>: </td>
        <td>'. $data_pendaftar['penyakit_pernah_diderita'] .'</td>
    </tr>
    <tr>
        <td>Pantangan Makan</td>
        <td>: </td>
        <td>'. $data_pendaftar['pantangan_makan'] .'</td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td><b>Identitas Orang Tua</b></td>
    </tr>
    <tr>
        <td><b>Ayah</b></td>
    </tr>
    <tr>
        <td>Nama Ayah Kandung</td>
        <td>: </td>
        <td>'. $data_pendaftar['nama_ayah_kdg'] .'</td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir Ayah</td>
        <td>: </td>
        <td>'. $data_pendaftar['tempat_lahir_ayah'] .', '. $data_pendaftar['tanggal_lahir_ayah'] .'</td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir Ayah</td>
        <td>: </td>
        <td>'. $data_pendaftar['pendidikan_akhir_ayah'] .'</td>
    </tr>
    <tr>
        <td>Pekerjaan Ayah</td>
        <td>: </td>
        <td>'. $data_pendaftar['pekerjaan_ayah'] .'</td>
    </tr>
    <tr>
        <td>No Telepon Ayah</td>
        <td>: </td>
        <td>'. $data_pendaftar['telepon_ayah'] .'</td>
    </tr>
    <tr>
        <td><b>Ibu</b></td>
    </tr>
    <tr>
        <td>Nama Ibu Kandung</td>
        <td>: </td>
        <td>'. $data_pendaftar['nama_ibu_kdg'] .'</td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir Ibu</td>
        <td>: </td>
        <td>'. $data_pendaftar['tempat_lahir_ibu'] .', '. $data_pendaftar['tanggal_lahir_ibu'] .'</td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir Ibu</td>
        <td>: </td>
        <td>'. $data_pendaftar['pendidikan_akhir_ibu'] .'</td>
    </tr>
    <tr>
        <td>Pekerjaan Ibu</td>
        <td>: </td>
        <td>'. $data_pendaftar['pekerjaan_ibu'] .'</td>
    </tr>
    <tr>
        <td>No Telepon Ibu</td>
        <td>: </td>
        <td>'. $data_pendaftar['telepon_ibu'] .'</td>
    </tr>
    <tr>
        <td><b>Identitas Wali</b></td>
    </tr>
    <tr>
        <td>Nama Wali</td>
        <td>: </td>
        <td>'. $data_pendaftar['nama_wali'] .'</td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir Wali</td>
        <td>: </td>
        <td>'. $data_pendaftar['pendidikan_akhir_wali'] .'</td>
    </tr>
    <tr>
        <td>Pekerjaan Wali</td>
        <td>: </td>
        <td>'. $data_pendaftar['pekerjaan_wali'] .'</td>
    </tr>
    <tr>
        <td>No Telepon Wali</td>
        <td>: </td>
        <td>'. $data_pendaftar['telepon_wali'] .'</td>
    </tr>
    <tr>
        <td>Username</td>
        <td>: </td>
        <td>'. $data_pendaftar['username'] .'</td>
    </tr>
</table>
';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("data pendaftar.pdf", array("Attachment" => false));
?>



