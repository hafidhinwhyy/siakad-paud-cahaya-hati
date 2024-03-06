<?php include 'header.php'; ?>

<div class="section">
    <div class="container">

        <?php 
            $kelas = mysqli_query ($conn, "SELECT * FROM kelas WHERE id = '".$_GET['id']."' ");

            if(mysqli_num_rows($kelas) == 0){
                echo "<script>window.location='index.php'</script>";
            }
        
            $p        = mysqli_fetch_object($kelas);
        ?>
        <h3 class="text-center"><?= $p->nama ?></h3>
        <img src="uploads/kelas/<?= $p->foto ?>" width="70%" class="image image-center">
        <?= $p->keterangan ?>
    </div>
</div>

<?php include 'footer.php'; ?>