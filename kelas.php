<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
        <h3 class="text-center">Kelas</h3>
            <?php 
                $kelas = mysqli_query($conn, "SELECT * FROM kelas ORDER BY id DESC");
                if(mysqli_num_rows($kelas) > 0){
                    while($k = mysqli_fetch_array($kelas)){
            ?>
                <div class="col-3 text-center">
                    <a href="detail-kelas.php?id=<?= $k['id'] ?>" class="thumbnail-link">
                        <div class="thumbnail-box">
                            <div class= "thumbnail-img" style="background-image: url('uploads/kelas/<?= $k['foto']?>');"></div>
                            <div>
                                <table class="tablekelas">
                                    <tr>
                                        <th><?= $k['umur']?></th>
                                        <th><?= $k['jamkelas']?></th>
                                        <th><?= $k['nama']?></th>
                                    </tr>
                                </table>
                            </div>
                            <div class="thumbnail-text">
                                <?= $k['kelompok']?>
                            </div>
                            <div class="thumbnail-text">
                                <?= $k['keterangan']?>
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