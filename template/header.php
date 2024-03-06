<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website PAUD Cahaya Hati</title>

    <!-- gambar title -->
    <link rel="icon" type="image/png" href="../assets1/img/logopaudd.png">

    <!-- Custom fonts for this template-->
    <link href="../assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets1/css/sb-admin-2.min.css" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <script src="../tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">PAUD Cahaya Hati</div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading">
                <?= $_SESSION['level'] ?>
            </div>

            <!-- jika level siswa -->
            <?php if ($_SESSION['level'] == 'siswa') { ?>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <i class="fas fa-fw fa-regular fa-bars"></i>
                        <span>Profile</span></a>
                </li>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="nilai.php">
                        <i class="fas fa-user-edit"></i>
                        <span>Nilai</span></a>
                </li>

            <?php } ?>

            <!-- jika level guru -->
            <?php if ($_SESSION['level'] == 'guru') { ?>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Profile</span></a>
                </li>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="data-nilai.php">
                        <i class="fas fa-fw fa-regular fa-bars"></i>
                        <span>Data Nilai</span></a>
                </li>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="data-absensi.php">
                        <i class="fas fa-user-edit"></i>
                        <span>Data Absensi</span></a>
                </li>

            <?php } ?>


            <!-- jika level admin -->
            <?php if ($_SESSION['level'] == 'admin') { ?>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="data-siswa.php">
                        <i class="fas fa-fw fa-regular fa-bars"></i>
                        <span>Data Siswa</span>
                    </a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="data-guru.php">
                        <i class="fas fa-fw fa-regular fa-bars"></i>
                        <span>Data Guru</span>
                    </a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="data-user.php">
                        <i class="fas fa-fw fa-regular fa-bars"></i>
                        <span>Data User</span>
                    </a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="kelas.php">
                        <i class="fas fa-fw fa-window-restore"></i>
                        <span>Rombel</span>
                    </a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="kegiatan.php">
                        <i class="fas fa-fw fa-map"></i>
                        <span>Kegiatan</span>
                    </a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="galeri.php">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Galeri</span>
                </a>
            </li> -->

                <!-- Nav Item - Utilities Collapse Menu 'Pendaftaran' -->
                <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Pendaftaran</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="pendaftaran.php">Dashboard Pendaftaran</a>
                        <a class="collapse-item" href="data-pendaftar.php">Data Pendaftar</a>
                        <a class="collapse-item" href="laporan-pendaftaran.php">Laporan Pendaftaran</a>
                    </div>
                </div>
            </li> -->

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Pengaturan</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item" href="identitas-sekolah.php">Identitas Sekolah</a>
                            <a class="collapse-item" href="tentang-sekolah.php">Tentang Sekolah</a>
                            <a class="collapse-item" href="kepala-sekolah.php">Kepala Sekolah</a>
                        </div>
                    </div>
                </li>

            <?php } ?>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>






            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama']; ?></span>

                                <?php
                                if (isset($data_siswa['foto']) && $data_siswa['foto'] != '') {
                                    $foto = '../uploads/siswa/' . $data_siswa['foto'];
                                } else {
                                    $foto = '../assets1/img/avatar.jpg';
                                }
                                ?>

                                <img class="img-profile rounded-circle" src="<?= $foto ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="<?= $base_url ?>/siswa/editprofil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profil
                                </a> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->