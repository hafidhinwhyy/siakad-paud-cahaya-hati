<?php include ('../config/autoload.php'); ?>
<?php include ('detail-pendaftar-control.php'); ?>
<?php include('../template/header.php'); ?> 

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Pendaftar</h1>
    
    <div class="row">
    <div class="col-md-12">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                    <?php 
                        if(isset($data_pendaftar['foto']) && $data_pendaftar['foto'] != '') {
                            $foto = '../uploads/siswa/'.$data_pendaftar['foto'];
                        } else {
                            $foto = '../assets1/img/avatar.jpg';
                        }
                    ?>
                        <img src="<?= $foto ?>" alt="fotoprofil" 
                        class="img-fluid rounded-circle" style="width : 200px">
                    </div>
                    <h5 class="text-center card-title mt-3"><?= $data_pendaftar['nama']?></h5>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Nama Panggilan</h6>
                            <small><?= $data_pendaftar['nama_panggil'] ?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Tempat, Tanggal Lahir</h6>
                            <small><?= $data_pendaftar['tempat_lahir']?>,
                                <?= date("d-m-Y", strtotime($data_pendaftar['tanggal_lahir'])); ?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Jenis Kelamin</h6>
                            <?php 
                                if($data_pendaftar['jenis_kelamin'] == 'L') {
                                    $kelamin = 'Laki-laki';
                                } else {
                                    $kelamin = 'Perempuan';
                                }
                                ?>
                            <small><?= $kelamin ?></small>
                        </li>

                        <li class="list-group-item">
                                <h6 class="mb-0" style="color : black;">Kelas</h6>
                                <?php 
                                if($data_pendaftar['kelas'] == 'Play Grup') {
                                    $kelas = 'Play Grup';
                                } else if($data_pendaftar['kelas'] == 'Kelas A') {
                                    $kelas = 'Kelas A';
                                } else {
                                    $kelas = 'Kelas B';
                                }
                                ?>
                                <small><?= $kelas ?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Anak Ke-</h6>
                            <small><?= $data_pendaftar['anak_ke']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Berat Badan</h6>
                            <small><?= $data_pendaftar['berat_badan']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Tinggi Badan</h6>
                            <small><?= $data_pendaftar['tinggi_badan']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Alamat Rumah</h6>
                            <small><?= $data_pendaftar['alamat']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Berat Badan Lahir</h6>
                            <small><?= $data_pendaftar['berat_badan_lahir']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Penyakit yang Sering Diderita</h6>
                            <small><?= $data_pendaftar['penyakit_sering_diderita']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Penyakit yang Pernah Diderita</h6>
                            <small><?= $data_pendaftar['penyakit_pernah_diderita']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Pantangan Makan</h6>
                            <small><?= $data_pendaftar['pantangan_makan']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Nama Ayah Kandung</h6>
                            <small><?= $data_pendaftar['nama_ayah_kdg']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Tempat, Tanggal Lahir Ayah</h6>
                            <small><?= $data_pendaftar['tempat_lahir_ayah']?>,
                            <?= date("d-m-Y", strtotime($data_pendaftar['tanggal_lahir_ayah'])); ?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Pendidikan Terakhir Ayah</h6>
                            <small><?= $data_pendaftar['pendidikan_akhir_ayah']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Pekerjaan Ayah</h6>
                            <small><?= $data_pendaftar['pekerjaan_ayah']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Telepon Ayah</h6>
                            <small><?= $data_pendaftar['telepon_ayah']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Nama Ibu Kandung</h6>
                            <small><?= $data_pendaftar['nama_ibu_kdg']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Tempat, Tanggal Lahir Ibu</h6>
                            <small><?= $data_pendaftar['tempat_lahir_ibu']?>,
                            <?= date("d-m-Y", strtotime($data_pendaftar['tanggal_lahir_ibu'])); ?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Pendidikan Terakhir Ibu</h6>
                            <small><?= $data_pendaftar['pendidikan_akhir_ibu']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Pekerjaan Ibu</h6>
                            <small><?= $data_pendaftar['pekerjaan_ibu']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Telepon Ibu</h6>
                            <small><?= $data_pendaftar['telepon_ibu']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Alamat Orang Tua</h6>
                            <small><?= $data_pendaftar['alamat_ortu']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Nama Wali</h6>
                            <small><?= $data_pendaftar['nama_wali']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Pendidikan Terakhir Wali</h6>
                            <small><?= $data_pendaftar['pendidikan_akhir_wali']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Pekerjaan Wali</h6>
                            <small><?= $data_pendaftar['pekerjaan_wali']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Telepon Wali</h6>
                            <small><?= $data_pendaftar['telepon_wali']?></small>
                        </li>

                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Alamat Wali</h6>
                            <small><?= $data_pendaftar['alamat_wali']?></small>
                        </li>


                        <li class="list-group-item">
                            <h6 class="mb-0" style="color : black;">Username</h6>
                            <small><?= $data_pendaftar['username']?></small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
                <!-- /.container-fluid -->

<?php include('../template/footer.php'); ?> 