<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
        <h3 class="text-center">Tentang Sekolah</h3>
        <img src="uploads/identitas/<?= $d->foto_sekolah ?>" width="70%" class="image image-center">
        <?= $d->tentang_sekolah ?>
    </div>
</div>

<?php include 'footer.php'; ?>