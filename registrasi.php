<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi pendaftaran siswa secara online dari PaudQu Nurul Hidayah">
    <meta name="author" content="">

    <title>Registrasi - Aplikasi Pendaftaran Siswa</title>

    <!-- gambar title --> 
    <link rel="icon" type="image/png" href="assets1/img/logopaud.png">

    <!-- Custom fonts for this template-->
    <link href="assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets1/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .img-logopaud {
        max-height : 160px;
        margin-bottom : 20px;
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
                                        <h1 class="h4 text-gray-900 mb-4">Registrasi Santri Baru</h1>
                                        
                                    </div>
                                    <form class="user" action="registrasi-control.php" method="POST">
                                        <label for="identitas_anak"><b>Identitas Anak :</b></label>
                                            <div class="form-group">
                                                <label for="nama">Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control"
                                                    id="nama" placeholder="Nama Anda">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_panggil">Nama Panggilan</label>
                                                <input type="text" name="nama_panggil" class="form-control"
                                                    id="nama_panggil" placeholder="Nama Panggilan Anda">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control"
                                                        id="tempat_lahir" placeholder="Tempat Lahir">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" class="form-control"
                                                        id="tanggal_lahir" placeholder="Tanggal Lahir">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    <div class="form-check">
                                                        <input type="radio" name="jenis_kelamin" value="L" class="form-check-input"
                                                            id="laki">
                                                        <label for="laki" class="form-check-label">Laki-Laki</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="jenis_kelamin" value="P" class="form-check-input"
                                                            id="perempuan">
                                                        <label for="perempuan" class="form-check-label">Perempuan</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="kelas">Kelas</label>
                                                    <div class="form-check">
                                                        <input type="radio" name="kelas" value="Play Grup" class="form-check-input"
                                                            id="play_grup">
                                                        <label for="play_grup" class="form-check-label">Play Grup</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="kelas" value="Kelas A" class="form-check-input"
                                                            id="kelas_a">
                                                        <label for="kelas_a" class="form-check-label">Kelas A</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="kelas" value="Kelas B" class="form-check-input"
                                                            id="kelas_b">
                                                        <label for="kelas_b" class="form-check-label">Kelas B</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="anak_ke">Anak Ke-</label>
                                                <input type="text" name="anak_ke" class="form-control"
                                                    id="anak_ke" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="berat_badan">Berat Badan</label>
                                                <input type="text" name="berat_badan" class="form-control"
                                                    id="berat_badan" placeholder="kg">
                                            </div>

                                            <div class="form-group">
                                                <label for="tinggi_badan">Tinggi Badan</label>
                                                <input type="text" name="tinggi_badan" class="form-control"
                                                    id="tinggi_badan" placeholder="cm">
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat">Alamat Rumah</label>
                                                <textarea name="alamat" id="alamat" class="form-control"></textarea>
                                            </div>

                                            <label for="kondisi_anak" class="mt-3"><b>Kondisi Anak :</b></label>

                                            <div class="form-group">
                                                <label for="berat_badan_lahir">Berat Badan Lahir</label>
                                                <input type="text" name="berat_badan_lahir" class="form-control"
                                                    id="berat_badan_lahir" placeholder="kg">
                                            </div>

                                            <div class="form-group">
                                                <label for="penyakit_sering_diderita">Penyakit yang Sering Diderita</label>
                                                <input type="text" name="penyakit_sering_diderita" class="form-control"
                                                    id="penyakit_sering_diderita" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="penyakit_pernah_diderita">Penyakit yang Pernah Diderita</label>
                                                <input type="text" name="penyakit_pernah_diderita" class="form-control"
                                                    id="penyakit_pernah_diderita" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="pantangan_makan">Pantangan Makan</label>
                                                <input type="text" name="pantangan_makan" class="form-control"
                                                    id="pantangan_makan" placeholder="">
                                            </div>

                                            <label for="identitas_ortu" class="mt-3"><b>Identitas Orang Tua</b></label>
                                            <br>
                                            <label for="identitas_ayah" class="mt-1"><b>Ayah :</b></label>

                                            <div class="form-group">
                                                <label for="nama_ayah_kdg">Nama Ayah Kandung</label>
                                                <input type="text" name="nama_ayah_kdg" class="form-control"
                                                    id="nnama_ayah_kdg" placeholder="Nama Ayah">
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                                                    <input type="text" name="tempat_lahir_ayah" class="form-control"
                                                        id="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                                                    <input type="date" name="tanggal_lahir_ayah" class="form-control"
                                                        id="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="pendidikan_akhir_ayah">Pendidikan Terakhir Ayah</label>
                                                <input type="text" name="pendidikan_akhir_ayah" class="form-control"
                                                    id="pendidikan_akhir_ayah" placeholder="Pendidikan Akhir Ayah">
                                            </div>

                                            <div class="form-group">
                                                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                                <input type="text" name="pekerjaan_ayah" class="form-control"
                                                    id="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
                                            </div>

                                            <div class="form-group">
                                                <label for="telepon_ayah">Telepon Ayah</label>
                                                <input type="text" name="telepon_ayah" class="form-control"
                                                    id="telepon_ayah" placeholder="Telepon Ayah">
                                            </div>

                                            <label for="identitas_ibu" class="mt-1"><b>Ibu :</b></label>

                                            <div class="form-group">
                                                <label for="nama_ibu_kdg">Nama Ibu Kandung</label>
                                                <input type="text" name="nama_ibu_kdg" class="form-control"
                                                    id="nama_ibu_kdg" placeholder="Nama Ibu">
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                                                    <input type="text" name="tempat_lahir_ibu" class="form-control"
                                                        id="tempat_lahir_ibu" placeholder="Tempat Lahir Ibu">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                                                    <input type="date" name="tanggal_lahir_ibu" class="form-control"
                                                        id="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="pendidikan_akhir_ibu">Pendidikan Terakhir Ibu</label>
                                                <input type="text" name="pendidikan_akhir_ibu" class="form-control"
                                                    id="pendidikan_akhir_ibu" placeholder="Pendidikan Akhir Ibu">
                                            </div>

                                            <div class="form-group">
                                                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                                <input type="text" name="pekerjaan_ibu" class="form-control"
                                                    id="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
                                            </div>

                                            <div class="form-group">
                                                <label for="telepon_ibu">Telepon Ibu</label>
                                                <input type="text" name="telepon_ibu" class="form-control"
                                                    id="telepon_ibu" placeholder="Telepon Ibu">
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat_ortu">Alamat Orang Tua</label>
                                                <textarea name="alamat_ortu" id="alamat_ortu" class="form-control"></textarea>
                                            </div>

                                            <label for="identitas_wali" class="mt-1"><b>Identitas Wali :</b></label>

                                            <div class="form-group">
                                                <label for="nama_wali">Nama Wali</label>
                                                <input type="text" name="nama_wali" class="form-control"
                                                    id="nama_wali" placeholder="Nama Wali">
                                            </div>

                                            <div class="form-group">
                                                <label for="pendidikan_akhir_wali">Pendidikan Terakhir Wali</label>
                                                <input type="text" name="pendidikan_akhir_wali" class="form-control"
                                                    id="pendidikan_akhir_wali" placeholder="Pendidikan Akhir Wali">
                                            </div>

                                            <div class="form-group">
                                                <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                                <input type="text" name="pekerjaan_wali" class="form-control"
                                                    id="pekerjaan_wali" placeholder="Pekerjaan Wali">
                                            </div>

                                            <div class="form-group">
                                                <label for="telepon_wali">Telepon Wali</label>
                                                <input type="text" name="telepon_wali" class="form-control"
                                                    id="telepon_wali" placeholder="Telepon Wali">
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat_wali">Alamat Wali</label>
                                                <textarea name="alamat_wali" id="alamat_wali" class="form-control"></textarea>
                                            </div>

                                            <label for="akun" class="mt-3"><b>Registrasi Akun</b></label>

                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="username" name="username" class="form-control"
                                                id="username" placeholder="Username">
                                                
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" placeholder="Password">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="ulangi_password">Ulangi Password</label>
                                                    <input type="password" name="ulangi_password" class="form-control"
                                                        id="ulangi_password" placeholder="Ulangi Password">
                                                </div>
                                            </div>
                                            <button name="btn_registrasi" value="simpan" class="btn btn-primary btn-user btn-block">
                                                Registrasi
                                            </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Sudah Punya Akun ? Login</a>
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