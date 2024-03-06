<?php 

include('config/koneksi.php');
session_start();

if(isset($_POST['btn_login'])){
    //jika sudah ditekan
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql_user = "SELECT * FROM user where username = '$username' and password = '$password'";
    $result_user = mysqli_query($conn, $sql_user);

    if(mysqli_num_rows($result_user) > 0) {
        //jika data tersedia, simpan data user ke dalam session
        while($data_user = mysqli_fetch_array($result_user)) {
            $_SESSION['status'] = 'login';
            $_SESSION['id_user'] = $data_user['username'];
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['level'] = $data_user['level'];

            if($data_user['level'] == 'admin') {
                header('location:admin/index.php');

            }else if($data_user['level'] == 'siswa'){
                header('location:siswa/dashboard.php');

            }else if($data_user['level'] == 'guru'){
                header('location:guru/dashboard.php');
            }

            
        }
    } else {
        $_SESSION['login_error'] = "Email atau Password anda Salah!";
        header('location:login.php');

    }
    

} else {
    header('location:login.php');

}

?>