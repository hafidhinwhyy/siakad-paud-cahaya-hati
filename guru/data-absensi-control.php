<?php

include('../config/koneksi.php');

function alert($command){
    echo "<script>alert('".$command."');</script>";
}
function redir($command){
    echo "<script>document.location='".$command."';</script>";
}

//edit absen
if(isset($_POST['editabsen'])){

    $nama_siswa  =  $_POST['nama_siswa'];
    $absen  =  $_POST['absen'];
    $izin  =  $_POST['izin'];
    $sakit  =  $_POST['sakit'];

    $idabsn  =  $_POST['idabsensi'];

    $update = "update absensi set nama_siswa='$nama_siswa', absen='$absen', izin='$izin', sakit='$sakit'  where id='$idabsn' ";
    $query_update = mysqli_query($conn, $update);

        if($query_update){
            alert("Edit Data Absensi Berhasil.");
            redir("data-absensi.php");
        }else{
            alert("Edit Data Absensi Gagal.");
            redir("data-absensi.php");
        }
    };

if(isset($_POST['hapusabsen'])) {
    $idabsn = $_POST['idabsensi'];

    $delete = "delete from absensi where id='$idabsn'";

    $query_delete = mysqli_query($conn, $delete);

    if($query_delete) {
            alert("Hapus Data Absensi Berhasil.");
            // redir("data-absensi.php");
        }else{
            alert("Hapus Data Absensi Gagal.");
            // redir("data-absensi.php");
    }
};


    //tambah absen
    if(isset($_POST['tambahabsen'])){

        $nama_siswa  =  $_POST['nama_siswa'];
        $absen  =  $_POST['absen'];
        $izin  =  $_POST['izin'];
        $sakit  =  $_POST['sakit'];

            $simpan = "INSERT INTO absensi (nama_siswa, absen, izin, sakit) values('$nama_siswa', '$absen', '$izin', '$sakit')";

            $query_simpan = mysqli_query($conn, $simpan);

            if($query_simpan){
                alert("Tambah Data Absensi Berhasil.");
                redir("data-absensi.php");
            }else{
                alert("Tambah Data Absensi Gagal.");
                redir("data-absensi.php");
            }
        }

    
?>