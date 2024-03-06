<?php 

$id_nilai = $_GET['id'];

$sql_nilai = "SELECT * FROM nilai where id = '$id_nilai'";
$result_nilai = mysqli_query($conn, $sql_nilai);
$data_nilai = mysqli_fetch_array($result_nilai);


if(!$result_nilai) {
    die('query error : '. mysqli_error($conn));
}

?>