<?php include ('../config/autoload.php'); ?>
<?php include ('data-absensi-control.php');?>
<?php include('../template/header.php'); ?> 
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Rekap Absensi Siswa</h1>
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
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Absen</th>
                                        <th>Izin</th>
                                        <th>Sakit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <?php 
                                    include '../config/koneksi.php';
                                    $no = 1;
                                        $where = " WHERE 1=1 ";
                                            if(isset($_GET['key'])){
                                        $where .= " AND nama LIKE '%".addslashes($_GET['key'])."%' ";
                                        }

                                    $absensi = mysqli_query($conn, "SELECT * FROM absensi $where order by nama_siswa asc");
                                    
                                    if(mysqli_num_rows($absensi) > 0){
                                        while($k = mysqli_fetch_array($absensi)){
                                        
                                        $nama_siswa = $k['nama_siswa'];
                                        $absen = $k['absen'];
                                        $izin = $k['izin'];
                                        $sakit = $k['sakit'];

                                        $idabsensi = $k['id'];
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td><?= $nama_siswa?></td>
                                            <td><?= $absen?></td>
                                            <td><?= $izin?></td>
                                            <td><?= $sakit?></td>
                                            
                                            <td>
                                                
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#edit<?=$idabsensi?>">Edit</button>

                                                <button type="button" class="btn btn-danger" data-toggle="modal" 
                                                    data-target="#delete<?=$idabsensi?>">Hapus</button>
                                            </td>
                                        </tr>
                            
                        <!-- The Modal edit -->
                        <div class="modal fade" id="edit<?=$idabsensi?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Ubah Data Absensi <?=$nama_siswa?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <label class="control-label" for="nama_siswa">Nama Siswa</label>
                                                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="" value="<?=$nama_siswa?>" disabled>

                                                <label class="control-label mt-3" for="absen">Absen</label>
                                                <input type="text" name="absen" id="absen" class="form-control" placeholder="" value="<?=$absen?>">

                                                <label class="control-label mt-3" for="izin">Izin</label>
                                                <input type="text" name="izin" id="izin" class="form-control" placeholder="" value="<?=$izin?>">

                                                <label class="control-label mt-3" for="sakit">Sakit</label>
                                                <input type="text" name="sakit" id="sakit" class="form-control" placeholder="" value="<?=$sakit?>">

                                                <input type="hidden" name="idabsensi" value="<?=$idabsensi;?>">
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" name="editabsen" >Simpan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                        </form> 
                                </div>
                            </div>
                        </div>


                            <!-- Modal Delete -->
                            <div class="modal fade" id="delete<?=$idabsensi?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Data Absensi <?=$nama_siswa?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        
                                        <form method="post">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus Data Absensi ini ?
                                                    <input type="hidden" name="idabsensi" value="<?=$idabsensi;?>">
                                            
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" name="hapusabsen" >Hapus</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                            </div>

                                        </form> 
                                    </div>
                                </div>
                            </div>



                            <?php }}else{ ?> 
                            <tr class="text-center">
                                <td colspan="6">Data tidak ada</td>
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

<!-- Tambah Data -->
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Absensi</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

                <form action="data-absensi-control.php" method="POST" enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <label class="control-label" for="nama_siswa">Nama Siswa</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="absen">Absen</label>
                        <input type="text" name="absen" id="absen" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="izin">Izin</label>
                        <input type="text" name="izin" id="izin" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="sakit">Sakit</label>
                        <input type="text" name="sakit" id="sakit" class="form-control" placeholder="" >
                    </div>
    
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="tambahabsen" >Simpan</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                </form>
        </div>
    </div>
</div>