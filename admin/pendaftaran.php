<?php include ('../config/autoload.php'); ?>
<?php include ('pendaftaran-control.php'); ?>
<?php include('../template/header.php'); ?> 

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pendaftaran</h1>
    <div class="row">
    <div class="col-md-6">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-info text-uppercase mb-1">Pendaftar Masuk
                            </div>
                                <div class="h6 mt-3 font-weight-bold">
                                    <?= mysqli_num_rows($jml_pendaftar) ?> Orang
                                </div>
                                <div class="row no-gutters align-items-center">
                                    
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" 
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300" style="font-size: 90px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    
                    <!-- data berhasil diproses 
                    <div class="col-md-6">
                    <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h4 font-weight-bold text-success text-uppercase mb-1">Data berhasil diproses
                                            </div>

                                            <div class="h6 mt-3 font-weight-bold">
                                                <?= mysqli_num_rows($jml_proses) ?> Orang
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300" style="font-size: 90px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    
                
                    <hr class="mt-3">
                        <h2 class="text-gray-800">Data Pendaftar</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-hover">
                                        <tr class="text-center">
                                            <td>No</td>
                                            <td>Nama</td>
                                            <td>Alamat</td>
                                            <td>Kelas</td>
                                            <td>Username</td>
                                            <td>Status</td>
                                        </tr>

                                        <?php 
                                            $no = 1;
                                            while($p = mysqli_fetch_array($all_pendaftar)) {  ?>
                                                
                                                <tr class="text-center">
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $p['nama'] ?></td>
                                                    <td><?= $p['alamat'] ?></td>
                                                    <td><?= $p['kelas'] ?></td>
                                                    <td><?= $p['username'] ?></td>
                                                    <td><span class="badge badge-info">BARU</span></td>
                                                </tr>

                                        <?php  } 
                                            if(mysqli_num_rows($all_pendaftar) == 0) {
                                                echo "<tr><td colspan='6' align='center'><b>Belum Ada Pendaftar Baru</b></td></tr>";
                                            }
                                        ?>

                                    </table>
                                </div>
                            </div>
                <!-- /.container-fluid -->

<?php include('../template/footer.php'); ?> 