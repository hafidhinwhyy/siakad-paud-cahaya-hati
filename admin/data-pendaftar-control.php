<?php 
//tabel pendaftar
$all_pendaftar = mysqli_query($conn, "SELECT * FROM pendaftar");

//cek hasil
if(!$all_pendaftar) {
    die('query error : '. mysqli_error($conn));
}

if(isset($_GET['action']) && $_GET['action'] == "hapus") {
    $id_pendaftar = $_GET['id'];
    $query_pendaftar = mysqli_query($conn, "SELECT * FROM pendaftar where id = '$id_pendaftar'");

    if(mysqli_num_rows($query_pendaftar)) {

        $data_pendaftar = mysqli_fetch_array($query_pendaftar);
        $id_user = $data_pendaftar['id'];


        //hapus foto pendaftar
        unlink('../uploads/siswa/'.$data_pendaftar['foto']);
        $sql_hapus_pendaftar = mysqli_query($conn, "DELETE FROM pendaftar where id = '$id_pendaftar'");

        //hapus user
        $sql_hapus_user = mysqli_query($conn, "DELETE FROM user where id = '$id_pendaftar'");

        if(!$sql_hapus_pendaftar || !$sql_hapus_user) {
            die('query error:'. mysqli_error($conn));  
        } 

        //simpan session
        $_SESSION['pesan_sukses'] = "Data pendaftar berhasil dihapus!";
        header('location:data-pendaftar.php');

    } else {
        die('data pendaftar tidak ditemukan');
    }
}

?>