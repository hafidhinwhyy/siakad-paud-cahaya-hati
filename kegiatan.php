<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
        <h3 class="text-center">Kegiatan</h3>
            <?php 
                $kegiatan = mysqli_query($conn, "SELECT * FROM kegiatan ORDER BY id DESC");
                if(mysqli_num_rows($kegiatan) > 0){
                    while($g = mysqli_fetch_array($kegiatan)){  
            ?>
                <div class="col-4 text-center">
                    <div class="thumbnail-box">
                        <div class= "thumbnail-img" style="background-image: url('uploads/kegiatan/<?= $g['gambar']?>');"></div>
                            <div class="thumbnail-text1">
                                <?= $g['nama']?>
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

<?php include 'footer.php'; ?>