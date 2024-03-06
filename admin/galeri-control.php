<?php 
//tabel pendaftar
$all_siswa = mysqli_query($conn, "SELECT * FROM siswa");

//cek hasil
if(!$all_siswa) {
    die('query error : '. mysqli_error($conn));
}

if(isset($_GET['action']) && $_GET['action'] == "hapus") {
    $id_siswa = $_GET['id'];
    $query_siswa = mysqli_query($conn, "SELECT * FROM siswa where id = '$id_siswa'");

    if(mysqli_num_rows($query_siswa)) {

        $data_siswa = mysqli_fetch_array($query_siswa);
        $id_user = $data_siswa['id'];


        //hapus foto pendaftar
        unlink('../uploads/siswa/'.$data_siswa['foto']);
        $sql_hapus_siswa = mysqli_query($conn, "DELETE FROM siswa where id = '$id_siswa'");

        //hapus user
        $sql_hapus_user = mysqli_query($conn, "DELETE FROM user where id = '$id_siswa'");

        if(!$sql_hapus_siswa || !$sql_hapus_user) {
            die('query error:'. mysqli_error($conn));  
        } 

        //simpan session
        $_SESSION['pesan_sukses'] = "Data siswa berhasil dihapus!";
        header('location:data-siswa.php');

    } else {
        die('data siswa tidak ditemukan');
    }
}



if(isset($_POST['editsiswa'])){

    $nipd  = addslashes(ucwords( $_POST['nipd']));
    $nama_siswa  = addslashes(ucwords( $_POST['nama_siswa']));
    $username  = addslashes(ucwords( $_POST['username']));
    $jk  = addslashes(ucwords( $_POST['jk']));
    $nisn  = addslashes(ucwords( $_POST['nisn']));
    $tpt_lahir  = addslashes(ucwords( $_POST['tpt_lahir']));
    $tgl_lahir  = addslashes(ucwords( $_POST['tgl_lahir']));
    $nik_siswa  = addslashes(ucwords( $_POST['nik_siswa']));
    $agama  = addslashes(ucwords( $_POST['agama']));
    $alamat   = addslashes(ucwords( $_POST['alamat']));  //supaya bisa input nama dengan karakter, mis: (').
    $jns_tinggal  = addslashes(ucwords( $_POST['jns_tinggal']));
    $transportasi  = addslashes(ucwords( $_POST['transportasi']));
    $rombel  = addslashes(ucwords( $_POST['rombel']));
    $no_telp  = addslashes(ucwords( $_POST['no_telp']));
    $email  = addslashes(ucwords( $_POST['email']));
    $skhun  = addslashes(ucwords( $_POST['skhun']));
    $penerima_kps  = addslashes(ucwords( $_POST['penerima_kps']));
    $no_kps  = addslashes(ucwords( $_POST['no_kps']));
    $nama_ayah  = addslashes(ucwords( $_POST['nama_ayah']));
    $thn_lahir_ayah  = addslashes(ucwords( $_POST['thn_lahir_ayah']));
    $pendidikan_ayah  = addslashes(ucwords( $_POST['pendidikan_ayah']));
    $pekerjaan_ayah  = addslashes(ucwords( $_POST['pekerjaan_ayah']));
    $penghasilan_ayah  = addslashes(ucwords( $_POST['penghasilan_ayah']));
    $nik_ayah  = addslashes(ucwords( $_POST['nik_ayah']));
    $nama_ibu  = addslashes(ucwords( $_POST['nama_ibu']));
    $thn_lahir_ibu  = addslashes(ucwords( $_POST['thn_lahir_ibu']));
    $pendidikan_ibu  = addslashes(ucwords( $_POST['pendidikan_ibu']));
    $pekerjaan_ibu  = addslashes(ucwords( $_POST['pekerjaan_ibu']));
    $penghasilan_ibu  = addslashes(ucwords( $_POST['penghasilan_ibu']));
    $nik_ibu  = addslashes(ucwords( $_POST['nik_ibu']));

    $idssw = $_POST['idsiswa'];

    if($_FILES['gambar']['name'] != ''){
        // echo 'user ganti foto';
        $filename  = $_FILES['gambar']['name'];  // tampung file
        $tmpname  = $_FILES['gambar']['tmp_name'];
        $filesize  = $_FILES['gambar']['size'];
        $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
        $rename     = 'siswa'.time().'.'.$formatfile;

        $allowedtype = array('png','jpg','jpeg','gif');  //format file foto kegiatan yg dpt diunggah
        
        if(!in_array($formatfile, $allowedtype)){
            echo '<div class="alert alert-error">Format File tidak diizinkan.</div>';
            return false;

        }elseif($filesize > 1000000){
            echo '<div class="alert alert-error">Ukuran File tidak boleh lebih dari 1 MB.</div>';
            return false;
        }else{
            if(file_exists("../uploads/siswa/".$_POST['gambar2'])){
                unlink ("../uploads/siswa/".$_POST['gambar2']);
            }
            move_uploaded_file($tmpname, "../uploads/siswa/".$rename);
        }
    } else {
        // echo 'user tidak ganti foto';
        $rename = $_POST['gambar2'];
    }
    $update = "update siswa set nipd='$nipd', nama_siswa='$nama_siswa', username='$username', jk='$jk', nisn='$nisn', tpt_lahir='$tpt_lahir',
    tgl_lahir='$tgl_lahir', nik_siswa='$nik_siswa', agama='$agama', alamat='$alamat', jns_tinggal='$jns_tinggal', transportasi='$transportasi',
    rombel='$rombel', no_telp='$no_telp', email='$email', skhun='$skhun', penerima_kps='$penerima_kps', no_kps='$no_kps', foto='$rename',
    nama_ayah='$nama_ayah', thn_lahir_ayah='$thn_lahir_ayah', pendidikan_ayah='$pendidikan_ayah', pekerjaan_ayah='$pekerjaan_ayah', penghasilan_ayah='$penghasilan_ayah', nik_ayah='$nik_ayah',
    nama_ibu='$nama_ibu', thn_lahir_ibu='$thn_lahir_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', penghasilan_ibu='$penghasilan_ibu', nik_ibu='$nik_ibu'
    where id='$idssw' ";
    $query_update = mysqli_query($conn, $update);

    if($query_update){
        //berhasil
        $_SESSION['pesan_sukses'] = 'Edit Data Sukses!';
        header('location:data-siswa.php');
    }else{
        echo 'Gagal Edit' .mysqli_error($conn);
    }
};

//tambah siswa
// if(isset($_POST['tambah'])) {
    
//     // print_r($_POST);

//     $nipd = $_POST['nipd'];
//     $nama_siswa = $_POST['nama_siswa'];
//     $username = $_POST['username'];
//     $jk = $_POST['jk'];
//     $nisn = $_POST['nisn'];
//     $tpt_lahir = $_POST['tpt_lahir'];
//     $tgl_lahir = date("Y-m-d", strtotime($_POST['tgl_lahir']));
//     $nik_siswa = $_POST['nik_siswa'];
//     $agama = $_POST['agama'];
//     $alamat   = addslashes(ucwords( $_POST['alamat']));
//     $jns_tinggal = $_POST['jns_tinggal'];
//     $transportasi = $_POST['transportasi'];
//     $rombel = $_POST['rombel'];
//     $no_telp = $_POST['no_telp'];
//     $email = $_POST['email'];
//     $skhun = $_POST['skhun'];
//     $penerima_kps = $_POST['penerima_kps'];
//     $no_kps = $_POST['no_kps'];
//     $nama_ayah = $_POST['nama_ayah'];
//     $thn_lahir_ayah = $_POST['thn_lahir_ayah'];
//     $pendidikan_ayah = $_POST['pendidikan_ayah'];
//     $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
//     $penghasilan_ayah = $_POST['penghasilan_ayah'];
//     $nik_ayah = $_POST['nik_ayah'];
//     $nama_ibu = $_POST['nama_ibu'];
//     $thn_lahir_ibu = $_POST['thn_lahir_ibu'];
//     $pendidikan_ibu = $_POST['pendidikan_ibu'];
//     $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
//     $penghasilan_ibu = $_POST['penghasilan_ibu'];
//     $nik_ibu = $_POST['nik_ibu'];
//     // $pendidikan_akhir_wali = $_POST['pendidikan_akhir_wali'];
//     // $pekerjaan_wali = $_POST['pekerjaan_wali'];
//     // $telepon_wali = $_POST['telepon_wali'];
//     // $alamat_wali = $_POST['alamat_wali'];
//     // $username = $_POST['username'];
//     $password = md5($_POST['password']);
//     // $ulangi_password = md5($_POST['ulangi_password']);

//     // if($password != $ulangi_password) {
//     //     echo "Error: Passoword tidak sama";
//     //     echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
//     //     die;
//     // }
//     // insert tabel user
//     $sql_user = "INSERT INTO user (nama, username, password, level) values('$nama_siswa','$username','123','siswa')";
//     $result_user = mysqli_query($conn, $sql_user);

//     if($result_user){
//         $data_user = mysqli_query($conn, "SELECT LAST_INSERT_ID()");
//         while($u = mysqli_fetch_array($data_user)){
//             $id_user = $u[0];
//         }
//         //insert table pendaftar
//         $sql_siswa = "INSERT INTO siswa (nipd, nama_siswa, username, jk, nisn,
//         tpt_lahir, tgl_lahir, nik_siswa, agama, alamat, jns_tinggal, transportasi,
//         rombel, no_telp, email, skhun, penerima_kps, no_kps,
//         nama_ayah, thn_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, nik_ayah, 
//         nama_ibu, thn_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, nik_ibu)
//         values('$nipd','$nama_siswa','$username', '$jk', '$nisn',
//         '$tpt_lahir','$tgl_lahir','$nik_siswa','$agama','$alamat','$jns_tinggal','$transportasi',
//         '$rombel','$no_telp','$email','$skhun','$penerima_kps', '$no_kps',
//         '$nama_ayah','$thn_lahir_ayah','$pendidikan_ayah','$pekerjaan_ayah','$penghasilan_ayah','$nik_ayah',
//         '$nama_ibu','$thn_lahir_ibu','$pendidikan_ibu','$pekerjaan_ibu','$penghasilan_ibu','$nik_ibu')";

//         $result_siswa = mysqli_query($conn, $sql_pendaftar);

//         if($result_siswa){
//             //jika berhasil
//             $_SESSION['pesan_registrasi'] = "Registrasi berhasil, Login menggunakan Email dan Password anda!";
//             header('location:galeri.php');
//         } else {
//             //jika query pendaftar gagal
//             echo "Error insert pendaftar: ". mysqli_error($conn);
//             echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
//             die;
//         }
//     } else {
//         //jika query gagal
//         echo "Error insert user: ". mysqli_error($conn);
//         echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
//         die;
//     }
// } else {
//     header('location:galeri.php');
// };

?>