<?php include ('../config/autoload.php'); ?>

<?php include ('profile-control.php'); ?>

<?php include('../template/header.php'); ?>  
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Profile</h1><hr>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                            <div class="col-md-6">
                                <!-- pengumuman hasil proses data berhasil -->
                                <div class="col-md-12">
                                    <!-- Illustrations -->
                                    <div class="card shadow mb-4">
                                        
                                        <div class="card-body">
                                            <div class="text-center">
                                                <?php 
                                                if(isset($data_siswa['foto']) && $data_siswa['foto'] != '') {
                                                    $foto = '../uploads/siswa/'.$data_siswa['foto'];
                                                } else {
                                                    $foto = '../assets1/img/avatar.jpg';
                                                }
                                                ?>
                                                <img src="<?= $foto ?>" alt="fotoprofil" 
                                                class="img-fluid rounded-circle" style="width : 200px; height: 200px;">
                                            </div>
                                            <h5 class="text-center card-title mt-3"><?= $data_siswa['nama_siswa'] ?></h5>
                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- pengumuman hasil proses daftar ulang --> 
                                <div class="col-md-12">
                                    <div class="card shadow mb-4">
                                        
                                        </div>
                                    </div>
                                </div>

                        <div class="col-md-6">
                            <div class="row">
                            <div class="col-md-12">
                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                                    </div>
                                    <div class="card-body">
                                        
                                        <br>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">NIPD</h6>
                                                <small><?= $data_siswa['nipd'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Nama Lengkap</h6>
                                                <small><?= $data_siswa['nama_siswa'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Username</h6>
                                                <small><?= $data_siswa['username'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">NISN</h6>
                                                <small><?= $data_siswa['nisn'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Tempat Lahir</h6>
                                                <small><?= $data_siswa['tpt_lahir'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Tanggal Lahir</h6>
                                                <?= date("d-m-Y", strtotime($data_siswa['tgl_lahir'])); ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Jenis Kelamin</h6>
                                                <?php 
                                                    if($data_siswa['jk'] == 'L') {
                                                        $kelamin = 'Laki-laki';
                                                    } else {
                                                        $kelamin = 'Perempuan';
                                                    }
                                                    ?>
                                                <small><?= $kelamin ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Rombongan Belajar</h6>
                                                <small><?= $data_siswa['rombel'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">NIK</h6>
                                                <small><?= $data_siswa['nik_siswa'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Agama</h6>
                                                <small><?= $data_siswa['agama'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Alamat Lengkap</h6>
                                                <small><?= $data_siswa['alamat'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Jenis Tinggal</h6>
                                                <small><?= $data_siswa['jns_tinggal'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Transportasi</h6>
                                                <small><?= $data_siswa['transportasi'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Nomor Telepon</h6>
                                                <small><?= $data_siswa['no_telp'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Email</h6>
                                                <small><?= $data_siswa['email'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">SKHUN</h6>
                                                <small><?= $data_siswa['skhun'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Penerima KPS</h6>
                                                <small><?= $data_siswa['penerima_kps'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">No KPS</h6>
                                                <small><?= $data_siswa['no_kps'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Nama Ayah</h6>
                                                <small><?= $data_siswa['nama_ayah'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Tahun Lahir</h6>
                                                <small><?= $data_siswa['thn_lahir_ayah'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Pendidikan</h6>
                                                <small><?= $data_siswa['pendidikan_ayah'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Pekerjaan</h6>
                                                <small><?= $data_siswa['pekerjaan_ayah'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Penghasilan</h6>
                                                <small><?= $data_siswa['penghasilan_ayah'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">NIK</h6>
                                                <small><?= $data_siswa['nik_ayah'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Nama Ibu</h6>
                                                <small><?= $data_siswa['nama_ibu'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Tahun Lahir</h6>
                                                <small><?= $data_siswa['thn_lahir_ibu'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Pendidikan</h6>
                                                <small><?= $data_siswa['pendidikan_ibu'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Pekerjaan</h6>
                                                <small><?= $data_siswa['pekerjaan_ibu'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">Penghasilan</h6>
                                                <small><?= $data_siswa['penghasilan_ibu'] ?></small>
                                            </li>

                                            <li class="list-group-item">
                                                <h6 class="mb-0" style="color : black;">NIK</h6>
                                                <small><?= $data_siswa['nik_ibu'] ?></small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php include('../template/footer.php'); ?>