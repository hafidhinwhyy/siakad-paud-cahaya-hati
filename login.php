<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi pendaftaran siswa secara online dari PaudQu Nurul Hidayah">
    <meta name="author" content="">

    <title>Login Aplikasi Pendaftaran Santri</title>

    <!-- gambar title -->
    <link rel="icon" type="image/png" href="assets1/img/logopaudd.png">

    <!-- Custom fonts for this template-->
    <link href="assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets1/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .img-logopaud {
            max-height: 160px;
            margin-bottom: 20px;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="assets1/img/logopaudd.png" alt="Logo Aplikasi" class="img-logopaud">
                                        <h1 class="h4 text-gray-900"></h1>
                                        <h1 class="h4 text-gray-900 mb-4"><b>PAUD Cahaya Hati</b></h1>

                                        <?php

                                        session_start();

                                        if (isset($_SESSION['pesan_registrasi'])) { ?>

                                            <div class="alert alert-success">
                                                <?= $_SESSION['pesan_registrasi'] ?>
                                            </div>

                                        <?php }

                                        if (isset($_SESSION['login_error'])) { ?>

                                            <div class="alert alert-danger">
                                                <?= $_SESSION['login_error'] ?>
                                            </div>

                                        <?php }

                                        session_destroy();

                                        ?>

                                    </div>
                                    <form class="user" action="login-control.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Masukkan Username Anda...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                                        </div>
                                        <button type="submit" name="btn_login" value="login" href="" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <!-- <a class="small" href="registrasi.php">Registrasi Siswa Baru</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets1/vendor/jquery/jquery.min.js"></script>
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets1/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets1/js/sb-admin-2.min.js"></script>

</body>

</html>