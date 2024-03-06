<?php include ('../config/autoload.php'); ?>
<?php include ('kelas-control.php');?>
<?php include('../template/header.php'); ?> 
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Rombongan Belajar</h1>
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
                <div class="card-header py-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#myModal">Tambah Data</button>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Rombel</th>
                                        <th>Umur</th>
                                        <th>Keterangan</th>
                                        <th>Foto</th>
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

                                    $kelas = mysqli_query($conn, "SELECT * FROM kelas $where order by id desc");
                                    
                                    if(mysqli_num_rows($kelas) > 0){
                                        while($k = mysqli_fetch_array($kelas)){
                                        
                                        $nama = $k['nama'];
                                        $umur = $k['umur'];
                                        $keterangan = $k['keterangan'];
                                        $foto = $k['foto'];
                                        $idkelas = $k['id'];
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td><?= $nama?></td>
                                            <td><?= $umur?></td>
                                            <td><?= $keterangan?></td> 
                                            <td><img src="../uploads/kelas/<?= $foto ?>" width= "100px"> </td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#edit<?=$idkelas?>">Edit</button>

                                                <button type="button" class="btn btn-danger" data-toggle="modal" 
                                                    data-target="#delete<?=$idkelas?>">Hapus</button>
                                            </td>
                                        </tr>
                            
                        <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Rombel</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
                <form class="siswa" action="kelas-control.php" method="post" enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <label class="control-label" for="nama">Nama Rombel</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>

                        <label class="control-label mt-3" for="umur">Umur</label>
                        <input type="text" name="umur" class="form-control" id="umur" required>

                        <label class="control-label mt-3" for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan"></textarea>

                        <label class="control-label mt-3" for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" required>
                    </div>
    
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="tambahkelas">Simpan</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                </form>
        </div>
    </div>
</div>
                        
                                        <!-- The Modal edit -->
                        <div class="modal fade" id="edit<?=$idkelas?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Ubah <?=$nama?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <label class="control-label" for="nama">Nama Rombel</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama Kelas" value="<?=$nama?>">

                                                <label class="control-label mt-3" for="umur">Umur</label>
                                                <input type="text" name="umur" class="form-control" placeholder="Umur" value="<?=$umur?>">

                                                <label class="control-label mt-3" for="keterangan">Keterangan</label>
                                                <textarea name="keterangan" id="keterangan" class="form-control"><?=$keterangan?></textarea>

                                                <label class="control-label mt-3" for="foto">Foto</label> <br>
                                                <img src="../uploads/kelas/<?= $foto?>" width="200px" class="image">
                                                    <input type="hidden" name="gambar2" value="<?= $foto?>">
                                                    <input type="file" name="gambar" class="input-control">

                                                    <input type="hidden" name="idkelas" value="<?=$idkelas;?>">
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" name="editkelas" >Submit</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                        </form> 
                                </div>
                            </div>
                        </div>


                            <!-- Modal Delete -->
                            <div class="modal fade" id="delete<?=$idkelas?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus <?=$nama?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        
                                        <form method="post">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus kelas ini ?
                                                    <input type="hidden" name="idkelas" value="<?=$idkelas;?>">
                                                    <input type="hidden" name="foto" value="<?=$foto;?>">
                                            
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" name="hapuskelas" >Hapus</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                            </div>

                                        </form> 
                                    </div>
                                </div>
                            </div>



                            <?php }}else{ ?> 
                            <tr>
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