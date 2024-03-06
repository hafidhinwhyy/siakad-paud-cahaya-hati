<?php 

    //tabel pendaftar
    $all_pendaftar = mysqli_query($conn, "SELECT * FROM pendaftar");

    //cek hasil
    if(!$all_pendaftar) {
        die('query error : '. mysqli_error($conn));
    }

    //jumlah pendaftar
    $jml_pendaftar = mysqli_query($conn, "SELECT * FROM pendaftar");

    //cek hasil
    if(!$all_pendaftar) {
        die('query error : '. mysqli_error($conn));
    }

    //cek hasil
    if(!$all_pendaftar) {
        die('query error : '. mysqli_error($conn));
    }

?>