<?php 

$id_pendaftar = $_GET['id'];

// echo $id_pendaftar;
// die;

$sql_pendaftar = "SELECT * FROM pendaftar where id = '$id_pendaftar'";
$result_pendaftar = mysqli_query($conn, $sql_pendaftar);
$data_pendaftar = mysqli_fetch_array($result_pendaftar);


if(!$result_pendaftar) {
    die('query error : '. mysqli_error($conn));
}
?>