<?php 

$nama_user = $_SESSION['nama'];
$sql_nilai = "SELECT * FROM nilai where nama_siswa = '$nama_user'";
$result_nilai = mysqli_query($conn, $sql_nilai);

if(mysqli_num_rows($result_nilai)) {

    $data_nilai = mysqli_fetch_array($result_nilai);
    $nama_nilai = $data_nilai['nama_siswa'];

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