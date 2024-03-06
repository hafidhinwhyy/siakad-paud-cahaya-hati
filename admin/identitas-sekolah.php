<?php include ('../config/autoload.php'); ?>
<?php include ('identitas-sekolah-control.php'); ?>
<?php include('../template/header.php'); ?> 

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">IDENTITAS SEKOLAH</h1>

    <div class="col-md-12">
        <!-- <?php if(isset($_SESSION['pesan_sukses'])) { ?>
        
            <div class="alert alert-success">
                <?= $_SESSION['pesan_sukses'] ?>
            </div>
        <?php } 
            // unset($_SESSION['pesan_sukses']);
        ?> -->
    </div>

    <form class="user" method="POST" action="<?= $base_url?>/admin/identitas-sekolah.php" 
    enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control"
                            id="nama" placeholder="Nama Sekolah" value="<?= $data_identitas['nama']?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Sekolah</label>
                        <input type="email" name="email" class="form-control"
                            id="email" placeholder="Email" value="<?= $data_identitas['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon Sekolah</label>
                        <input type="text" name="telp" class="form-control"
                            id="telp" placeholder="Telepon Sekolah" value="<?= $data_identitas['telepon']?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"><?= $data_identitas['alamat']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gmaps">Google Maps</label>
                        <input type="text" name="gmaps" class="form-control"
                            id="gmaps" placeholder="Google Maps" value="<?= $data_identitas['google_maps']?>">
                    </div>
            

                    <div class="form-group">
                        <label for="logo">Logo Sekolah</label>

                        <div class="form-group">
                        <?php 
                            if(isset($data_identitas['logo']) && $data_identitas['logo'] != '') {
                                $logo = '../uploads/identitas/'.$data_identitas['logo'];
                            } else {
                                $logo = '../assets1/img/avatar.jpg';
                            }
                        ?>
                        <img src="<?= $logo ?>" alt="logo identitas" class="img-fluid" width="100px">
                        
                        <input type="hidden" name="logo_lama" value="<?= $data_identitas['logo'] ?>" class="form-control mt-2">
                        <input type="file" name="logo_baru" class="form-control mt-2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="favicon">Favicon Sekolah</label>

                        <div class="form-group">
                        <?php 
                            if(isset($data_identitas['favicon']) && $data_identitas['favicon'] != '') {
                                $favicon = '../uploads/identitas/'.$data_identitas['favicon'];
                            } else {
                                $favicon = '../uploads/img/avatar.jpg';
                            }
                        ?>
                        <img src="<?= $favicon ?>" alt="favicon identitas" class="img-fluid">

                        <input type="hidden" name="favicon_lama" value="<?= $data_identitas['favicon'] ?>" class="form-control mt-2">
                        <input type="file" name="favicon_baru" class="form-control mt-2">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" name="btn_simpan" value="simpan_identitas" class="btn btn-primary mb-5">Simpan Perubahan</button>
                        <a href="index.php" class="btn btn-danger mb-5">Kembali</a>
                    </div>
                </div>
            </div>
    </form>
    
</div>
<!-- /.container-fluid -->

<?php include('../template/footer.php'); ?> 