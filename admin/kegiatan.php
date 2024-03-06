<?php include ('../config/autoload.php'); ?>
<?php include ('kegiatan-control.php'); ?>
<?php include('../template/header.php'); ?> 

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Kegiatan</h1>

    <div class="col-md-12">
        <!-- <?php if(isset($_SESSION['pesan_sukses'])) { ?>
        
            <div class="alert alert-success">
                <?= $_SESSION['pesan_sukses'] ?>
            </div>
        <?php } 
            // unset($_SESSION['pesan_sukses']);
        ?> -->
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#mymodal">Tambah Data</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Tujuan</th>
                            <th>Sasaran</th>
                            <th>Sumber Dana</th>
                            <th>Penanggung Jawab</th>
                            <th>Gambar</th>
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

                            $kegiatan = mysqli_query($conn, "SELECT * FROM kegiatan $where ORDER BY id DESC");
                            if(mysqli_num_rows($kegiatan) > 0){
                                while($kg = mysqli_fetch_array($kegiatan)){ 

                                    $nama = $kg['nama'];
                                    $keterangan = $kg['keterangan'];
                                    $tujuan = $kg['tujuan'];
                                    $sasaran = $kg['sasaran'];
                                    $sbr_dana = $kg['sbr_dana'];
                                    $pj = $kg['pj'];
                                    $gambar = $kg['gambar'];
                                    $idkegiatan = $kg['id'];
                        ?>

                        <tr class="text-center">
                            <td><?= $no++?></td>
                            <td><?= $kg['nama']?></td>
                            <td><?= $kg['keterangan']?></td>
                            <td><?= $kg['tujuan']?></td>
                            <td><?= $kg['sasaran']?></td>
                            <td><?= $kg['sbr_dana']?></td>
                            <td><?= $kg['pj']?></td>
                            <td><img src="../uploads/kegiatan/<?= $gambar ?>" width="100px"></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#edit<?=$idkegiatan?>">Edit</button>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" 
                                    data-target="#delete<?=$idkegiatan?>">Hapus</button>
                            </td>
                        </tr>


                                        <!-- The Modal edit -->
                                        <div class="modal fade" id="edit<?=$idkegiatan?>">
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
                                                            <label class="control-label" for="nama">Nama Kegiatan</label>
                                                            <input type="text" name="nama" class="form-control" placeholder="" value="<?=$nama?>">

                                                            <label class="control-label mt-3" for="keterangan">Keterangan</label>
                                                            <textarea name="keterangan" id="keterangan" class="form-control"><?=$keterangan?></textarea>

                                                            <label class="control-label mt-3" for="tujuan">Tujuan</label>
                                                            <textarea name="tujuan" id="tujuan" class="form-control"><?=$tujuan?></textarea>

                                                            <label class="control-label" for="sasaran">Sasaran</label>
                                                            <input type="text" name="sasaran" id="sasaran" class="form-control" placeholder="" value="<?=$sasaran?>">

                                                            <label class="control-label" for="sbr_dana">Sumber Dana</label>
                                                            <input type="text" name="sbr_dana" id="sbr_dana" class="form-control" placeholder="" value="<?=$sbr_dana?>">

                                                            <label class="control-label" for="pj">Penanggung Jawab</label>
                                                            <input type="text" name="pj" id="pj" class="form-control" placeholder="" value="<?=$pj?>">

                                                            <label class="control-label mt-3" for="gambar">Foto Kegiatan</label> <br>
                                                            <img src="../uploads/kegiatan/<?= $gambar?>" width="200px" class="image">
                                                                <input type="hidden" name="gambar2" value="<?= $gambar?>">
                                                                <input type="file" name="gambar" class="input-control">

                                                                <input type="hidden" name="idkegiatan" value="<?=$idkegiatan;?>">
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success" name="editkegiatan" >Simpan</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form> 
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="delete<?=$idkegiatan?>">
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
                                                                    Apakah anda yakin ingin menghapus kegiatan ini ?
                                                                    <input type="hidden" name="idkegiatan" value="<?=$idkegiatan;?>">
                                                                    <input type="hidden" name="gambar" value="<?=$gambar;?>">
                                                            
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-danger" name="hapuskegiatan" >Hapus</button>
                                                                <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                                            </div>

                                                        </form> 
                                                    </div>
                                                </div>
                                            </div>



                                        <?php }}else{ ?>
                                            <tr>
                                                <td colspan="5">Data tidak ada</td>
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

<!-- The Modal -->
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <form action="kegiatan-control.php" method="post" enctype="multipart/form-data">

            <!-- Modal body -->
            <div class="modal-body">
                <label class="control-label" for="nama">Nama Kegiatan</label>
                <input type="text" name="nama" class="form-control" id="nama" required>

                <label class="control-label mt-3" for="keterangan">Keterangan</label>
                <textarea name="keterangan" class="form-control" id="keterangan"></textarea>

                <label class="control-label mt-3" for="tujuan">Tujuan</label>
                <textarea name="tujuan" class="form-control" id="tujuan"></textarea>

                <label class="control-label" for="sasaran">Sasaran</label>
                <input type="text" name="sasaran" class="form-control" id="sasaran" required>

                <label class="control-label" for="sbr_dana">Sumber Dana</label>
                <input type="text" name="sbr_dana" class="form-control" id="sbr_dana" required>

                <label class="control-label" for="pj">Penanggung Jawab</label>
                <input type="text" name="pj" class="form-control" id="pj" required>

                <label class="control-label mt-3" for="gambar">Foto Kegiatan</label>
                <input type="file" name="gambar" class="form-control" id="gambar" required>
            </div>
    
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </form>
        </div>
    </div>
</div>