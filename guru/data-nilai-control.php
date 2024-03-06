<?php

include('../config/koneksi.php');

function alert($command){
    echo "<script>alert('".$command."');</script>";
}
function redir($command){
    echo "<script>document.location='".$command."';</script>";
}

if(isset($_POST['hapusnilai'])) {
    $idnlai = $_POST['idnilai'];

    $delete = "delete from nilai where id='$idnlai'";

    $query_delete = mysqli_query($conn, $delete);

    if($query_delete) {
            alert("Hapus Data Nilai Berhasil.");
            redir("data-nilai.php");
        }else{
            alert("Hapus Data Nilai Gagal.");
            redir("data-nilai.php");
    }
};



if(isset($_POST['editnilai'])){
    
    $nipd = $_POST['nipd'];
    $nama_siswa  = $_POST['nama_siswa'];
    $semester = $_POST['semester'];
    $rombel = $_POST['rombel'];
    $agama_dan_moral = addslashes(ucwords($_POST['agama_dan_moral']));
    $motorik = addslashes(ucwords($_POST['motorik']));
    $kognitif = addslashes(ucwords($_POST['kognitif']));
    $sosial_emosional = addslashes(ucwords($_POST['sosial_emosional']));
    $bahasa = addslashes(ucwords($_POST['bahasa']));
    $seni = addslashes(ucwords($_POST['seni']));
    $thn_ajaran = $_POST['thn_ajaran'];

    $idnil = $_POST['idnilai'];

    $update = "update nilai set nama_siswa='$nama_siswa', nipd='$nipd', semester='$semester', agama_dan_moral='$agama_dan_moral',
    motorik='$motorik', kognitif='$kognitif', sosial_emosional='$sosial_emosional', bahasa='$bahasa', seni='$seni', thn_ajaran='$thn_ajaran', rombel='$rombel'
    where id='$idnil'";
    $query_update = mysqli_query($conn, $update);

    if($query_update){
            alert("Edit Data Nilai Berhasil.");
            // redir("data-nilai.php");
        }else{
            alert("Edit Data Nilai Gagal.");
            // redir("data-nilai.php");
    }
};

//tambah siswa
if(isset($_POST['tambahnilai'])) {
    
    // print_r($_POST);

    $nipd = $_POST['nipd'];
    $nama_siswa  = $_POST['nama_siswa'];
    $semester = $_POST['semester'];
    $rombel = $_POST['rombel'];
    $agama_dan_moral = addslashes(ucwords($_POST['agama_dan_moral']));
    $motorik = addslashes(ucwords($_POST['motorik']));
    $kognitif = addslashes(ucwords($_POST['kognitif']));
    $sosial_emosional = addslashes(ucwords($_POST['sosial_emosional']));
    $bahasa = addslashes(ucwords($_POST['bahasa']));
    $seni = addslashes(ucwords($_POST['seni']));
    $thn_ajaran = $_POST['thn_ajaran'];

    //insert table pendaftar
    $sql_nilai = "INSERT INTO nilai (nama_siswa, nipd, semester, agama_dan_moral,
    motorik, kognitif, sosial_emosional, bahasa, seni, thn_ajaran, rombel)
    values('$nama_siswa','$nipd', '$semester', '$agama_dan_moral',
    '$motorik','$kognitif','$sosial_emosional','$bahasa','$seni', '$thn_ajaran', '$rombel')";

    $result_nilai = mysqli_query($conn, $sql_nilai);

    if($result_nilai){
            alert("Tambah Data Nilai Berhasil.");
            redir("data-nilai.php");
        }else{
            alert("Tambah Data Nilai Gagal.");
            redir("data-nilai.php");
    }
};

?>