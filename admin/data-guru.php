<?php include ('../config/autoload.php'); ?>
<?php include ('data-guru-control.php');?>
<?php include('../template/header.php'); ?> 
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Guru</h1>
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
                        data-target="#mymodal">Tambah Data</button>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>username</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jabatan</th>
                                        <th>TMT</th>
                                        <th>Tanggal dan Nomor SK</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    include '../config/koneksi.php';
                                    $no = 1;
                                        $where = " WHERE 1=1 ";
                                            if(isset($_GET['key'])){
                                        $where .= " AND nama LIKE '%".addslashes($_GET['key'])."%' ";
                                        }

                                    $guru = mysqli_query($conn, "SELECT * FROM guru $where order by id desc");
                                    
                                    if(mysqli_num_rows($guru) > 0){
                                        while($k = mysqli_fetch_array($guru)){
                                        
                                        $nama_guru = $k['nama_guru'];
                                        $username = $k['username'];
                                        $tpt_lahir = $k['tpt_lahir'];
                                        $tgl_lahir = $k['tgl_lahir'];
                                        
                                        $alamat = $k['alamat'];
                                        $jabatan = $k['jabatan'];
                                        $tmt = $k['tmt'];
                                        $tgl_sk = $k['tgl_sk'];
                                        $no_sk = $k['no_sk'];
                                        
                                        $foto = $k['foto'];
                                        $idguru = $k['id'];
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td><?= $nama_guru?></td>
                                            <td><?= $username?></td>
                                            <td><?= $tpt_lahir?>, <?= $tgl_lahir?></td>
                                            <td><?= $alamat?></td>
                                            <td><?= $jabatan?></td>
                                            <td><?= $tmt?></td>
                                            <td><?= $tgl_sk?><br><?= $no_sk?></td>
                                            
                                            <td><img src="../uploads/guru/<?= $foto ?>" width= "50px"> </td>
                                            <td>
                                                
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#edit<?=$idguru?>">Edit</button>

                                                <button type="button" class="btn btn-danger" data-toggle="modal" 
                                                    data-target="#delete<?=$idguru?>">Hapus</button>
                                            </td>
                                        </tr>
                            
                        <!-- The Modal edit -->
                        <div class="modal fade" id="edit<?=$idguru?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Ubah Data <?=$nama_guru?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <label class="control-label" for="nama_guru">Nama Guru</label>
                                                <input type="text" name="nama_guru" id="nama_guru" class="form-control" placeholder="Nama Guru" value="<?=$nama_guru?>">

                                                <label class="control-label mt-3" for="username">Username</label>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?=$username?>">

                                                <label class="control-label mt-3" for="tpt_lahir">Tempat Lahir</label>
                                                <input type="text" name="tpt_lahir" id="tpt_lahir" class="form-control" placeholder="Tempat Lahir" value="<?=$tpt_lahir?>">

                                                <label class="control-label mt-3" for="tgl_lahir">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?=$tgl_lahir?>">

                                                <label class="control-label mt-3" for="alamat">Alamat Lengkap</label>
                                                <textarea name="alamat" id="alamat" class="form-control"><?=$alamat?></textarea>

                                                <label class="control-label mt-3" for="jabatan">Jabatan</label>
                                                <select class="form-control" id="jabatan" name="jabatan" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                    <option value="Guru">Guru</option>
                                                    <option value="Bendahara">Bendahara</option>
                                                </select>

                                                <label class="control-label mt-3" for="tmt">TMT</label>
                                                <input type="date" name="tmt" id="tmt" class="form-control" placeholder="TMT" value="<?=$tmt?>">

                                                <label class="control-label mt-3" for="tgl_sk">Tanggal SK</label>
                                                <input type="date" name="tgl_sk" id="tgl_sk" class="form-control" placeholder="Tanggal SK" value="<?=$tgl_sk?>">

                                                <label class="control-label mt-3" for="no_sk">Nomor SK</label>
                                                <input type="text" name="no_sk" id="no_sk" class="form-control" placeholder="Nomor SK" value="<?=$no_sk?>">

                                                <label class="control-label mt-3" for="foto">Foto</label> <br>
                                                <img src="../uploads/guru/<?= $foto?>" width="200px" class="image">
                                                    <input type="hidden" name="gambar2" value="<?= $foto?>">
                                                    <input type="file" name="gambar" class="input-control">

                                                    <input type="hidden" name="idguru" value="<?=$idguru;?>"><br>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" name="editguru" >Simpan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                        </form> 
                                </div>
                            </div>
                        </div>


                            <!-- Modal Delete -->
                            <div class="modal fade" id="delete<?=$idguru?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Data <?=$nama_guru?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        
                                        <form method="post">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus Data Guru ini ?
                                                    <input type="hidden" name="idguru" value="<?=$idguru;?>">
                                                    <input type="hidden" name="foto" value="<?=$foto;?>">
                                            
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" name="hapusguru" >Hapus</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                            </div>

                                        </form> 
                                    </div>
                                </div>
                            </div>



                            <?php }}else{ ?> 
                            <tr class="text-center">
                                <td colspan="10">Data tidak ada</td>
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
                <h4 class="modal-title">Tambah Data Guru</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

                <form action="data-guru-control.php" method="POST" enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <label class="control-label" for="nama_guru">Nama Guru</label>
                        <input type="text" name="nama_guru" id="nama_guru" class="form-control" placeholder="">

                        <label class="control-label mt-3" for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="tpt_lahir">Tempat Lahir</label>
                        <input type="text" name="tpt_lahir" id="tpt_lahir" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="alamat">Alamat Lengkap</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>

                        <label class="control-label mt-3" for="jabatan">Jabatan</label>
                        <select class="form-control" id="jabatan" name="jabatan" required="">
                            <option value="">Pilih</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Guru">Guru</option>
                            <option value="Bendahara">Bendahara</option>
                        </select>

                        <label class="control-label mt-3" for="tmt">TMT</label>
                        <input type="date" name="tmt" id="tmt" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="tgl_sk">Tanggal SK</label>
                        <input type="date" name="tgl_sk" id="tgl_sk" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="no_sk">Nomor SK</label>
                        <input type="text" name="no_sk" id="no_sk" class="form-control" placeholder="" >

                        <label class="control-label mt-3" for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" required>
                    </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="tambahguru">Simpan</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                </form>
        </div>
    </div>
</div>