<?php 

function alert($command){
    echo "<script>alert('".$command."');</script>";
}
function redir($command){
    echo "<script>document.location='".$command."';</script>";
}

$sql_identitas = "select * from pengaturan where id='1'";
$result_identitas = mysqli_query($conn, $sql_identitas);

if(mysqli_num_rows($result_identitas)) {
    $data_identitas = mysqli_fetch_array($result_identitas);

    if(isset($_POST['btn_simpan']) == 'simpan_identitas'){

        $nama   = $_POST['nama'];  //supaya bisa input nama dengan karakter, mis: (').
        $email =  $_POST['email'];
        $telp   = $_POST['telp'];
        $alamat   = $_POST['alamat'];
        $gmaps   = $_POST['gmaps'];
        $currdate = date('Y-m-d H:i:s');


        //menampung dan validasi data logo

       // logo
       if($_FILES['logo_baru']['name'] != ''){


        $filename_logo  = $_FILES['logo_baru']['name'];  // tampung file
        $tmpname_logo  = $_FILES['logo_baru']['tmp_name'];
        $filesize_logo  = $_FILES['logo_baru']['size'];

        $formatfile_logo = pathinfo($filename_logo, PATHINFO_EXTENSION);
        $rename_logo     = 'logo'.time().'.'.$formatfile_logo;
        

        $allowedtype_logo = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah
        
        if(!in_array($formatfile_logo, $allowedtype_logo)){

            echo '<div class="alert alert-error">Format File logo sekolah tidak diizinkan.</div>';
            
            return false;

        }elseif($filesize_logo > 1000000){
            echo '<div class="alert alert-error">Ukuran File logo sekolah tidak boleh lebih dari 1 MB.</div>';
            
            return false;

        }else{


            if(file_exists("../uploads/identitas/".$_POST['logo_lama'])){

                unlink ("../uploads/identitas/".$_POST['logo_lama']);
            }

        move_uploaded_file($tmpname_logo, "../uploads/identitas/".$rename_logo);
        
        }
        }else{
        
        $rename_logo = $_POST['logo_lama'];


        }


    //menampung dan validasi data favicon

    if($_FILES['favicon_baru']['name'] != ''){

        $filename_favicon = $_FILES['favicon_baru']['name'];  // tampung file
        $tmpname_favicon  = $_FILES['favicon_baru']['tmp_name'];
        $filesize_favicon  = $_FILES['favicon_baru']['size'];

        $formatfile_favicon = pathinfo($filename_favicon, PATHINFO_EXTENSION);
        $rename_favicon     = 'favicon'.time().'.'.$formatfile_favicon;
        

        $allowedtype_favicon = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah
        
        if(!in_array($formatfile_favicon, $allowedtype_favicon)){

            echo '<div class="alert alert-error">Format File favicon sekolah tidak diizinkan.</div>';
            
            return false;

        }elseif($filesize_favicon > 1000000){
            echo '<div class="alert alert-error">Ukuran File favicon sekolah tidak boleh lebih dari 1 MB.</div>';
            
            return false;

        }else{


            if(file_exists("../uploads/identitas/".$_POST['favicon_lama'])){

                unlink ("../uploads/identitas/".$_POST['favicon_lama']);
            }

        move_uploaded_file($tmpname_favicon, "../uploads/identitas/".$rename_favicon);
        
        }
    }else{
        
        $rename_favicon = $_POST['favicon_lama'];


    }

    $sql_update_identitas = "update pengaturan set nama='$nama', email='$email',
    telepon='$telp', alamat='$alamat', google_maps='$gmaps', logo='$rename_logo', favicon='$rename_favicon' where id='1'";
    
    $query_update_identitas = mysqli_query($conn, $sql_update_identitas);

        if($query_update_identitas) {

            //berhasil
            alert("Update Data Berhasil.");
            redir("identitas-sekolah.php");

        } else {
            alert("Update Data Gagal.");
            redir("identitas-sekolah.php");
        }
    }
};

?>