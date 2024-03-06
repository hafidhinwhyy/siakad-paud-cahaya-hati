<?php 

$id_user = $_SESSION['id_user'];
$sql_siswa = "SELECT * FROM siswa where username = '$id_user'";
$result_siswa = mysqli_query($conn, $sql_siswa);

if(mysqli_num_rows($result_siswa)) {

    $data_siswa = mysqli_fetch_array($result_siswa);
    $id_siswa = $data_siswa['username'];

    //simpan untuk proses data
    // if(isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == 'simpan_data') {
    //     $status = $_SESSION['status'];
    
    //     $sql_insert_data = "UPDATE pendaftar SET status = '1' where username = '$username'";

    //     $query_insert_data = mysqli_query($conn, $sql_insert_data);

    //     if($query_insert_data) {

    //     } else {
    //         echo "error" . mysqli_error($conn);
    //         die;
    //     }
    // } 
} 

?>