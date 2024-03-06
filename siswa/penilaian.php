<?php include ('../config/autoload.php'); ?>

<?php include ('profile-control.php'); ?>

<?php include ('penilaian-control.php'); ?>

<?php include('../template/header.php'); ?>  

<div class="container-fluid">
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
            </div><br>
            <!-- <h5 class="text-center card-title mt-3"><?= $data_siswa['nama_siswa'] ?></h5><br> -->

                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col md-2">
                            <label class="form-label text-right">NAMA :</label>
                        </div>
                        <div class="col md-2">
                            <span class="form-control"><?= $data_siswa['nama_siswa'] ?></span>
                        </div>

                        <div class="col md-2">
                            <label class="form-label text-right">ROMBEL :</label>
                        </div>
                        <div class="col md-2">
                            <span class="form-control"><?= $data_nilai['rombel'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col md-2">
                            <label class="form-label text-right">NIPD :</label>
                        </div>
                        <div class="col md-2">
                            <span class="form-control"><?= $data_siswa['nipd'] ?></span>
                        </div>
                        
                        <div class="col md-2">
                            <label class="form-label text-right">TAHUN AJARAN :</label>
                        </div>
                        <div class="col md-2">
                            <span class="form-control"><?= $data_nilai['thn_ajaran'] ?></span>
                        </div>
                    </div><br><br>

                    <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>NO</th>
                                        <th>ASPEK PERKEMBANGAN</th>
                                        <th>PENILAIAN</th>
                                        <th>SEMESTER</th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                    $no = 1;?>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td>Perkembangan Nilai Agama dan Moral</td>
                                            <td><?= $data_nilai['agama_dan_moral'] ?></td>
                                            <td><?= $data_nilai['semester'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td>Perkembangan Motorik</td>
                                            <td><?= $data_nilai['motorik'] ?></td>
                                            <td><?= $data_nilai['semester'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td>Perkembangan Kognitif</td>
                                            <td><?= $data_nilai['kognitif'] ?></td>
                                            <td><?= $data_nilai['semester'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td>Perkembangan Sosial - Emosional</td>
                                            <td><?= $data_nilai['sosial_emosional'] ?></td>
                                            <td><?= $data_nilai['semester'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td>Perkembangan Bahasa</td>
                                            <td><?= $data_nilai['bahasa'] ?></td>
                                            <td><?= $data_nilai['semester'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td>Perkembangan Seni</td>
                                            <td><?= $data_nilai['seni'] ?></td>
                                            <td><?= $data_nilai['semester'] ?></td>
                                        </tr>
                                </tbody>
                </table>
            </div>
                </div>
                    
                </div>

                

            
        </div>
    </div>

<?php include('../template/footer.php'); ?>