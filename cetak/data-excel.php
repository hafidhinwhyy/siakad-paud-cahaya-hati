<?php 
    header("Content-type: application/vnd-md-excel");
    header("Content-Disposition: attachment; filename=Data Pendaftaran.xls");

    include ('../config/koneksi.php');

    //tabel pendaftar
    $all_pendaftar = mysqli_query($conn, "SELECT * FROM pendaftar order by nama");

    $html = '
    <table width="100%" border="1">
    <tr>
        <th width="5%">No</th>
        <th width="17%">Nama</th>
        <th width="20%">TTL</th>
        <th width="13%">Jenis Kelamin</th>
        <th>Alamat</th>
        <th width="10%">Kelas</th>
    </tr>';

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

    echo $html;

?>