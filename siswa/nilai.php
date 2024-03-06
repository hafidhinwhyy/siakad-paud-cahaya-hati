<?php include ('../config/autoload.php'); ?>
<?php include ('nilai-control.php');?>
<?php include('../template/header.php'); ?> 
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Penilaian</h1>
        <div class="col-md-12">
            <!-- <?php if(isset($_SESSION['pesan_sukses'])) { ?>
                <div class="alert alert-success">
                    <?= $_SESSION['pesan_sukses']; ?>
                </div>
            <?php } 
                // unset($_SESSION['pesan_sukses']);
            ?> -->
        </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#mymodal">Tambah Data</button>
                </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center align-middle">
                                        <th>No</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Semester</th>
                                        <!-- <th>Rombel</th>
                                        <th>Semester</th>
                                        <th>Perkembangan Nilai Agama dan Moral</th>
                                        <th>Perkembangan Motorik</th>
                                        <th>Perkembangan Kognitif</th>
                                        <th>Perkembangan Sosial - Emosional</th>
                                        <th>Perkembangan Bahasa</th>
                                        <th>Perkembangan Seni</th>
                                        <th>Tahun Ajaran</th> -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <?php 
                                    include '../config/koneksi.php';
                                    $no = 1;
                                        
                                    $nilai = mysqli_query($conn, "SELECT * FROM nilai where nama_siswa='$nama_user'");
                                    
                                    if(mysqli_num_rows($nilai) > 0){
                                        while($k = mysqli_fetch_array($nilai)){
                                            
                                            $semester = $k['semester'];
                                            $thn_ajaran = $k['thn_ajaran'];
                                            $idnilai = $k['id'];
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td><?= $thn_ajaran?></td>
                                            <td><?= $semester?></td>
                                            <td>
                                                <a href="penilaian.php?id=<?= $k['id']?>" class="btn btn-info">Detail</a>
                                                <!-- <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#edit<?=$idnilai?>">Detail</button> -->

                                                <!-- <button type="button" class="btn btn-danger" data-toggle="modal" 
                                                    data-target="#delete<?=$idnilai?>">Hapus</button> -->
                                            </td>
                                        </tr>
                            
                        <!-- The Modal edit
                        <div class="modal fade" id="edit<?=$idnilai?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    Modal Header
                                    <div class="modal-header">
                                        <h4 class="modal-title">Ubah Data Penilaian <?=$nama_siswa?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            Modal body
                                            <div class="modal-body">
                                                <label class="control-label" for="nama_siswa">Nama Siswa</label>
                                                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="" value="<?=$nama_siswa?>">

                                                <label class="control-label mt-3" for="nipd">NIPD</label>
                                                <input type="text" name="nipd" id="nipd" class="form-control" placeholder="" value="<?=$nipd?>">

                                                <label class="control-label mt-3" for="rombel">Rombel</label>
                                                <input type="text" name="rombel" id="rombel" class="form-control" placeholder="" value="<?=$rombel?>">

                                                <label class="control-label mt-3" for="semester">Semester</label>
                                                <input type="text" name="semester" id="semester" class="form-control" placeholder="" value="<?=$semester?>" >

                                                <label class="control-label mt-3" for="agama_dan_moral">Perkembangan Nilai Agama dan Moral</label>
                                                <textarea name="agama_dan_moral" id="agama_dan_moral" class="form-control"><?=$agama_dan_moral?></textarea>

                                                <label class="control-label mt-3" for="motorik">Perkembangan Motorik</label>
                                                <textarea name="motorik" id="motorik" class="form-control"><?=$motorik?></textarea>

                                                <label class="control-label mt-3" for="kognitif">Perkembangan Kognitif</label>
                                                <textarea name="kognitif" id="kognitif" class="form-control"><?=$kognitif?></textarea>

                                                <label class="control-label mt-3" for="sosial_emosional">Perkembangan Sosial - Emosional</label>
                                                <textarea name="sosial_emosional" id="sosial_emosional" class="form-control"><?=$sosial_emosional?></textarea>

                                                <label class="control-label mt-3" for="bahasa">Perkembangan Bahasa</label>
                                                <textarea name="bahasa" id="bahasa" class="form-control"><?=$bahasa?></textarea>

                                                <label class="control-label mt-3" for="seni">Perkembangan Seni</label>
                                                <textarea name="seni" id="seni" class="form-control"><?=$seni?></textarea>

                                                <label class="control-label mt-3" for="thn_ajaran">Tahun Ajaran</label>
                                                <input type="text" name="thn_ajaran" id="nithn_ajaranpd" class="form-control" placeholder="" value="<?=$thn_ajaran?>">

                                                <input type="hidden" name="idnilai" value="<?=$idnilai;?>">
                                            </div>

                                            Modal footer
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" name="editnilai">Simpan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                        </form> 
                                </div>
                            </div>
                        </div> -->


                            <!-- Modal Delete -->
                            <div class="modal fade" id="delete<?=$idnilai?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Data Penilaian <?=$nama_siswa?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        
                                        <form method="post">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus Data Penilaian <?=$nama_siswa?> ?
                                                    <input type="hidden" name="idnilai" value="<?=$idnilai;?>">
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" name="hapusnilai">Hapus</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                            </div>

                                        </form> 
                                    </div>
                                </div>
                            </div>



                            <?php }}else{ ?> 
                            <tr class="text-center">
                                <td colspan="4">Data tidak ada</td>
                            </tr>

                            

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    


    


            
            


            
    
    
</div>
<!-- /.container-fluid -->

                        


<?php include('../template/footer.php'); ?> 

<!-- Tambah Data
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            Modal Header
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Penilaian</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

                <form action="data-nilai-control.php" method="POST" enctype="multipart/form-data">
                    Modal body
                    <div class="modal-body">
                        <label class="control-label" for="nama_siswa">Nama Siswa</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="nipd">NIPD</label>
                        <input type="text" name="nipd" id="nipd" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="rombel">Rombel</label>
                        <input type="text" name="rombel" id="rombel" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="semester">Semester</label>
                        <input type="text" name="semester" id="semester" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="agama_dan_moral">Perkembangan Nilai Agama dan Moral</label>
                        <textarea name="agama_dan_moral" id="agama_dan_moral" class="form-control"></textarea>

                        <label class="control-label mt-3" for="motorik">Perkembangan Motorik</label>
                        <textarea name="motorik" id="motorik" class="form-control"></textarea>

                        <label class="control-label mt-3" for="kognitif">Perkembangan Kognitif</label>
                        <textarea name="kognitif" id="kognitif" class="form-control"></textarea>

                        <label class="control-label mt-3" for="sosial_emosional">Perkembangan Sosial - Emosional</label>
                        <textarea name="sosial_emosional" id="sosial_emosional" class="form-control"></textarea>

                        <label class="control-label mt-3" for="bahasa">Perkembangan Bahasa</label>
                        <textarea name="bahasa" id="bahasa" class="form-control"></textarea>

                        <label class="control-label mt-3" for="seni">Perkembangan Seni</label>
                        <textarea name="seni" id="seni" class="form-control"></textarea>

                        <label class="control-label mt-3" for="thn_ajaran">Tahun Ajaran</label>
                        <input type="text" name="thn_ajaran" id="thn_ajaran" class="form-control" placeholder="">
                    </div>
    
                        Modal footer
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="tambahnilai" >Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                </form>
        </div>
    </div>
</div> -->