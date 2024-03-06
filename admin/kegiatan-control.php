<?php

include('../config/koneksi.php');
function alert($command){
    echo "<script>alert('".$command."');</script>";
}
function redir($command){
    echo "<script>document.location='".$command."';</script>";
}

if(isset($_POST['submit'])){
    $nama   = addslashes(ucwords( $_POST['nama']));  //supaya bisa input nama dengan karakter, mis: (').
    $keterangan   =  addslashes($_POST['keterangan']);
    $tujuan   = addslashes($_POST['tujuan']);
    $sasaran   = addslashes(ucwords( $_POST['sasaran']));
    $sbr_dana   =  addslashes($_POST['sbr_dana']);
    $pj   = addslashes($_POST['pj']);

    $filename  = $_FILES['gambar']['name'];  // tampung file
    $tmpname  = $_FILES['gambar']['tmp_name'];
    $filesize  = $_FILES['gambar']['size'];
    $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
    $rename     = 'kegiatan'.time().'.'.$formatfile;
    $allowedtype = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah

    if(!in_array($formatfile, $allowedtype)){
        echo '<div class="alert alert-error">Format File tidak diizinkan.</div>';
    }elseif($filesize > 1000000){
        echo '<div class="alert alert-error">Ukuran File tidak boleh lebih dari 1 MB.</div>';
    }else{
        move_uploaded_file($tmpname, "../uploads/kegiatan/".$rename);
    
        $simpan = "INSERT INTO kegiatan VALUES (
                null,
                '".$nama."',
                '".$keterangan."',
                '".$tujuan."',
                '".$sasaran."',
                '".$sbr_dana."',
                '".$pj."',
                '".$rename."',
                null,
                null
        )";

        $query_simpan = mysqli_query($conn, $simpan);

        if($query_simpan){
            alert("Tambah Data Kegiatan Berhasil.");
            redir("kegiatan.php");
        }else{
            alert("Tambah Data Kegiatan Gagal.");
            redir("kegiatan.php");
        }
    }
};


 //edit kegiatan
if(isset($_POST['editkegiatan'])){

    $nama   = addslashes(ucwords( $_POST['nama']));  //supaya bisa input nama dengan karakter, mis: (').
    $keterangan   = addslashes(ucwords( $_POST['keterangan']));
    $tujuan   = addslashes(ucwords( $_POST['tujuan']));
    $sasaran   = addslashes(ucwords( $_POST['sasaran']));
    $sbr_dana   = addslashes(ucwords( $_POST['sbr_dana']));
    $pj   = addslashes(ucwords( $_POST['pj']));

    $idkg = $_POST['idkegiatan'];
    $currdate = date('Y-m-d H:i:s');

    if($_FILES['gambar']['name'] != ''){
        // echo 'user ganti gambar';
        $filename  = $_FILES['gambar']['name'];  // tampung file
        $tmpname  = $_FILES['gambar']['tmp_name'];
        $filesize  = $_FILES['gambar']['size'];
        $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
        $rename     = 'kegiatan'.time().'.'.$formatfile;
        $allowedtype = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah
        
        if(!in_array($formatfile, $allowedtype)){
            echo '<div class="alert alert-error">Format File tidak diizinkan.</div>';
            return false;
        }elseif($filesize > 1000000){
            echo '<div class="alert alert-error">Ukuran File tidak boleh lebih dari 1 MB.</div>';
            return false;
        }else{
            if(file_exists("../uploads/kegiatan/".$_POST['gambar2'])){
                unlink ("../uploads/kegiatan/".$_POST['gambar2']);
            }
            move_uploaded_file($tmpname, "../uploads/kegiatan/".$rename);
        }
    }else{
        // echo 'user tidak ganti gambar';
        $rename = $_POST['gambar2'];
    }
    $update = "update kegiatan set nama='$nama', keterangan='$keterangan', tujuan='$tujuan',
    sasaran='$sasaran', sbr_dana='$sbr_dana', pj='$pj', gambar='$rename', updated_at = '$currdate' where id='$idkg'";
    $query_update = mysqli_query($conn, $update);
    
    if($query_update){
            alert("Edit Data Kegiatan Berhasil.");
            redir("kegiatan.php");
        }else{
            alert("Edit Data Kegiatan Gagal.");
            redir("kegiatan.php");
    }
};

//hapus kegiatan

if(isset($_POST['hapuskegiatan'])) {
    $idkg = $_POST['idkegiatan'];

    $gambar = $_POST['gambar'];

    $deletefoto = "select gambar from kegiatan where id='$idkg'";

    if(file_exists("../uploads/kegiatan/" .$gambar)){

        unlink("../uploads/kegiatan/" .$gambar);
    }

    $delete = "delete from kegiatan where id='$idkg'";

    $query_delete = mysqli_query($conn, $delete);

    if($query_delete) {
            alert("Hapus Data Kegiatan Berhasil.");
            redir("kegiatan.php");
        }else{
            alert("Hapus Data Kegiatan Gagal.");
            redir("kegiatan.php");
    }
};


?>