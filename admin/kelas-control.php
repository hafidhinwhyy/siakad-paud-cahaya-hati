<?php

include('../config/koneksi.php');

function alert($command){
    echo "<script>alert('".$command."');</script>";
}
function redir($command){
    echo "<script>document.location='".$command."';</script>";
}

    //tambah kelas
    if(isset($_POST['tambahkelas'])){

        $nama  =  $_POST['nama'];
        $umur  =  $_POST['umur'];
        $keterangan   = addslashes(ucwords( $_POST['keterangan']));  //supaya bisa input nama dengan karakter, mis: (').

        $filename  = $_FILES['foto']['name'];  // tampung file
        $tmpname  = $_FILES['foto']['tmp_name'];
        $filesize  = $_FILES['foto']['size'];

        $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
        $rename     = 'kelas'.time().'.'.$formatfile;
        $allowedtype = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah

        if(!in_array($formatfile, $allowedtype)){
            echo '<div class="alert alert-error">Format File tidak diizinkan.</div>';
        }elseif($filesize > 1000000){
            echo '<div class="alert alert-error">Ukuran File tidak boleh lebih dari 1 MB.</div>';
        }else{
            move_uploaded_file($tmpname, "../uploads/kelas/".$rename);
        
            $simpan = "INSERT INTO kelas (nama, umur, keterangan, foto) values('$nama', '$umur', '$keterangan', '$rename')";

            $query_simpan = mysqli_query($conn, $simpan);

            if($query_simpan){
                alert("Tambah Data Kelas Berhasil.");
                redir("kelas.php");
            }else{
                alert("Tambah Data Kelas Gagal.");
                redir("kelas.php");
            }
        }

    }

    //pengujian jika tombol edit/hapus diklik
    // if(isset($_GET['hal'])) {
        
    //     //pengujian edit data
    //     if($_GET['hal'] == "edit")
    //     {"INSERT INTO kelas (nama, umur, keterangan) values()"
    //         //tampilkan data yang akan diedit
    //         $tampil = mysqli_query($conn, "SELECT * FROM kelas where id= '$_GET[id]' ");
    //         $k = mysqli_fetch_array($tampil);
    //         if($k) {
    //             //jika data ditemukan, maka data ditampung kedalam variable
    //             $vnama = $k['nama'];
    //             $vumur = $k['umur'];
    //             $vjamkelas = $k['jamkelas'];
    //             $vkelompok = $k['kelompok'];
    //             $vketerangan = $k['keterangan'];
    //         }
    //     }
    // }

                                                    
    if(isset($_POST['editkelas'])){

        $nama  = addslashes(ucwords( $_POST['nama']));
        $umur  = addslashes(ucwords( $_POST['umur']));
        $keterangan   = addslashes(ucwords( $_POST['keterangan']));  //supaya bisa input nama dengan karakter, mis: (').
        $idkls = $_POST['idkelas'];

        if($_FILES['gambar']['name'] != ''){
            // echo 'user ganti foto';
            $filename  = $_FILES['gambar']['name'];  // tampung file
            $tmpname  = $_FILES['gambar']['tmp_name'];
            $filesize  = $_FILES['gambar']['size'];
            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename     = 'kelas'.time().'.'.$formatfile;

            $allowedtype = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah
            
            if(!in_array($formatfile, $allowedtype)){
                echo '<div class="alert alert-error">Format File tidak diizinkan.</div>';
                return false;

            }elseif($filesize > 1000000){
                echo '<div class="alert alert-error">Ukuran File tidak boleh lebih dari 1 MB.</div>';
                return false;
            }else{
                if(file_exists("../uploads/kelas/".$_POST['gambar2'])){
                    unlink ("../uploads/kelas/".$_POST['gambar2']);
                }
                move_uploaded_file($tmpname, "../uploads/kelas/".$rename);
            }
        } else {
            // echo 'user tidak ganti foto';
            $rename = $_POST['gambar2'];
        }
        $update = "update kelas set nama='$nama', umur='$umur', keterangan='$keterangan', foto='$rename'  where id='$idkls' ";
        $query_update = mysqli_query($conn, $update);

        if($query_update){
                alert("Edit Data Kelas Berhasil.");
                redir("kelas.php");
            }else{
                alert("Edit Data Kelas Gagal.");
                redir("kelas.php");
        }
    };

    //hapuskelas
    if(isset($_POST['hapuskelas'])) {
        $idklss = $_POST['idkelas'];

        $foto = $_POST['foto'];

        $deletefoto = "select foto from kelas where id='$idklss'";

        if(file_exists("../uploads/kelas/" .$foto)){

            unlink("../uploads/kelas/" .$foto);
        }

        $delete = "delete from kelas where id='$idklss'";

        $query_delete = mysqli_query($conn, $delete);

        if($query_delete) {
                alert("Hapus Data Kelas Berhasil.");
                redir("kelas.php");
            }else{
                alert("Hapus Data Kelas Gagal.");
                redir("kelas.php");
        }
    };

                                            

?>