<?php include ('../config/autoload.php'); ?>
<?php include ('tentang-sekolah-control.php'); ?>
<?php include('../template/header.php'); ?> 

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tentang Sekolah</h1>

    <div class="col-md-12">
        <!-- <?php if(isset($_SESSION['pesan_sukses'])) { ?>
        
            <div class="alert alert-success">
                <?= $_SESSION['pesan_sukses'] ?>
            </div>
        <?php } 
            unset($_SESSION['pesan_sukses']);
        ?> -->
    </div>
    <form class="user" method="POST" action="<?= $base_url?>/admin/tentang-sekolah.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                
                    <div class="form-group">
                        <label for="tentang">Tentang Sekolah</label>
                        <textarea name="tentang_sekolah" class="form-control" id="tentang" rows="3"><?= $data_tentang['tentang_sekolah']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Foto Sekolah</label>

                        <div class="form-group">
                                <?php 
                                    if(isset($data_tentang['foto_sekolah']) && $data_tentang['foto_sekolah'] != '') {
                                        $foto_sekolah = '../uploads/identitas/'.$data_tentang['foto_sekolah'];
                                    } else {
                                        $foto_sekolah = '../assets1/img/avatar.jpg';
                                    }
                                ?>
                            <img src="<?= $foto_sekolah ?>" alt="foto sekolah" class="img-fluid" width="100px">
                            <br>
                            <input type="hidden" name="foto_lama" value="<?= $data_tentang['foto_sekolah'] ?>">
                            <input type="file" name="foto_baru" class="input-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" name="btn_simpan" value="simpan_tentang" class="btn btn-primary mb-5">Simpan Perubahan</button>
                        <a href="index.php" class="btn btn-danger mb-5">Kembali</a>
                    </div>
            </div>
        </div>
    </form>

        <!-- DataTales Example -->
        <!-- <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tentang Sekolah</label>
                            <textarea class="form-control" id="keterangan" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto Sekolah</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <br>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#hapus<?=$id;?>">
                                                    Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>
        </div> -->

    </div>
    <!-- /.container-fluid -->

<?php include('../template/footer.php'); ?> 