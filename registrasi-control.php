<?php 

include('config/koneksi.php');
session_start();

if(isset($_POST['btn_registrasi'])) {
    
    // print_r($_POST);

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
    $password = md5($_POST['password']);
    $ulangi_password = md5($_POST['ulangi_password']);

    if($password != $ulangi_password) {
        echo "Error: Passoword tidak sama";
        echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
        die;
    }
    // insert tabel user
    $sql_user = "INSERT INTO user (nama, username, password, level) values('$nama','$username','$password','siswa')";
    $result_user = mysqli_query($conn, $sql_user);

    if($result_user){
        $data_user = mysqli_query($conn, "SELECT LAST_INSERT_ID()");
        while($u = mysqli_fetch_array($data_user)){
            $id_user = $u[0];
        }
        //insert table pendaftar
        $sql_pendaftar = "INSERT INTO pendaftar (nama, nama_panggil, tempat_lahir, tanggal_lahir, jenis_kelamin,
        kelas, anak_ke, berat_badan, tinggi_badan, alamat, berat_badan_lahir, penyakit_sering_diderita,
        penyakit_pernah_diderita, pantangan_makan, nama_ayah_kdg, tempat_lahir_ayah, tanggal_lahir_ayah,
        pendidikan_akhir_ayah, pekerjaan_ayah, telepon_ayah, nama_ibu_kdg, tempat_lahir_ibu, tanggal_lahir_ibu, 
        pendidikan_akhir_ibu, pekerjaan_ibu, telepon_ibu, alamat_ortu, nama_wali, pendidikan_akhir_wali,
        pekerjaan_wali, telepon_wali, alamat_wali, username) values('$nama','$nama_panggil','$tempat_lahir',
        '$tanggal_lahir','$jenis_kelamin','$kelas','$anak_ke','$berat_badan','$tinggi_badan','$alamat','$berat_badan_lahir',
        '$penyakit_sering_diderita','$penyakit_pernah_diderita','$pantangan_makan','$nama_ayah_kdg','$tempat_lahir_ayah',
        '$tanggal_lahir_ayah','$pendidikan_akhir_ayah','$pekerjaan_ayah','$telepon_ayah','$nama_ibu_kdg','$tempat_lahir_ibu',
        '$tanggal_lahir_ibu','$pendidikan_akhir_ibu','$pekerjaan_ibu','$telepon_ibu','$alamat_ortu','$nama_wali','$pendidikan_akhir_wali',
        '$pekerjaan_wali','$telepon_wali','$alamat_wali','$username')";

        $result_pendaftar = mysqli_query($conn, $sql_pendaftar);

        if($result_pendaftar){
            //jika berhasil
            $_SESSION['pesan_registrasi'] = "Registrasi berhasil, Login menggunakan Email dan Password anda!";
            header('location:login.php');
        } else {
            //jika query pendaftar gagal
            echo "Error insert pendaftar: ". mysqli_error($conn);
            echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
            die;
        }
    } else {
        //jika query gagal
        echo "Error insert user: ". mysqli_error($conn);
        echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
        die;
    }
} else {
    header('location:registrasi.php');
};

?>