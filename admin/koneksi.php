<?php 
$conn = mysqli_connect("localhost","root","","db_paud");

// cek koneksi
if(mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_errno();
}

?>