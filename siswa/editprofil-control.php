<?php 

$id_user = $_SESSION['id_user'];
$sql_pendaftar = "select * from pendaftar where username = '$id_user'";
$result_pendaftar = mysqli_query($conn, $sql_pendaftar);

if(mysqli_num_rows($result_pendaftar)) {

    $data_pendaftar = mysqli_fetch_array($result_pendaftar);

    if(isset($_POST['btn_simpan']) == 'simpan_profil') {
        
        $id_pendaftar = $data_pendaftar['username'];
        $nama = $_POST['nama'];
        $nama_panggil = $_POST['nama_panggil'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['kelas'];
        $anak_ke = $_POST['anak_ke'];
        $berat_badan = $_POST['berat_badan'];
        $tinggi_badan = $_POST['tinggi_badan'];
        $alamat = $_POST['alamat'];
        $berat_badan_lahir = $_POST['berat_badan_lahir'];
        $penyakit_sering_diderita = $_POST['penyakit_sering_diderita'];
        $penyakit_pernah_diderita = $_POST['penyakit_pernah_diderita'];
        $pantangan_makan = $_POST['pantangan_makan'];
        $nama_ayah_kdg = $_POST['nama_ayah_kdg'];
        $tempat_lahir_ayah = $_POST['tempat_lahir_ayah'];
        $tanggal_lahir_ayah = date("Y-m-d", strtotime($_POST['tanggal_lahir_ayah']));
        $pendidikan_akhir_ayah = $_POST['pendidikan_akhir_ayah'];
        $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
        $telepon_ayah = $_POST['telepon_ayah'];
        $nama_ibu_kdg = $_POST['nama_ibu_kdg'];
        $tempat_lahir_ibu = $_POST['tempat_lahir_ibu'];
        $tanggal_lahir_ibu = date("Y-m-d", strtotime($_POST['tanggal_lahir_ibu']));
        $pendidikan_akhir_ibu = $_POST['pendidikan_akhir_ibu'];
        $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
        $telepon_ibu = $_POST['telepon_ibu'];
        $alamat_ortu = $_POST['alamat_ortu'];
        $nama_wali = $_POST['nama_wali'];
        $pendidikan_akhir_wali = $_POST['pendidikan_akhir_wali'];
        $pekerjaan_wali = $_POST['pekerjaan_wali'];
        $telepon_wali = $_POST['telepon_wali'];
        $alamat_wali = $_POST['alamat_wali'];
        $username = $_POST['username'];


        if($_FILES['foto_baru']['name'] != ''){


            $filename  = $_FILES['foto_baru']['name'];  // tampung file
            $tmpname  = $_FILES['foto_baru']['tmp_name'];
            $filesize  = $_FILES['foto_baru']['size'];

            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename     = $nama . '.' . $formatfile;
            

            $allowedtype = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah
            
            if(!in_array($formatfile, $allowedtype)){

                echo '<div class="alert alert-error">Format File foto sekolah tidak diizinkan.</div>';
                
                return false;

            }elseif($filesize > 1000000){
                echo '<div class="alert alert-error">Ukuran File foto sekolah tidak boleh lebih dari 1 MB.</div>';
                
                return false;

            }else{


                if(file_exists("../uploads/siswa/".$_POST['foto_lama'])){

                    unlink ("../uploads/siswa/".$_POST['foto_lama']);
                }

            move_uploaded_file($tmpname, "../uploads/siswa/".$rename);
            
            }
        }else{
            
            $rename = $_POST['foto_lama'];


        }


        $sql_update_profil = "update pendaftar set nama='$nama', nama_panggil='$nama_panggil', tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', kelas='$kelas', anak_ke='$anak_ke', berat_badan='$berat_badan',
        tinggi_badan='$tinggi_badan', alamat='$alamat', berat_badan_lahir='$berat_badan_lahir', penyakit_sering_diderita='$penyakit_sering_diderita',
        penyakit_pernah_diderita='$penyakit_pernah_diderita', pantangan_makan='$pantangan_makan', nama_ayah_kdg='$nama_ayah_kdg',
        tempat_lahir_ayah='$tempat_lahir_ayah', tanggal_lahir_ayah='$tanggal_lahir_ayah', pendidikan_akhir_ayah='$pendidikan_akhir_ayah',
        pekerjaan_ayah='$pekerjaan_ayah', telepon_ayah='$telepon_ayah', nama_ibu_kdg='$nama_ibu_kdg', tempat_lahir_ibu='$tempat_lahir_ibu',
        tanggal_lahir_ibu='$tanggal_lahir_ibu', pendidikan_akhir_ibu='$pendidikan_akhir_ibu', pekerjaan_ibu='$pekerjaan_ibu',
        telepon_ibu='$telepon_ibu', alamat_ortu='$alamat_ortu', nama_wali='$nama_wali', pendidikan_akhir_wali='$pendidikan_akhir_wali', pekerjaan_wali='$pekerjaan_wali', 
        telepon_wali='$telepon_wali', alamat_wali='$alamat_wali',username='$username', foto='$rename' where username='$id_pendaftar'";


        $query_update_profil = mysqli_query($conn, $sql_update_profil);

        if($query_update_profil) {

            //berhasil

            $_SESSION['pesan_sukses'] = 'Edit Profil Sukses!';

            header('location:dashboard.php');

        } else {
            // echo "gagal update data profil";
            echo "error" . mysqli_error($conn);
            die;
        }

    }
};

        // gambar
        // if($_FILES['gambar']['name'] != '') {

        //     $ekstensi_diperbolehkan = array('png','jpg');
        //     $nama_gambar = $_FILES['gambar']['name'];
        //     $x = explode('.', $nama_gambar);
        //     $ekstensi = strtolower(end($x));
        //     $ukuran = $_FILES['gambar']['size'];
        //     $file_tmp = $_FILES['gambar']['tmp_name'];

        //     $ubah_nama = $nama . '.' . $ekstensi;

        //     if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        //         if($ukuran < 1044070) {
        //             move_uploaded_file($file_tmp, '../uploads/siswa/'.$ubah_nama);

        //             $sql_update_profil = "update pendaftar set foto = '$ubah_nama' where username='$id_pendaftar'";
        //             $query_update = mysqli_query($conn, $sql_update_profil);

        //             if($sql_update_profil) {

        //             } else {
        //                 echo "gagal upload" ; die;
        //             }


        //         } else {
        //             echo "gambar terlalu besar"; die;
        //         }

        //     } else {
        //         echo "ekstensi tidak diperbolehkan"; die;
        //     }
        // }

//         $sql_update_profil = "update pendaftar set 
//         nama='$nama', 
//         nama_panggil='$nama_panggil', 
//         tempat_lahir='$tempat_lahir',
//         tanggal_lahir='$tanggal_lahir', 
//         jenis_kelamin='$jenis_kelamin', 
//         kelas='$kelas', 
//         anak_ke='$anak_ke', 
//         berat_badan='$berat_badan',
//         tinggi_badan='$tinggi_badan', 
//         alamat='$alamat', 
//         berat_badan_lahir='$berat_badan_lahir', 
//         penyakit_sering_diderita='$penyakit_sering_diderita',
//         penyakit_pernah_diderita='$penyakit_pernah_diderita', 
//         pantangan_makan='$pantangan_makan', 
//         nama_ayah_kdg='$nama_ayah_kdg',
//         tempat_lahir_ayah='$tempat_lahir_ayah', 
//         tanggal_lahir_ayah='$tanggal_lahir_ayah', 
//         pendidikan_akhir_ayah='$pendidikan_akhir_ayah',
//         pekerjaan_ayah='$pekerjaan_ayah', 
//         telepon_ayah='$telepon_ayah', 
//         nama_ibu_kdg='$nama_ibu_kdg', 
//         tempat_lahir_ibu='$tempat_lahir_ibu',
//         tanggal_lahir_ibu='$tanggal_lahir_ibu', 
//         pendidikan_akhir_ibu='$pendidikan_akhir_ibu', 
//         pekerjaan_ibu='$pekerjaan_ibu',
//         telepon_ibu='$telepon_ibu', 
//         alamat_ortu='$alamat_ortu, 
//         nama_wali='$nama_wali', 
//         pendidikan_akhir_wali='$pendidikan_akhir_wali',
//         pekerjaan_wali='$pekerjaan_wali', 
//         telepon_wali='$telepon_wali', 
//         alamat_wali='$alamat_wali', 
//         username='$username' 
        
//         where username='$id_pendaftar'";
        
//         $query_update_profil = mysqli_query($conn, $sql_update_profil);

//         if($query_update_profil) {

//             //berhasil

//             $_SESSION['pesan_sukses'] = 'Edit Profil Sukses!';

//             header('location:dashboard.php');

//         } else {
//             // $_SESSION['pesan_error'] = 'Edit Profil Gagal!';

//             echo "gagal update data profil";
//         }

        

//     }
// };

?>