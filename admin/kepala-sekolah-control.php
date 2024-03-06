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
    $data_kepala_sekolah = mysqli_fetch_array($result_identitas);

    if(isset($_POST['btn_simpan']) == 'simpan_datakepsek'){

        $nama_kepsek   = addslashes($_POST['nama_kepsek']);  //supaya bisa input nama dengan karakter, mis: (').
        $sambutan_kepsek   = addslashes($_POST['sambutan_kepsek']);
        $currdate = date('Y-m-d H:i:s');


        //menampung dan validasi data foto kepala sekolah

        if($_FILES['foto_baru']['name'] != ''){


            $filename  = $_FILES['foto_baru']['name'];  // tampung file
            $tmpname  = $_FILES['foto_baru']['tmp_name'];
            $filesize  = $_FILES['foto_baru']['size'];

            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename     = 'kepalasekolah'.time().'.'.$formatfile;
            

            $allowedtype = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah
            
            if(!in_array($formatfile, $allowedtype)){

                echo '<div class="alert alert-error">Format File foto kepala sekolah tidak diizinkan.</div>';
                
                return false;

            }elseif($filesize > 1000000){
                echo '<div class="alert alert-error">Ukuran File foto kepala sekolah tidak boleh lebih dari 1 MB.</div>';
                
                return false;

            }else{


                if(file_exists("../uploads/identitas/".$_POST['foto_lama'])){

                    unlink ("../uploads/identitas/".$_POST['foto_lama']);
                }

            move_uploaded_file($tmpname, "../uploads/identitas/".$rename);
            
            }
        }else{
            
            $rename = $_POST['foto_lama'];


        }

        $sql_update_identitas  = "update pengaturan set nama_kepsek ='$nama_kepsek', sambutan_kepsek='$sambutan_kepsek',
        foto_kepsek='$rename' where id='1'";


        $query_update_identitas = mysqli_query($conn, $sql_update_identitas);

        if($query_update_identitas) {

            //berhasil

            alert("Update Data Berhasil.");
            redir("kepala-sekolah.php");

        } else {
            alert("Update Data Gagal.");
            redir("kepala-sekolah.php");
        }

    }
};

?>