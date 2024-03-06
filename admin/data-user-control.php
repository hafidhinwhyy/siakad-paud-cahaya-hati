<?php

include('../config/koneksi.php');

function alert($command){
    echo "<script>alert('".$command."');</script>";
}
function redir($command){
    echo "<script>document.location='".$command."';</script>";
}

if(isset($_POST['hapususer'])) {
    $idusr = $_POST['iduser'];

    // $foto = $_POST['foto'];

    // $deletefoto = "select foto from guru where id='$idgru'";

    // if(file_exists("../uploads/guru/" .$foto)){

    //     unlink("../uploads/guru/" .$foto);
    // }

    $delete = "delete from user where id='$idusr'";

    $query_delete = mysqli_query($conn, $delete);

    if($query_delete) {
            alert("Hapus Data User Berhasil.");
            // redir("data-user.php");
    }else{
            alert("Hapus Data User Gagal.");
            // redir("data-user.php");
    }
};



if(isset($_POST['edituser'])){

    $password = md5($_POST['password']);
    
    $idus = $_POST['iduser'];

    $update = "update user set password='$password' where id='$idus' ";
    $query_update = mysqli_query($conn, $update);

    if($query_update){
            alert("Edit Password User Berhasil.");
            // redir("data-user.php");
    }else{
            alert("Edit Password User Gagal.");
            // redir("data-user.php");
    }
};

// //tambah guru
// if(isset($_POST['tambahguru'])){

//     $nama_guru  =  $_POST['nama_guru'];
//     $username  =  $_POST['username'];
//     $tpt_lahir  =  ucwords($_POST['tpt_lahir']);
//     $tgl_lahir = date("Y-m-d", strtotime($_POST['tgl_lahir']));
//     $alamat   = addslashes(ucwords( $_POST['alamat']));  //supaya bisa input nama dengan karakter, mis: (').
//     $jabatan  =  $_POST['jabatan'];
//     $tmt = date("Y-m-d", strtotime($_POST['tmt']));
//     $tgl_sk = date("Y-m-d", strtotime($_POST['tgl_sk']));
//     $no_sk  = $_POST['no_sk'];

//     $filename  = $_FILES['foto']['name'];  // tampung file
//     $tmpname  = $_FILES['foto']['tmp_name'];
//     $filesize  = $_FILES['foto']['size'];

//     $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
//     $rename     = 'guru'.time().'.'.$formatfile;
//     $allowedtype = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah

//     if(!in_array($formatfile, $allowedtype)){
//         echo '<div class="alert alert-error">Format File tidak diizinkan.</div>';
//     }elseif($filesize > 1000000){
//         echo '<div class="alert alert-error">Ukuran File tidak boleh lebih dari 1 MB.</div>';
//     }else{
//         move_uploaded_file($tmpname, "../uploads/guru/".$rename);

//         // insert tabel user
//         $sql_user = "INSERT INTO user (nama, username, password, level) values('$nama_guru','$username','202cb962ac59075b964b07152d234b70','guru')";
//         $result_user = mysqli_query($conn, $sql_user);
    
//         $simpan = "INSERT INTO guru (nama_guru, username, tpt_lahir, tgl_lahir, alamat, jabatan, tmt, tgl_sk, no_sk, foto)
//         values('$nama_guru', '$username', '$tpt_lahir', '$tgl_lahir', '$alamat', '$jabatan', '$tmt', '$tgl_sk', '$no_sk', '$rename')";

//         $query_simpan = mysqli_query($conn, $simpan);

//         if($query_simpan){
//             alert("Tambah Data Guru Berhasil.");
//             redir("data-guru.php");
//         }else{
//             alert("Tambah Data Guru Gagal.");
//             redir("data-guru.php");
//         }
//     }

// }

?>