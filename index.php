<?php include 'header.php'; ?>
    <!-- bagian banner -->
    <div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_sekolah ?>');">
        <div class="banner-text">
            <div class="container">
                <h3>Selamat Datang di <?= $d->nama ?></h3>
                <p>Beriman, Berilmu, Beramal!</p>
            </div>
        </div>
    </div>

    <!-- bagian sambutan -->
    <div class="section">
        
        <div class="container text-center">
            <h3>Sambutan Kepala Sekolah</h3>
            <img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="100">
            <h4><?= $d->nama_kepsek ?></h4>
            <p><?= $d->sambutan_kepsek ?></p>
        </div>
    </div>

    <!-- bagian kelas -->
    <div class="section" id="kelas">
        <div class="container text-center">
            <h3>Pembagian Kelas</h3>
                <?php 
                    $kelas = mysqli_query($conn, "SELECT * FROM kelas ORDER BY id DESC");
                    if(mysqli_num_rows($kelas) > 0){
                        while($k = mysqli_fetch_array($kelas)){
                ?>
                    <div class="col-3">
                        <a href="detail-kelas.php?id=<?= $k['id'] ?>" class="thumbnail-link">
                        <div class="thumbnail-box">
                            <div class= "thumbnail-img" style="background-image: url('uploads/kelas/<?= $k['foto']?>');">
                            </div>
                                <div>
                                    <table class="tablekelas">
                                        <tr>
                                            <th><?= $k['nama']?></th>
                                            <th><?= $k['umur']?></th>
                                            
                                            <!-- <th><?= $k['keterangan']?></th> -->
                                        </tr>
                                    </table>
                                </div>
                            <div class="thumbnail-text">
                                <?= $k['keterangan']?>
                            </div>
                            <!-- <div class="thumbnail-text">
                                <?= $k['keterangan']?>
                            </div>  -->
                        </div>
                        </a>
                    </div>
                <?php }}else{?>
                    Tidak ada data
                <?php } ?>
        </div>
    </div>

    <!-- bagian kegiatan -->
    <div class="section">

        <div class="container text-center">
            <h3>Kegiatan Kami</h3>
            <?php 
                $kegiatan = mysqli_query($conn, "SELECT * FROM kegiatan ORDER BY id DESC");
                if(mysqli_num_rows($kegiatan) > 0){
                    while($g = mysqli_fetch_array($kegiatan)){

                    
            ?>

                <div class="col-4">
                    <a href="detail-kegiatan.php?id=<?= $g['id'] ?>" class="thumbnail-link">
                    <div class="thumbnail-box">
                        <div class= "thumbnail-img" style="background-image: url('uploads/kegiatan/<?= $g['gambar']?>');">

                        </div>

                        <div class="thumbnail-text1">
                           <b> <?= $g['nama']?> </b>
                        </div>
                        <div class="thumbnail-text2">
                        <a href="" title="<?= $g['keterangan']?>" class="text-purple"><i class="fa fa-location-pin"></i><?= $g['keterangan']?></a>
                        </div>
                    </div>
                    </a>
                </div>

            <?php }}else{?>

                Tidak ada data

            <?php } ?>
        </div>

    </div>

    <!-- bagian pendaftaran--> 
    <!-- <div class="section" id="kelas">
        
        <div class="container text-center">
            <h3>Pendaftaran</h3>
            <h4>Registrasi Pendaftaran</h4>
            <a href="login.php" class="btn">Klik Disini</a>
        </div>
    </div> -->

    <!-- bagian galeri -->
    <!-- <div class="section">
        <div class="container text-center">
            <h3>Galeri Kami</h3>
                <?php 
                    $galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");
                    if(mysqli_num_rows($galeri) > 0){
                        while($g = mysqli_fetch_array($galeri)){     
                ?>
                <div class="col-4">
                    <div class="thumbnail-box">
                        <div class= "thumbnail-img" style="background-image: url('uploads/galeri/<?= $g['foto']?>');"></div>
                        <div class="thumbnail-text1">
                            <b> <?= $g['keterangan']?> </b>
                        </div>
                    </div>
                    </a>
                </div>
            <?php }}else{?>
                Tidak ada data
            <?php } ?>
        </div>
    </div> -->

<?php include 'footer.php'; ?>
