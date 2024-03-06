<?php 

$id_siswa = $_GET['id'];

// echo $id_pendaftar;
// die;

$sql_siswa = "SELECT * FROM siswa where id = '$id_siswa'";
$result_siswa = mysqli_query($conn, $sql_siswa);
$data_siswa = mysqli_fetch_array($result_siswa);


if(!$result_siswa) {
    die('query error : '. mysqli_error($conn));
}
?>