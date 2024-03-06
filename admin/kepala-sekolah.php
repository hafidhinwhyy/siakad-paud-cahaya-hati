<?php include ('../config/autoload.php'); ?>
<?php include ('kepala-sekolah-control.php'); ?>
<?php include('../template/header.php'); ?> 

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kepala Sekolah</h1>

    <div class="col-md-12">
        <!-- <?php if(isset($_SESSION['pesan_sukses'])) { ?>
        
            <div class="alert alert-success">
                <?= $_SESSION['pesan_sukses'] ?>
            </div>
        <?php } 
            // unset($_SESSION['pesan_sukses']);
        ?> -->
    </div>

    <form class="user" method="POST" action="<?= $base_url?>/admin/kepala-sekolah.php" 
    enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label for="nama_kepsek">Nama Kepala Sekolah</label>
                        <input type="text" name="nama_kepsek" class="form-control"
                            id="nama_kepsek" placeholder="Nama Kepala Sekolah" value="<?= $data_kepala_sekolah['nama_kepsek']?>">
                    </div>
                    <div class="form-group">
                        <label for="sambutan_kepsek">Sambutan Kepala Sekolah</label>
                        <textarea name="sambutan_kepsek" class="form-control" id="sambutan_kepsek" rows="3">
                            <?= $data_kepala_sekolah['sambutan_kepsek']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Foto Kepala Sekolah</label>

                        <div class="form-group">
                                <?php 
                                    if(isset($data_kepala_sekolah['foto_kepsek']) && $data_kepala_sekolah['foto_kepsek'] != '') {
                                        $foto_kepsek = '../uploads/identitas/'.$data_kepala_sekolah['foto_kepsek'];
                                    } else {
                                        $foto_kepsek = '../assets1/img/avatar.jpg';
                                    }
                                ?>
                            <img src="<?= $foto_kepsek ?>" alt="foto kepala sekolah" class="img-fluid" width="100px">
                            <br>
                            <input type="hidden" name="foto_lama" value="<?= $data_kepala_sekolah['foto_kepsek'] ?>">
                            <input type="file" name="foto_baru" class="input-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" name="btn_simpan" value="simpan_datakepsek" class="btn btn-primary mb-5">Simpan Perubahan</button>
                        <a href="index.php" class="btn btn-danger mb-5">Kembali</a>
                    </div>
                </div>
            </div>
    </form>

    <!-- DataTales Example
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nama Kepala Sekolah</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Kepala Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Sambutan Kepala Sekolah</label>
                        <textarea class="form-control" id="keterangan" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Foto Kepala Sekolah</label>
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